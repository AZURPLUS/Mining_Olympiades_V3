import React from "react";
import Carousel from "./Carousel";
import AccueilPresentation from "./AccueilPresentation";
import AccueilActivite from "./AccueilActivite";
import AccueilDiscipline from "./AccueilDiscipline";
import CountdownTimer from "./CountdownTimer";
import Sponsor from "./Sponsor.jsx";

export default function () {
  return (
    <div>
      <Carousel />
      <CountdownTimer targetDate="2025-12-12T00:00:00" />
      <AccueilPresentation />
      <AccueilActivite />
      <AccueilDiscipline />
      <Sponsor />
    </div>
  );
}
