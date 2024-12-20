// Gestion du menu déroulant pour le profil
const profileName = document.getElementById("profile-name");
const dropdownMenu = document.getElementById("dropdown-menu");

profileName.addEventListener("click", () => {
    dropdownMenu.style.display =
        dropdownMenu.style.display === "block" ? "none" : "block";
});

// Cacher le menu en cliquant ailleurs
document.addEventListener("click", (e) => {
    if (!profileName.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.style.display = "none";
    }
});

// Gestion du menu latéral (sidebar)
const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.querySelector(".sidebar");
const content = document.querySelector(".content");
const header = document.querySelector(".header");
const Inscript_peda = document.querySelector(".Inscript_peda");
const Consultation = document.querySelector(".Consultation");

menuToggle.addEventListener("click", () => {
    // Alterner entre affiché et caché
    sidebar.classList.toggle("hidden");
    content.classList.toggle("expanded");
    header.classList.toggle ("expended");
    Inscript_peda.classList.toggle ("expended");
    Consultation.classList.toggle ("expended");
    // Ajuster la classe du header pour s'aligner avec la sidebar
    if (sidebar.classList.contains("hidden")) {
        header.classList.add("sidebar-hidden");
    } else {
        header.classList.remove("sidebar-hidden");
    }
});
