import React from "react";

const sponsors = [
  "/assets/images/sponsors/platine/platine-1.png", 
  "/assets/images/sponsors/platine/platine-2.png", 
  //"/assets/images/sponsors/platine/platine-3.png",
];

const SponsorPlatine = () => {
  return (
    <div className="sponsor-platine">
      <div className="title">
        <div className="line"></div>
        <div className="img-ctn">
          <img src="/assets/images/platine-0.png" alt="" />
        </div>
      </div>
      <div className="logos">
        {sponsors.map((image, index) => (
          <div key={index} className="img-ctn">
            <img src={image} alt={`Sponsor platine ${index + 1}`} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default SponsorPlatine;
