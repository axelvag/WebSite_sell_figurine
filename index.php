<!DOCTYPE html>
<?php
require_once 'fonction.php';
?>
<html lang="fr">
<head>
    <meta name="google-site-verification" content="XV6f5sSLO49vQ9NOtaCrr18c-MC4I3gvcIv39utV-zk" />  <!--Pour indéxer le site-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8164306207853333" crossorigin="anonymous"></script> <!--Pour les pub Adsense-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuaxe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Figuaxe</h1>
        <div class="onglets">
            <a href="#">Home</a>
            <a href="#produits">Nos produits</a>
            <a href="#contact">Contact</a>
            <!--<a href="login.html">Connexion</a>-->
        </div>
    </nav>

    <header>
        <h1>Figuaxe,</h1>
        <h4>LES MEILLEURS FIGURINES ARTISANALES.</h4>
        <button>Parcourir</button>
    </header>

    <section class="main" id="produits">

        <div class="content">
            <div class="card">
                <div class="left">
                    <h1>Nos valeurs</h1>
                    <p>Des beaux produits français uniques à l'effigie de nos personnages de mangas préférés !</p>
                </div>
                <div class="right">
                    <img src="Image_1.JPG" alt="">
                </div>
            </div>

            <div class="card">
                <div class="left">
                    <h1>Nos recettes</h1>
                    <p>Une peinture faite main par nos artisants sur des produits imprimés en 3D dans la région lyonnaise ! </p>
                </div>
                <div class="right">
                    <img src="Image_2.JPG" alt="">
                </div>
            </div>
        </div>
    </section>


    <form name="nom" method="get" action="index.php">
        <br/>
        <div class="souhait">
            <textarea name="textarea" name="souhait" rows="10" cols="50" placeholder="Je souhaiterais un devis d'une figurine cell de 15 cm Contact: vaganay.axel@gmail.com 0782791097"></textarea>
            <br/>
            <input type="submit" name="action-submit" value="Envoyez"/>
        </div>

    </form>

    <footer>

        <h1>Nos services</h1>
        <div class="services">

            <div class="service">
                <h3>Vos voeux de figurines</h3>
                <p>Appelez nous: 07 82 79 10 97</p>
                <p>Pour avoir votre commande de rêve sur le personnage de votre choix !</p>
            </div>
            
            <div class="service">
                <h3>Livraison gratuite</h3>
                <p>Au dessus de 80€ de produit, la livraison est offerte ;)</p>
            </div>

            <div class="service">
                <h3>Paiement en ligne</h3>
                <p>Pour l'instant les payements sont simplement effectuables par Paypal, mais nous sommes sur la mise en place d'un service de payment par carte bancaire.</p>
            </div>


        </div>

        <p id="contact">Contact : 07 82 79 10 97 | &copy; 2022, Figuaxe.</p>
    </footer>
</body>
</html>