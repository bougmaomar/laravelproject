import "./bootstrap";

import "../sass/app.scss";

import * as bootstrap from "bootstrap";

const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

const sidetabs = document.querySelectorAll("[data-sidetab-target]");
const sidetabContents = document.querySelectorAll("[data-sidetab-content]");

const htabs = document.querySelectorAll("[data-htab-target]");
const htabContents = document.querySelectorAll("[data-htab-content]");

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach((tabContent) => {
            tabContent.classList.remove("active");
        });
        tabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        tab.classList.add("active");
        target.classList.add("active");
    });
});

sidetabs.forEach((sidetab) => {
    sidetab.addEventListener("click", () => {
        const target = document.querySelector(sidetab.dataset.sidetabTarget);
        sidetabContents.forEach((sidetabContent) => {
            sidetabContent.classList.remove("active");
        });
        sidetabs.forEach((sidetab) => {
            sidetab.classList.remove("active");
        });
        sidetab.classList.add("active");
        target.classList.add("active");
    });
});

htabs.forEach((htab) => {
    htab.addEventListener("click", () => {
        const target = document.querySelector(htab.dataset.htabTarget);
        htabContents.forEach((htabContents) => {
            htabContents.classList.remove("active");
        });
        htabs.forEach((htab) => {
            htab.classList.remove("active");
        });
        htab.classList.add("active");
        target.classList.add("active");
    });
});
