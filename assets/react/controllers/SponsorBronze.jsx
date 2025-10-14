import React from "react";

const SponsorBronze = () => {
  const sponsors = [
    "/assets/images/sponsors/bronze/bronze-logo-1.png",
    "/assets/images/sponsors/bronze/bronze-logo-2.png",
    "/assets/images/sponsors/bronze/bronze-logo-3.png",
    "/assets/images/sponsors/bronze/bronze-logo-4.png",
    "/assets/images/sponsors/bronze/bronze-logo-5.png",
    "/assets/images/sponsors/bronze/bronze-logo-6.png",
  ];

  return (
    <div className="sponsor-bronze">
      <div className="title">
        <div className="line"></div>
        <div className="img-ctn">
          <img src="/assets/images/bronze-logo-0.png" alt="" />
        </div>
      </div>
      <div className="logos">
        {sponsors.map((image, index) => (
          <div key={index} className="img-ctn">
            <img src={image} alt={`Sponsor bronze ${index + 1}`} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default SponsorBronze;
