import React, { useEffect, useState } from 'react';
import AOS from 'aos';
import $ from 'jquery';

export default function Carousel() {
    const [currentIndex, setCurrentIndex] = useState(0);
    const carouselItems = [
        {
            title: "Mining Olympiades 2023",
            subtitle: "Thème: Valorisons nos régions",
            date: "Les 15 et 16 décembre 2023 à Yamoussoukro",
            link: "/participation"
        },
        {
            title: "Mining Olympiades 2023",
            subtitle: "C'est une Journée scientifique",
            theme: "sous le thème: Le teme",
            link: "/participation"
        },
        {
            title: "Mining Olympiades 2023",
            subtitle: "Ce sont des compétitions sportives",
            date: "dans plus de 20 disciplines",
            link: "/participation"
        },
        {
            title: "Mining Olympiades 2023",
            subtitle: "C'est une soirée gala",
            artists: "Avec des artistes de renoms",
            link: "/participation"
        }
    ];

    useEffect(() => {
        // Utilisez la variable carouselItems déjà déclarée en dehors de cette fonction
        const carouselItemsElements = document.querySelectorAll(".carousel-elt");
        let interval;

        function showItem(index) {
            carouselItemsElements.forEach((item) => {
                item.style.opacity = "0";
            });
            carouselItemsElements[index].style.opacity = "1";
        }

        function cycleItems() {
            carouselItemsElements[currentIndex].style.opacity = "0";
            setCurrentIndex((prevIndex) => (prevIndex + 1) % carouselItemsElements.length);
            carouselItemsElements[currentIndex].style.opacity = "1";
        }

        showItem(currentIndex);
        interval = setInterval(cycleItems, 3000);

        const carousel = document.querySelector(".carousel");
        carousel.addEventListener("mouseenter", () => {
            clearInterval(interval);
        });

        carousel.addEventListener("mouseleave", () => {
            interval = setInterval(cycleItems, 3000);
        });

        const slide = setInterval(() => {
            setCurrentIndex((prevIndex) => (prevIndex + 1) % carouselItemsElements.length);
        }, 3000);

        return () => {
            clearInterval(slide);
        };

    }, [currentIndex]);

    return (
        <div>
            <section id="carousel">
                <div className="container carousel-container">
                    <div className="carousel" data-aos="zoom-in">
                        {carouselItems.map((item, index) => (
                            <div
                                key={index}
                                className={`carousel-elt ${index === currentIndex ? 'active' : ''}`}
                            >
                                <h1>{item.title}</h1>
                                {item.subtitle && <h2>{item.subtitle}</h2>}
                                {item.theme && <h3>sous le thème: <span className="theme">{item.theme}</span></h3>}
                                {item.date && <h3>{item.date}</h3>}
                                {item.artists && <h3>{item.artists}</h3>}
                                <a href={item.link} className="bouton">Participer</a>
                            </div>
                        ))}
                    </div>
                </div>
            </section>
        </div>
    );
}
