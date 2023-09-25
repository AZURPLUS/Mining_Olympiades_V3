import React, {useEffect, useState} from 'react';
import AOS from 'aos';

export default function () {

    useEffect(() => {
        AOS.init();
    }, []);
    return (
        <div>
            <section id="inscription">
                <div className="inscription">
                    <div className="row no-gutters align-items-center">
                        <div className="col-xl-4"  data-aos="fade-right" data-aos-duration="1500">
                            <div className="instruction-bloc" data-black-overlay="4">
                                <div className="instruction-contenu">
                                    <h3>Je <span>compétie</span></h3>
                                    <p>
                                        Je m'engage solennellement à respecter scrupuleusement les règles du tournoi établies,
                                        et je confirme ma capacité à concourir dans la discipline que j'ai choisie.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="col-xl-8">
                            <div className="formulaire-bloc"  data-aos="fade-up" data-aos-duration="1500">
                                <form action="#" method="post">
                                    <div className="row row-cols-1 row-cols-lg-2 g-4 no-gutters">
                                        <div className="col">
                                            <div className="form-floating">
                                                <select className="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected>-- Choisissez votre compagnie --</option>
                                                    <option value="1"></option>
                                                    <option value="1">Compagnie 1</option>
                                                    <option value="2">Compagnie 2</option>
                                                    <option value="3">Compagnie 3</option>
                                                </select>
                                                <label htmlFor="floatingSelect">Compagnie <span>*</span></label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <select className="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected>-- Choisissez la discipline de compétition --</option>
                                                    <option value="1"></option>
                                                    <option value="1">Maracana zone</option>
                                                    <option value="2">Awalé</option>
                                                    <option value="3">Ludo</option>
                                                </select>
                                                <label htmlFor="floatingSelect">Discipline <span>*</span></label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <input type="text" className="form-control" id="floatingInput" placeholder="nom" />
                                                    <label htmlFor="floatingInput">Nom <span>*</span> </label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <input type="text" className="form-control" id="floatingInput" placeholder="prenoms" />
                                                    <label htmlFor="floatingInput">Prenoms <span>*</span></label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <input type="text" className="form-control" id="floatingInput" placeholder="prenoms" />
                                                    <label htmlFor="floatingInput">Matricule <span>*</span></label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <input type="text" className="form-control" id="floatingInput" placeholder="prenoms" />
                                                    <label htmlFor="floatingInput">Contact <span>*</span></label>
                                            </div>
                                        </div>
                                        <div className="col">
                                            <div className="form-floating">
                                                <input type="text" className="form-control" id="floatingInput" placeholder="prenoms" />
                                                    <label htmlFor="floatingInput">Email</label>
                                            </div>
                                        </div>

                                        <div className="col">
                                            <div className="mb-3">
                                                <input className="form-control form-control-lg" type="file" data-preview=".preview" placeholder="Photo" />
                                            </div>
                                        </div>


                                    </div>
                                    <div className="row">
                                        <div className="col-12 mt-3">
                                            <div className="form-check">
                                                <input className="form-check-input" type="checkbox" value="" id="reglement" />
                                                    <label className="form-check-label" htmlFor="reglement">
                                                        <em>
                                                            En m'inscrivant je confirme avoir pris connaissance des <a href="#" target="_blank">règlements du tournoi</a> et l'accepte.
                                                        </em>
                                                    </label>
                                            </div>
                                        </div>
                                        <div className="col-12 mt-3">
                                            <div className="form-check">
                                                <input className="form-check-input" type="checkbox" value="" id="image" />
                                                    <label className="form-check-label" htmlFor="image">
                                                        <em>
                                                            En remplissant ce formulaire, j'accorde au comité d'organisation l'autorisation d'utiliser mon image à des fins de promotion
                                                            de cet événement, que ce soit sur des supports physiques ou numériques, y compris pour les éditions à venir.
                                                        </em>
                                                    </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="row mt-5 d-flex justify-content-center align-content-center align-items-center">
                                        <div className="col-12 col-md-6 d-grid gap-2">
                                            <button type="submit" className="btn btn-success btn-lg bouton"><i className="bi bi-floppy"></i> Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    )
}