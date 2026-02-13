// 1. Animation Machine à écrire
const textElement = document.getElementById('typewriter');
const phrases = ["le Réseau & Cisco.", "l'IoT & Arduino.", "le Développement."];
let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
    const currentPhrase = phrases[phraseIndex];

    if (isDeleting) {
        textElement.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
    } else {
        textElement.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === currentPhrase.length) {
        isDeleting = true;
        setTimeout(type, 2000);
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % phrases.length;
        setTimeout(type, 500);
    } else {
        setTimeout(type, isDeleting ? 50 : 100);
    }
}

// 2. Menu Burger Mobile (Ouvrir / Fermer)
function toggleMenu() {
    const nav = document.querySelector('.nav-links');
    const burger = document.querySelector('.burger');

    // Basculer la classe 'nav-active' pour montrer/cacher le menu
    nav.classList.toggle('nav-active');

    // Animation du burger (les lignes qui bougent)
    burger.classList.toggle('toggle');
}

// 3. NOUVEAU : Fermer le menu quand on clique sur un lien
// On sélectionne tous les liens du menu
const navLinks = document.querySelectorAll('.nav-links a');

// Pour chaque lien, on ajoute un "écouteur" de clic
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        const nav = document.querySelector('.nav-links');
        const burger = document.querySelector('.burger');

        // Si le menu est ouvert, on le ferme
        if (nav.classList.contains('nav-active')) {
            nav.classList.remove('nav-active');
            burger.classList.remove('toggle');
        }
    });
});

// Lancement au chargement de la page
document.addEventListener('DOMContentLoaded', type);