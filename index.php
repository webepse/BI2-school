<?php
    require "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/style.css">
    <title>School Website</title>
</head>
<body>
    <div class="slide" id="home">
        <header>
            <div id="info">
                <div class="wrapper">
                    <div id="pratique">
                        <span id="tel">Tel: 02 / 395.60.23 </span>
                        <span id="email">E-mail: info@epse.be</span>
                    </div>
                    <div id="social">Social media icons</div>
                </div>
            </div>
            <div id="header">
                <div class="wrapper">
                    <div id="logo">Site Name</div>
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Schools</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="wrapper">
            <div id="jumbotron">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus repudiandae eveniet unde, molestias dolorem asperiores porro fugiat excepturi in eius.</p>
                <a href="#" id="contactez">Contactez nous</a>
                <a href="#" id="voir">Voir les établissements</a>
            </div>
        </div>
    </div>
    <div class="slide" id="eta">
        <div class="wrapper">
            <h2>Etablissements</h2>
            <div class="schools">
            <?php
                $req = $bdd->query("SELECT * FROM schools");
                while($don = $req->fetch())
                {
                   echo '<div class="card">';
                    echo '<img src="images/'.$don['image'].'" alt="Image de '.$don['nom'].'">';
                    echo '<div class="info">';
                        echo '<h3>'.$don['nom'].'</h3>';
                        echo '<p>'.$don['description'].'</p>';
                        echo '<a href="etablissement.php?id='.$don['id'].'" class=\'savoir\'>En savoir plus</a>';
                    echo '</div>';
                   echo '</div>';
                }
                $req->closeCursor();

            ?>
            </div>
        </div>
    </div>
    <div class="slide" id="contact">
        <div class="gauche">
            <div class="container">
                <div class="info">
                    <h3>Contactez nous</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dignissimos rem tenetur recusandae molestias quam amet modi maiores eius. Deleniti!</p>
                </div>
                <div class="contact-social">
                    social media
                </div>
            </div>
        </div>
        <div class="droite">
            <form action="#" method="POST">
                <h3>Envoyez nous un message</h3>
                <div class="form-group v1">
                    <label for="nom">Last Name</label>
                    <input type="text" value="" id="nom" name="nom">
                </div>
                <div class="form-group v1">
                    <label for="prenom">First Name</label>
                    <input type="text" value="" id="prenom" name="prenom">
                </div>
                <div class="form-group v2">
                    <label for="mail">Email Adress</label>
                    <input type="email" id="mail" name="mail">
                </div>
                <div class="form-group v2">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div class="group">
                    <input type="checkbox" name="newsletter" id="newsletter">
                    <label for="newsletter">Newsletter</label>
                </div>
                <div class="group">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>