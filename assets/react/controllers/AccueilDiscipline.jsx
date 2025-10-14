import React from "react";

import styled from "styled-components";
import ImageDiscipline from "./ImageDiscipline.jsx";

const ResponsiveContainer = styled.div`
  width: 100%;
  overflow: hidden;
  padding: 0 20px;

  @media (min-width: 768px) {
    padding: 0 50px;
  }
`;

export default function () {
  return (
    <ResponsiveContainer>
      <section id="discipline">
        <div className="disciplines">
          <div
            data-aos="fade-down"
            data-aos-duration="2000"
            data-aos-delay="100"
          >
            {/*<h3 className="rubrique"><span>--</span> Compétitions <span>--</span></h3>*/}
            <h1 className="titre">Les disciplines</h1>
          </div>

          <ImageDiscipline />
        </div>
      </section>
    </ResponsiveContainer>
  );
}
