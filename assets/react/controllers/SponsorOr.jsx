import React from "react";

const sponsors = [
  "/assets/images/sponsors/or/or-1.png", 
  "/assets/images/sponsors/or/or-2.png", 
  "/assets/images/sponsors/or/or-4.png",
  //"/assets/images/sponsors/or/or-3.png",
];

const SponsorOr = () => {
  return (
    <div className="sponsor-or">
      <div className="title">
        <div className="line"></div>
        <div className="img-ctn">
          <img src="/assets/images/or-0.png" alt="" />
        </div>
      </div>
      <div className="logos">
        {sponsors.map((image, index) => (
          <div key={index} className="img-ctn">
            <img src={image} alt={`Sponsor or ${index + 1}`} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default SponsorOr;
