import React from "react";
import Carousel from "./Carousel";
import AccueilPresentation from "./AccueilPresentation";
import AccueilActivite from "./AccueilActivite";
import AccueilDiscipline from "./AccueilDiscipline";

export default function () {
    return (
        <div>
            <Carousel/>
            <AccueilPresentation/>
            <AccueilActivite/>
            <AccueilDiscipline/>
        </div>
    )
}