import React from "react";

 const sponsors = ["/assets/images/sponsors/argent/argent-1.png"]

const SponsorArgent = () => {
  return (
    <div className="sponsor-argent">
      <div className="title">
        <div className="line"></div>
        <div className="img-ctn">
          <img src="/assets/images/argent-0.png" alt="" />
        </div>
      </div>
      <div className="logos">
        {sponsors.map((image, index) => (
          <div key={index} className="img-ctn">
            <img src={image} alt={`Sponsor argent ${index + 1}`} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default SponsorArgent;
