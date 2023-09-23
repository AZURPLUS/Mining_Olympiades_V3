import React, {useEffect, useState} from 'react';
import AOS from 'aos';
import $ from 'jquery';

export default function () {
    const [data, setData] = useState({});
    const [trimmedContent, setTrimmedContent] = useState('');

    useEffect(() => {
        AOS.init({
            duration: 1500
        });

        async function fetchData(){
            try{
                const response = await fetch('/api/presentation/');
                if (!response.ok){
                    throw new Error('Reponse non valide depuis le serveur')
                }
                const data = await response.json();
                setData(data);

                const maxCharacters = 500;
                let truncatedContent = data.contenu.slice(0, maxCharacters);

                // Ajoutez des points de suspension si le contenu est tronqué
                if (data.contenu.length > maxCharacters) {
                    truncatedContent += '...';
                }

                setTrimmedContent(truncatedContent);
            } catch (e) {
                console.error('Erreur de la récupération des données: ', e)
            }
        }

        fetchData()
    }, []);

    console.log(trimmedContent)
    const mediaUrl = data.media ? `/assets/images/${data.media}` : '';

    console.log(mediaUrl)


    return (
        <div>
            <section id="presentation">
                <div className="row justify-content-center">
                    <div className="col-12 col-md-10 col-lg-8 col-xl-7 text-center" data-aos="zoom-in">
                        <h3 className="rubrique"><span>--</span> Présentation <span>--</span></h3>
                        <h1 className="titre">{data.titre}</h1>

                        <div
                            style={{
                                textAlign: "justify",
                                display: "flex",
                                alignItems: "center",
                                justifyContent: "center"
                            }}

                            dangerouslySetInnerHTML={{ __html: trimmedContent}}
                        ></div>

                        {data.contenu && data.contenu.length > 500 && <a href="#" className="lirePlus">Lire plus</a>}
                    </div>
                </div>
                <div className="illustration justify-content-center" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="100">
                    {/*<img src="/assets/images/illustration2.png" alt="" className="img-fluid" />*/}
                    {mediaUrl && <img src={mediaUrl} alt="Mining Olympiades 2023" className="img-fluid"/>}
                </div>
            </section>
        </div>
    );
}