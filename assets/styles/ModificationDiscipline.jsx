import React, { useEffect, useState } from "react";
import Swal from "sweetalert2";
import withReactContent from "sweetalert2-react-content";
import AOS from "aos";
import ReactLoading from "react-loading";

const MySwal = withReactContent(Swal);

export default function ModificationDiscipline() {
  const [isLoading, setIsLoading] = useState(false);
  const [loading, setLoading] = useState(true);
  const [abonnement, setAbonnement] = useState();
  const [disciplines, setDisciplines] = useState([]);
  const [selectedDisciplines, setSelectedDisciplines] = useState([]);
  const [totalJoueursChoisis, setTotalJoueursChoisis] = useState(0);
  const nombreMaxJoueurs = 40;

  useEffect(() => {
    AOS.init();

    async function fetchAbonnement() {
      try {
        const response = await fetch("/api/abonnement/");
        if (!response.ok) {
          throw new Error("La réquête a échoué");
        }

        const data = await response.json();
        setAbonnement(data);
      } catch (e) {
        console.error("Erreur de la récupération de l'abonnement: ", e);
      }
    }

    async function fetchDiscipline() {
      try {
        const response = await fetch("/api/discipline/");
        if (!response.ok) {
          throw new Error("La requête a échoué");
        }

        const disciplineData = await response.json();
        setDisciplines(disciplineData);

        // Charger les disciplines déjà choisies
        const responseSelected = await fetch("/api/discipline/participation");
        if (responseSelected.ok) {
          const selectedData = await responseSelected.json();
          const selectedIds = selectedData.map((discipline) => discipline.id);
          setSelectedDisciplines(selectedIds);
          //   setSelectedDisciplines(selectedData);

          // Calculer le total des joueurs choisis initialement
          const totalJoueurs = selectedData.reduce((total, disciplineId) => {
            const discipline = disciplineData.find(
              (d) => d.id === disciplineId
            );
            return total + (discipline ? discipline.joueur : 1);
          }, 0);

          setTotalJoueursChoisis(totalJoueurs);
        }
      } catch (e) {
        console.error("Erreur de la récupération des disciplines : ", e);
      }
    }

    fetchAbonnement();
    fetchDiscipline();
  }, []);

  const handleDisciplineChange = (e) => {
    const selectedDisciplineId = parseInt(e.target.value, 10);
    let newSelectedDisciplines = [...selectedDisciplines];

    if (e.target.checked) {
      newSelectedDisciplines.push(selectedDisciplineId);
    } else {
      newSelectedDisciplines = newSelectedDisciplines.filter(
        (id) => id !== selectedDisciplineId
      );
    }

    if (newSelectedDisciplines.length > 4) {
      MySwal.fire({
        icon: "warning",
        title: "Limite atteinte",
        text: "Vous ne pouvez sélectionner que quatre disciplines.",
      });
      return;
    }

    const totalJoueurs = newSelectedDisciplines.reduce(
      (total, disciplineId) => {
        const discipline = disciplines.find((d) => d.id === disciplineId);
        return total + (discipline ? discipline.joueur : 1);
      },
      0
    );

    if (totalJoueurs > nombreMaxJoueurs) {
      MySwal.fire({
        icon: "warning",
        title: "Limite de joueurs atteinte",
        text: `Vous ne pouvez choisir que jusqu'à ${nombreMaxJoueurs} joueurs au total.`,
      });
      return;
    }

    setTotalJoueursChoisis(totalJoueurs);
    setSelectedDisciplines(newSelectedDisciplines);
  };

  const saveUpdatedDisciplines = async () => {
    try {
      const response = await fetch(`/api/discipline/abonnement/${abonnement.id}`, {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          disciplines: selectedDisciplines,
          totalJoueurs: totalJoueursChoisis,
        }),
      });

      if (!response.ok) {
        throw new Error("La mise à jour a échoué");
      }

      const responseData = await response.json();

      MySwal.fire({
        icon: "success",
        title: "Modification réussie",
        text: "Les disciplines ont été mises à jour avec succès !",
        timer: 5000,
      }).then(() => {
        window.location.href = "/membre/participation";
      });
    } catch (error) {
      console.error("Erreur lors de la mise à jour des disciplines :", error);
    }
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    saveUpdatedDisciplines();
  };

  return (
    <div>
      <section id="modification">
        <div className="modification-disciplines">
          <div className="row no-gutters justify-content-center align-items-center">
            <div className="col-xl-10">
              <div
                className="formulaire-bloc"
                data-aos="fade-up"
                data-aos-duration="1500"
              >
                <form onSubmit={handleSubmit} style={{ marginTop: "30px" }}>
                  <div className="row mb-5 justify-content-center align-content-center">
                    <div className="col-12 mb-1 text-center">
                      <h3 className="titre">Modification de disciplines</h3>
                    </div>
                    <div className="col-6 text-center">
                      <h4>
                        Joueurs participants: <span>{totalJoueursChoisis}</span>
                      </h4>
                    </div>
                    <div className="col-6 text-center">
                      <h4>
                        Joueurs restants:{" "}
                        <span>{nombreMaxJoueurs - totalJoueursChoisis}</span>
                      </h4>
                    </div>
                  </div>
                  <div className="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 no-gutters mt-5">
                    {disciplines.map((discipline) => (
                      <div key={discipline.id} className="col">
                        <div className="form-check">
                          <input
                            type="checkbox"
                            className="form-check-input"
                            id={`discipline-${discipline.id}`}
                            value={discipline.id}
                            onChange={(e) => handleDisciplineChange(e)}
                            checked={selectedDisciplines.includes(
                              discipline.id
                            )}
                          />
                          <label
                            className="form-check-label"
                            htmlFor={`discipline-${discipline.id}`}
                          >
                            {discipline.titre}
                            <span className="bloc">
                              (
                              <span className="valeur">
                                {discipline.joueur ? discipline.joueur : 1}
                              </span>
                              )
                            </span>
                          </label>
                        </div>
                      </div>
                    ))}
                  </div>

                  <div className="row mt-5 d-flex justify-content-center align-content-center align-items-center">
                    <div className="col-12 col-md-6 d-grid gap-2">
                      <input
                        type="hidden"
                        name="nombreJoueu"
                        value={totalJoueursChoisis}
                      />
                      <button
                        type="submit"
                        className="btn btn-success btn-lg bouton"
                      >
                        Modifier{" "}
                        <i className="bi bi-arrow-right-circle-fill"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      {isLoading ? (
        <div className="loading-animation">
          <ReactLoading type="spin" color="#007BFF" />
        </div>
      ) : null}
    </div>
  );
}
