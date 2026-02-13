<?php
// Script de traitement du formulaire
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    // 1. Mets TON adresse email ici
    $to = "ton.adresse.perso@gmail.com";
    $subject = "Nouveau contact depuis le Portfolio";
    $body = "Nom: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: \n".$_POST['message'];
    $headers = "From: ".$_POST['email'];

    // Envoi du mail
    if(mail($to, $subject, $body, $headers)){
        $message_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Future Ingénieure Réseaux & Sécurité</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">TonPrenom<span class="dot">.Tech</span></div>
    <ul class="nav-links">
        <li><a href="#home">Accueil</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#projects">Projets</a></li>
        <li><a href="#contact">Me contacter</a></li>
    </ul>
    <div class="burger" onclick="toggleMenu()">
        <div class="line1"></div><div class="line2"></div><div class="line3"></div>
    </div>
</nav>

<header id="home">
    <div class="container hero-container">
        <div class="hero-text">
            <span class="tag">Étudiante BTS CIEL • Objectif École d'Ingénieur</span>
            <h1>Hello, je suis <span class="text-pink">Ton Prénom</span></h1>
            <h2 class="typing-container">Spécialisée en <span id="typewriter"></span><span class="cursor">|</span></h2>

            <p>Passionnée par la convergence entre le <strong>Hardware</strong> (Sécurité physique) et le <strong>Software</strong> (Développement & Réseaux). Actuellement en alternance/CDI.</p>

            <div class="social-links">
                <a href="https://www.linkedin.com/in/ton-profil" target="_blank" title="Mon LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/Ayaabmk" target="_blank" title="Mon GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="mailto:ton.email@gmail.com" title="M'envoyer un mail"><i class="fa-solid fa-envelope"></i></a>
            </div>

            <div class="btn-group">
                <a href="#contact" class="btn btn-filled">Me Recruter</a>
                <a href="#projects" class="btn btn-outline">Voir mes projets</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="circle-animation">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
        </div>
    </div>
    </section>

    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title">Ma Stack <span class="text-pink">Technique</span></h2>

            <div class="tech-grid">
                <div class="tech-item"><i class="fa-brands fa-html5"></i><span>HTML5</span></div>
                <div class="tech-item"><i class="fa-brands fa-css3-alt"></i><span>CSS3</span></div>
                <div class="tech-item"><i class="fa-brands fa-php"></i><span>PHP</span></div>
                <div class="tech-item"><i class="fa-brands fa-js"></i><span>JS</span></div>
                <div class="tech-item"><i class="fa-solid fa-database"></i><span>SQL</span></div>
                <div class="tech-item"><i class="fa-brands fa-docker"></i><span>Docker</span></div>
                <div class="tech-item"><i class="fa-brands fa-linux"></i><span>Linux</span></div>
                <div class="tech-item"><i class="fa-solid fa-network-wired"></i><span>Cisco</span></div>
            </div>
        </div>
    </section>

    <section id="projects" class="section dark-bg">
        <div class="container">
            <h2 class="section-title">Mes <span class="text-pink">Réalisations</span></h2>
            <div class="projects-grid">

                <div class="project-card">
                    <div class="card-header">
                        <i class="fa-solid fa-fingerprint"></i>
                        <h3>Sécurisation Datahouse</h3>
                    </div>
                    <div class="card-body">
                        <p class="role">Projet Actuel - BTS CIEL</p>
                        <p>Sécurisation complète d'une infrastructure de données.</p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> <strong>Physique :</strong> Contrôle d'accès par badges RFID & Capteurs.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Logique :</strong> Pare-feu, segmentation VLAN.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>IoT :</strong> Remontée d'alertes en temps réel.</li>
                        </ul>
                        <div class="tags">
                            <span>IoT</span><span>RFID</span><span>Sécurité</span><span>C++</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="card-header">
                        <i class="fa-solid fa-code"></i>
                        <h3>Mini CMS "From Scratch"</h3>
                    </div>
                    <div class="card-body">
                        <p class="role">Développement Web</p>
                        <p>Création d'un gestionnaire de contenu sans framework pour comprendre la logique backend.</p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Architecture MVC (Modèle-Vue-Contrôleur).</li>
                            <li><i class="fa-solid fa-check"></i> Gestion d'authentification (Admin/User).</li>
                            <li><i class="fa-solid fa-check"></i> Base de données MySQL sécurisée.</li>
                        </ul>
                        <div class="tags">
                            <span>PHP</span><span>MySQL</span><span>Back-End</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="card-header">
                        <i class="fa-solid fa-hospital-user"></i>
                        <h3>Infra Clinique Privée</h3>
                    </div>
                    <div class="card-body">
                        <p class="role">Expérience Pro (Stage + CDI)</p>
                        <p>Gestion d'un parc critique en environnement hospitalier.</p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Support niveau 1 & 2 réactif.</li>
                            <li><i class="fa-solid fa-check"></i> Déploiement de postes et maintenance serveur.</li>
                            <li><i class="fa-solid fa-check"></i> Respect des protocoles de données de santé.</li>
                        </ul>
                        <div class="tags">
                            <span>Support</span><span>Active Directory</span><span>Réseau</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Discutons <span class="text-pink">Avenir</span></h2>

            <div class="contact-wrapper">
                <?php if($message_sent): ?>
                    <div class="success-msg">
                        <h3><i class="fa-solid fa-check-circle"></i> Message Envoyé !</h3>
                        <p>Je vous répondrai dans les plus brefs délais.</p>
                    </div>
                <?php else: ?>
                    <form action="index.php#contact" method="POST" class="form-style">
                        <div class="input-group">
                            <label>Votre Nom</label>
                            <input type="text" name="name" required placeholder="Recruteur / École">
                        </div>
                        <div class="input-group">
                            <label>Votre Email</label>
                            <input type="email" name="email" required placeholder="email@exemple.com">
                        </div>
                        <div class="input-group">
                            <label>Votre Message</label>
                            <textarea name="message" rows="5" required placeholder="Bonjour, votre profil nous intéresse..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-filled">Envoyer la candidature</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 - Portfolio développé par [Ton Prénom] - Étudiante BTS CIEL</p>
        <div class="footer-socials">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>