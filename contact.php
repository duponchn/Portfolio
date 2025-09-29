<?php
    if (
    isset($_POST['email'], $_POST['message']) &&
    !empty($_POST['email']) &&
    !empty($_POST['message'])
) {
    // Récupération et nettoyage des données
    $mail = trim($_POST['email']);
    $message = trim($_POST['message']);
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
} 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me contacter</title>
    <link rel="stylesheet" href=" static/css/commun.css">
    <link rel="stylesheet" href=" static/css/contact2.css">
</head>
<body>
    <header>
        <nav>
            <section>
                <h2>DUPONCHEL Noah</h2>
                <aside>
                    <p id="contexte">Étudiant</p>
                    <p id="ou">BUT Informatique</p>
                </aside>
            </section>
            <section>
                <a href="index.html">Qui suis-je ?</a>
                <a href="projet.html">Projets</a>
                <a href="competence.html">Compétences</a>
                <a href="contact.html">Contact</a>
            </section>
        </nav>
    </header>
    <main>

    

    <form action="#" method="post">
        <h2>Me contacter :</h2>
        <label for="nom">
            Nom
            <input type="text" id="nom" name="nom" placeholder="Votre nom">
        </label>
        <label for="prenom">
            Prenom
            <input type="text" id="prenom" name="prenom" placeholder="Votre prenom">
        </label>
        <label for="email">
            Email
            <input type="email" id="email" name="email" placeholder="Votre email" required>
        </label>
        <label for="message">
            Message
            <textarea type="message" id="message" name="message" placeholder="Tapez votre message ici !" rows="9" required></textarea>
        </label>
        <input type="submit" value="Envoyer">
    </form>
    
    <?php if($_SERVER["REQUEST_METHOD"] === "POST"){ 
        ?>    
        <p style="color:blue; text-align:center;">Votre email a bien été envoyé</p>
        <?php if (!empty($nom)): ?>
            <p style="color:blue; text-align:center;">Votre nom est : <?= htmlspecialchars($nom) ?></p>
        <?php endif; ?>
        <?php if (!empty($prenom)): ?>
            <p style="color:blue; text-align:center;">Votre prénom est : <?= htmlspecialchars($prenom) ?></p>
        <?php endif; ?>
        <p style="color:blue; text-align:center;">Votre mail est : <?= htmlspecialchars($mail) ?></p>
        <p style="color:blue; text-align:center;">Votre message est : <?= nl2br(htmlspecialchars($message)) ?></p>
    <?php
    }?>

        
    </main>
</body>

</html>