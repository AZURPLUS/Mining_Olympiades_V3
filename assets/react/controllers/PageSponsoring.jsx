import React, {useEffect, useState} from 'react';
import ReactLoading from "react-loading";
import {CircleSpinnerOverlay} from "react-spinner-overlay";
import AOS from 'aos';
import $ from 'jquery';
import Swal from 'sweetalert2';
import withReactContent from 'sweetalert2-react-content';

const MySwal = withReactContent(Swal);
const docUrl = '/doc/plaquette-commerciale.pdf'


export default function (props) {
    const [isLoading, setIsLoading] = useState(false);
    const [loading, setLoading] = useState(true);
    const [nom, setNom] = useState('');
    const [prenoms, setPrenoms] = useState('');
    const [email, setEmail] = useState('');
    const [contact, setContact] = useState('');
    const [compagnie, setCompagnie] = useState('')
    const [fonction, setFonction] = useState('')
    const [media, setMedia] = useState('')

    useEffect(() => {
        AOS.init();

        window.onload = () =>{
            setLoading(false);
        }

    }, []);

    const handleSubmit = async(e) => {
      e.preventDefault();

      const formData = new FormData(e.target);

      try {
          const response = await fetch('/api/sponsoring/',{
              method: "POST",
              body: formData,
          });

          if (!response.ok){
              console.log(`Erreur HTTP! Status: ${response.status}`);
              setIsLoading(false);
              MySwal.fire({
                  icon: 'error',
                  // title: 'Adhésion',
                  text: `Erreur HTTP! Status: ${response.status}`,
                  timer: 6000
              });
          }

          setIsLoading(false);

          console.log(response.status)

          if (response.status === 400){
              MySwal.fire({
                  icon: 'error',
                  title: 'Sponsoring',
                  text: `Echèc! Vous avez déjà envoyé une demande similaire`,
                  timer: 6000
              });
          }else{
              const data = await response.json();
              MySwal.fire({
                  icon: 'success',
                  title: 'Sponsoring',
                  text: `Votre demande a été envoyée avec succès! Vous serez contacté sous peu.`,
                  timer: 6000
              });

              setTimeout(() => {
                  window.open(docUrl, '_blank');
                  // window.location.href = window.location.origin;
                  window.location.href = '/sponsoring/telechargement/plaquette';
              }, 3000);
          }



      } catch (e) {
          console.log("Une erreur s'est produite lors de l'envoi du formulaire :", e);
          setIsLoading(false)
      }
    }

    return (
        <div>
            {loading
                ? <CircleSpinnerOverlay/>
                : (
                    <section id="inscription">
                        <div className="inscription">
                            <div className="row no-gutters justify-content-center align-items-center">
                                <div className="col-xl-10">
                                    <div className="formulaire-bloc" data-aos="fade-up" data-aos-duration="1500">
                                        <h3>{props.titre}</h3>
                                        <form onSubmit={handleSubmit}>
                                            <div className="row row-cols-1 row-cols-lg-2 g-4 no-gutters mt-5">
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_nom"
                                                            name="nom"
                                                            placeholder="nom"
                                                            autoComplete="off"
                                                            required
                                                            value={nom}
                                                            onChange={(e)=> setNom(e.target.value.toUpperCase())}
                                                        />
                                                        <label htmlFor="floatingInput">Nom <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_prenoms"
                                                            name="prenoms"
                                                            placeholder="nom"
                                                            autoComplete="off"
                                                            required
                                                            value={prenoms}
                                                            onChange={(e)=> setPrenoms(e.target.value.toUpperCase())}
                                                        />
                                                        <label htmlFor="floatingInput">Prenoms <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_email"
                                                            name="email"
                                                            placeholder="email"
                                                            autoComplete="off"
                                                            required
                                                            value={email}
                                                            onChange={(e)=> setEmail(e.target.value.toLowerCase())}
                                                        />
                                                        <label htmlFor="floatingInput">Email <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_contact"
                                                            name="contact"
                                                            placeholder="contact"
                                                            autoComplete="off"
                                                            required
                                                            // value={contact}
                                                            // onChange={(e)=> setPrenoms(e.target.value.to())}
                                                        />
                                                        <label htmlFor="floatingInput">Contact <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_compagnie"
                                                            name="compagnie"
                                                            placeholder="compagnie"
                                                            autoComplete="off"
                                                            required
                                                            value={compagnie}
                                                            onChange={(e)=> setCompagnie(e.target.value.toUpperCase())}
                                                        />
                                                        <label htmlFor="floatingInput">Compagnie <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <input
                                                            type="text"
                                                            className="form-control"
                                                            id="_fonction"
                                                            name="fonction"
                                                            placeholder="fonction"
                                                            autoComplete="off"
                                                            required
                                                            value={fonction}
                                                            onChange={(e)=> setFonction(e.target.value.toUpperCase())}
                                                        />
                                                        <label htmlFor="floatingInput">Fonction professionnelle <span>*</span> </label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="form-floating">
                                                        <select
                                                            className="form-select"
                                                            id="_secteur"
                                                            aria-label="Floating label select secteur"
                                                            name="secteur"
                                                            autoComplete="off"
                                                            required
                                                        >
                                                            <option value=""></option>
                                                            <option value="production">Production minière</option>
                                                            <option value="construction">Construction</option>
                                                            <option value="recherche">Recherche minière</option>
                                                            <option value="sous-traitant">Sous-traitants</option>
                                                            <option value="fournisseur">Fournisseur de services</option>
                                                            <option value="geo-service">Geo service</option>
                                                            <option value="autre">Autre</option>
                                                        </select>
                                                        <label htmlFor="_civilite">Secteur <span>*</span></label>
                                                    </div>
                                                </div>
                                                <div className="col">
                                                    <div className="mb-3">
                                                        <input
                                                            className="form-control form-control-lg dropify"
                                                            // ref={dropifyRef}
                                                            type="file"
                                                            data-preview=".preview"
                                                            placeholder="Photo"
                                                            // required
                                                            id="_media"
                                                            name="media"
                                                        />
                                                        <label htmlFor="media">Logo </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div className="row mt-5 d-flex justify-content-center align-content-center align-items-center">
                                                <div className="col-12 col-md-6 d-grid gap-2">
                                                    <input
                                                        type="hidden"
                                                        name="objet"
                                                        value={props.titre}
                                                    />
                                                    <button
                                                        type="submit"
                                                        className="btn btn-success btn-lg bouton"
                                                    >
                                                        <i className="bi bi-send"></i> Soumettre
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                )
            }
            {isLoading ? (
                <div className="loading-animation">
                    <ReactLoading type="spin" color="#007BFF" />
                </div>
            ) : null}
        </div>
    )
}