import React from "react";
const Partenaire = () => {
  const partenaires = [
    "/assets/images/partenaires/partenaire-1.png",
    "/assets/images/partenaires/partenaire-2.png",
    "/assets/images/partenaires/partenaire-3.png",
    "/assets/images/partenaires/partenaire-4.png",
    "/assets/images/partenaires/partenaire-5.png",
  ];

  return (
    <div className="partenaire">
      <div className="title">
        <div className="line"></div>
        <div className="img-ctn">
          <img src="/assets/images/partenaire-0.png" alt="" />
        </div>
      </div>
      <div className="logos">
        {partenaires.map((image, index) => (
          <div key={index} className="img-ctn">
            <img src={image} alt={`partenaire ${index + 1}`} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default Partenaire;
