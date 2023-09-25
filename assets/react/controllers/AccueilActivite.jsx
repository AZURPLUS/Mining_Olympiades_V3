import React, {useEffect, useState} from "react";

export default function () {
    const [activites, setActivites] = useState([]);

    useEffect(() => {
        async function fetchActivites() {
            try {
                const response = await fetch('/api/activite/');
                if (!response.ok){
                    throw new Error("La réquête a échoué");
                }
                const data = await response.json();
                setActivites(data);
            }catch (e) {
                console.error("Erreur de la récupération des activités:", e)
            }
        }

        fetchActivites();
    }, []);

    return (
        <div>
            <section id="activite">
                <div className="card-group activite">
                    { activites.map((activite, index)  =>(
                        <div
                            className={index % 2 === 0 ? "card vert" : "card gris" }
                            key={index}
                            data-aos="fade-left"
                            data-aos-duration="3000"
                            data-aos-delay="100"
                        >
                            <div className="card-body">
                                <div className="text-center">
                                    <img src={`/assets/images/icon/${activite.icon}`} alt={activite.titre} className="icon"/>
                                </div>
                                <h5 className="card-title">
                                    <a href="#">{activite.titre}</a>
                                </h5>
                                <p
                                    className="card-text"
                                    style={{ textAlign: "justify"}}
                                >
                                    {activite.resume}
                                </p>
                            </div>
                        </div>
                    ))}

                </div>
            </section>
        </div>
    );
}