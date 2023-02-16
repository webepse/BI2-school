<?php
    require "connexion.php";
    if(isset($_GET['id']))
    {
        $id = htmlspecialchars($_GET['id']);
    }else{
        header("LOCATION:index.php");
    }

    $req = $bdd->prepare("SELECT * FROM schools WHERE id=?");
    $req->execute([$id]);
    if(!$don = $req->fetch())
    {
        $req->closeCursor();
        header("LOCATION:index.php");
    }
    $req->closeCursor();
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
    <div class="slide" id="etab">
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
          <h1><?= $don['nom'] ?></h1>
        </div>
    </div>
</body>
</html>