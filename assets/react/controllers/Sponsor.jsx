import React from "react";
import "./../../styles/sponsor.scss";
import styled from "styled-components";
import SponsorArgent from "./SponsorArgent.jsx";
import SponsorBronze from "./SponsorBronze.jsx";
import Partenaire from "./Partenaire.jsx";

const ResponsiveContainer = styled.div`
  width: 100%;
  overflow: hidden;
  padding: 0 20px;

  @media (min-width: 768px) {
    padding: 0 50px;
  }
`;

const Sponsor = () => {
  return (
    <ResponsiveContainer>
      <section className="sponsor">
        <div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">
          <h1>Nos Sponsors et Partenaires</h1>
        </div>

        {/* les logos des partenaires et sponsor */}
        {/* <div className="logo-sponsors">
          <SponsorArgent />
          <SponsorBronze />
          <Partenaire />
        </div> */}
      </section>
    </ResponsiveContainer>
  );
};

export default Sponsor;
