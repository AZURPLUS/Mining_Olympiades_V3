import React, { useEffect, useState } from "react";
import AOS from "aos";
import "aos/dist/aos.css";

export default function Carousel() {
  const [currentIndex, setCurrentIndex] = useState(0);

  const carouselItems = [
    {
      title: "",
      image: "/assets/images/visuel.png",
      ytLink: " https://youtube.com/live/t02cjVmsv-Q?feature=share",
    },
    
    {
      title: "SOYEZ PRÊT POUR LES OLYMPIADES DES MINES 2025",
      image: "/assets/images/img-slide-default.png",
    },
    {
      title: "DÉCOUVREZ LES NOUVELLES OPPORTUNITÉS",
      image: "/assets/images/img-slide-default.png",
    },
    {
      title: "PARTICIPEZ À DES COMPÉTITIONS EXCITANTES",
      image: "/assets/images/img-slide-default.png",
    },
  ];

  useEffect(() => {
    AOS.init();

    const interval = setInterval(() => {
      setCurrentIndex((prevIndex) => (prevIndex + 1) % carouselItems.length);
    }, 7000);

    return () => clearInterval(interval);
  }, [carouselItems.length]);

  return (
    <>
      {/* Desktop */}
      <section
        className="d-none d-lg-block"
        id="carousel"
        style={{
          padding: "100px 50px 0 50px",
          height: "650",
          backgroundImage: `url(${carouselItems[currentIndex].image})`,
          transition: "opacity 1s ease-in-out",
        }}
      >
        <div
          className="carousel-container"
          style={{
            position: "relative",
            color: "white",
            textAlign: "left",
            padding: "50px 20px",
            // maxWidth: "450px",
            maxWidth: "700px",
          }}
        >
          <div
            className="carousel"
            data-aos="zoom-in"
            style={{ position: "relative" }}
          >
            {carouselItems.map((item, index) => (
              <div
                key={index}
                className={`carousel-elt ${
                  index === currentIndex ? "active" : ""
                }`}
                style={{
                  opacity: index === currentIndex ? 1 : 0,
                  transition: "opacity 1s ease-in-out",
                  position: "absolute",
                  left: 0,
                  width: "100%",
                  padding: 0,
                }}
              >
                <h1
                  style={{
                    // fontSize: "2rem",
                    fontSize: "2.7rem",
                    marginBottom: "10px",
                    lineHeight: "1.3",
                    wordWrap: "break-word",
                    color: "#f69322",
                    fontWeight: "800",
                    textShadow: "1px 0 5px #e5e7eb",
                  }}
                >
                  {item.title}
                </h1>
              </div>
            ))}
          </div>

          {/* Indicateurs de carrousel */}
          <div className="carousel-indicators">
            <div className="circle-indicator">
              {carouselItems.map((_, index) => (
                <div
                  key={index}
                  onClick={() => setCurrentIndex(index)}
                  aria-label={`Slide ${index + 1}`}
                  style={{
                    width: currentIndex === index ? "50px" : "13px",
                    height: currentIndex === index ? "13px" : "13px",
                    backgroundColor: "#f69322",
                    marginRight: "10px",
                    cursor: "pointer",
                    borderRadius: currentIndex === index ? "5px" : "100px",
                    transition: "width 0.3s ease, background-color 0.3s ease",
                  }}
                />
              ))}
            </div>
            {/* {carouselItems[currentIndex].ytLink && (
              <a
                href={carouselItems[currentIndex].ytLink}
                target="_blank"
                rel="noopener noreferrer"
                className="yt-link"
              >
                <img src="/assets/icons/brand-youtube.svg" alt="" /> Suivre le
                direct
              </a>
            )} */}
          </div>
        </div>
      </section>
      {/* Desktop */}

      {/* Mobile */}
      <section
        className="d-block d-lg-none"
        id="carousel"
        style={{
          padding: "0 0",
          height: "80vh",
          backgroundImage: `url(${carouselItems[currentIndex].image})`,
          transition: "opacity 1s ease-in-out",
        }}
      >
        <div
          className="carousel-container"
          style={{
            position: "relative",
            color: "white",
            textAlign: "left",
            padding: "100px 20px",
            height: "100%",
          }}
        >
          <div
            className="carousel"
            data-aos="zoom-in"
            style={{
              position: "relative",
              marginTop: "20px",
              marginBottom: "30px",
            }}
          >
            {carouselItems.map((item, index) => (
              <div
                key={index}
                className={`carousel-elt ${
                  index === currentIndex ? "active" : ""
                }`}
                style={{
                  opacity: index === currentIndex ? 1 : 0,
                  transition: "opacity 1s ease-in-out",
                  position: "absolute",
                  left: 0,
                  width: "100%",
                  padding: 0,
                }}
              >
                <h1
                  style={{
                    fontSize: "2rem",
                    marginBottom: "10px",
                    lineHeight: "1.2",
                    wordWrap: "break-word",
                    color: "#f69322",
                    fontWeight: "800",
                  }}
                >
                  {item.title}
                </h1>
                <p
                  style={{
                    fontSize: "1rem",
                    wordWrap: "break-word",
                    color: "#f69322",
                  }}
                >
                  {item.description}
                </p>
              </div>
            ))}
          </div>

          {/* Indicateurs de carrousel */}
          <div
            className="carousel-indicators"
            style={{
              maxWidth: "500px",
            }}
          >
            <div className="circle-indicator">
              {carouselItems.map((_, index) => (
                <div
                  key={index}
                  onClick={() => setCurrentIndex(index)}
                  aria-label={`Slide ${index + 1}`}
                  style={{
                    width: currentIndex === index ? "50px" : "13px",
                    height: currentIndex === index ? "13px" : "13px",
                    backgroundColor: "#f69322",
                    marginRight: "10px",
                    cursor: "pointer",
                    borderRadius: currentIndex === index ? "5px" : "100px",
                    transition: "width 0.3s ease, background-color 0.3s ease",
                  }}
                />
              ))}
            </div>
            {/* {carouselItems[currentIndex].ytLink && (
              <a
                href={carouselItems[currentIndex].ytLink}
                target="_blank"
                rel="noopener noreferrer"
                className="yt-link"
              >
                <img src="/assets/icons/brand-youtube.svg" alt="" /> Suivre le
                direct
              </a>
            )} */}
          </div>
        </div>
      </section>
      {/* Mobile */}
    </>
  );
}
