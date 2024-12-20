document.addEventListener("DOMContentLoaded", () => {
    // Animation pour les étapes
    const steps = document.querySelectorAll(".step-item");
    steps.forEach(step => {
        step.addEventListener("mouseenter", () => {
            step.style.transform = "translateX(10px)";
            step.style.transition = "transform 0.3s ease, background 0.3s ease";
            step.style.backgroundColor = "#d8792b";
            step.style.color = "white";
        });
        step.addEventListener("mouseleave", () => {
            step.style.transform = "translateX(0px)";
            step.style.backgroundColor = "#f4f4f4";
            step.style.color = "#333";
        });
    });

    // Bouton "Consulter mon dossier"
    const dossierBtn = document.querySelector(".dossier-btn");
    dossierBtn?.addEventListener("click", () => {
        dossierBtn.textContent = "Chargement...";
        dossierBtn.style.backgroundColor = "#d8792b";

        setTimeout(() => {
            alert("Votre dossier est en cours de consultation !");
            dossierBtn.textContent = "Consulter mon dossier";
            dossierBtn.style.backgroundColor = "#f0ad4e";
        }, 2000);
    });

    // Gestion du clic sur le lien "Accueil"
    const homeLink = document.querySelector("#home-link");
    const homeContent = document.querySelector("#home-content");
    const mainContent = document.querySelector(".content");
    const stepsSection = document.querySelector(".steps");
    const backToMain = document.querySelector("#back-to-main");

    if (!homeLink || !homeContent || !mainContent || !stepsSection || !backToMain) {
        console.error("Un ou plusieurs éléments n'ont pas été trouvés dans le DOM.");
        return;
    }

    homeLink.addEventListener("click", (event) => {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        console.log("Navigation vers Accueil");
        mainContent.style.display = "none";
        stepsSection.style.display = "none";
        homeContent.style.display = "block";
    });

    backToMain.addEventListener("click", () => {
        console.log("Retour au contenu principal");
        mainContent.style.display = "block";
        stepsSection.style.display = "block";
        homeContent.style.display = "none";
    });
});
