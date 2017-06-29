<?php
/**
* Created by PhpStorm.
* User: zakaria Nya
* Date: 28/06/2017
* Time: 02:23
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta charset="UTF-8">
    <title>Yalla! pour les enfants - Faites un don pour aider les enfants de Yalla!</title>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="css/page_don.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header{
            width: 100%;
            border-bottom: solid 2px #f58b8b;
            height: 70px;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        .header > img{
            height: 100%;
        }

        .buttons > button{
            height: 100%;
            padding: 0 32px;
            font-size: 1em;
            border: 3px #f58b8b solid;
            background-color: white;

        }

        .buttons > button:last-child{
            background-color: #f58b8b;
            border: none;
            color: white;
        }

        .buttons{
            height: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            white-space: nowrap;
            justify-content: space-between;
        }



    </style>
</head>
<body>
<div class="overlay_transparent">
</div>
<header>
    <div class="menu_burger">
        <div id="container_menulogo">
            <div class="logoMenu e deco">
                <div class="logo"></div>
            </div>
        </div>
        <div id="burger">
            <div id="burger-content">
                <nav id="navigation_menu">
                    <ul>
                        <li>
                            <a href="#" class="title_a">Accueil</a>
                        </li>
                        <li>
                            <a href="#" class="title_a">Découvrez Yalla !</a>
                        </li>
                        <li>
                            <a href="#" class="title_a">Nos Projets</a>
                        </li>
                        <li>
                            <a href="#" class="title_a">Archives</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header clearfix">
        <img src="img-layout/logo.png" alt="logo-yalla" />
        <div class="buttons">
            <button>PARRAINAGE</button>
            <button>DON</button>
        </div>
    </div>
</header>
<main>
    <h1 class="h1_page_don">Yalla! Donner une chance d'éducation</h1>
    <div id="dons">
        <section class="don_parrainage">
            <h2><span class="span1">1-</span>Mon don</h2> <br/>
            <div id="don">
                <hr>
                <h3>Choisissez le montant de votre don</h3> <br/>
                   <!-- <input type="radio" name="don" id="don_mensuel"   checked><label for="don_mensuel"> Don mensuel</label><br/>
                    <input type="radio" name="don" id="don_ponctuel" ><label for="don_ponctuel"> Don ponctuel</label><br/> <br/>-->

                    <div class="click_et_c_donner">
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="1500"
                                data-label="15€"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>
                    </form>
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="3000"
                                data-label="30 €"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>
                    </form>
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="4500"
                                data-label="45€"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>

                    </form>
                </div>
                    <br/><br/>
                <!-- <form action="" method="post">
                    <label for="">Entrez le montant de votre don</label><br/><br/>
                    <input type="number" name="choix_montant" id="montant_don" placeholder="choix de mon montant" size="25px" maxlength="25">
                </form>  -->
            </div>
            <div id="parrainage">
                <hr>
                <h3>Entrez le montant mensuel de votre parrainage</h3>

                   <div class="click_et_c_donner">
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="2800"
                                data-label="28€"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>

                    </form>
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="5000"
                                data-label="50€"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>

                    </form>
                    <form action="charge.php" method="POST">
                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-amount="10000"
                                data-label="100€"
                                data-name="Yalla pour les enfants"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-zip-code="true"
                                data-currency="eur">
                        </script>

                    </form>
                   </div>
                <br/>
               <!-- <form action="" method="post">
                    <label for="">Entrez un autre montant</label><br/><br/>
                    <input type="number" name="choix_montant" id="montant_don" placeholder="choix de mon montant" size="25px" maxlength="25">
                </form>-->
                <br/>
                <form action="" method="post">
                    <label for="age">Âge de l'enfant</label>
                    <br/><br/>
                    <select name="age" id="age">
                        <option value="3>6ans">enfants de 3 ans à 6 ans</option>
                        <option value="6>9ans">enfants de 6 ans à 9 ans</option>
                        <option value="9>12ans">enfants de 9 ans à 12 ans</option>
                    </select>
                </form>
                <br/>
                <form action="" method="post">
                    <label for="genre">Genre de l'enfant</label>
                    <br/><br/>
                    <select name="genre" id="genre">
                        <option value="garçon">Garçon</option>
                        <option value="fille">fille</option>
                    </select>
                </form>
                <br/>
                <form action="" method="post">
                    <label for="">Il est important pour moi de correspondre avec mon/ma filleul(e):</label> <br/><br/>
                    <input type="radio" name="correspondre" id="oui" checked><label for="oui">Oui</label>
                    <input type="radio" name="correspondre" id="non" ><label for="non">Non</label>
                </form>
                <br/>
                <form action="" method="post">
                    <label for="">Je peux échanger en :</label> <br/><br/>
                    <input type="radio" name="langue" id="arabe"><label for="arabe">Arabe</label>
                    <input type="radio" name="langue" id="anglais" ><label for="anglais">Anglais</label>
                </form>
            </div>




        </section>


        <section class="informations_personnel">
            <h2><span class="span2">2-</span>Mes <br/> corrdonnées</h2> <br/>
            <div id="corrdonnees">
                <hr class="hr_parrainage">
                <h3>Entrez vos corrdonnées personnelles</h3><br/>
                <form action="" method="post">
                    <!--<label for="">e-Mail *</label> <br/><br/>  -->
                    <input type="email" name="corrdonnee_mail" id="corrdonnee_mail" placeholder="mon e-mail" size="25px" maxlength="50"><br/><br/>
                    <label for="" class="civilite">Civilité</label>
                    <select name="civilite" id="civilite" class="civilite">
                        <option value="mme">Mme.</option>
                        <option value="Mlle">Mlle.</option>
                        <option value="Mn">M.</option>
                        <option value="M&m">M. & Mme.</option>
                    </select>
                    <br/><br/>
                    <form action="">
                        <!-- <label for="">Nom *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_nom" id="corrdonnee_nom" placeholder="Mon Nom" size="25px" maxlength="20"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Prénom *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_prenom" id="corrdonnee_prenom" placeholder="Mon Prénom" size="25px" maxlength="20"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Adresse *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_adresse" id="corrdonnee_adresse" placeholder="Mon Adresse" size="25px" maxlength="100"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Code postal *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_text" id="corrdonnee_code_postal" placeholder="Code Postal" size="25px" maxlength="10"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Ville *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_ville" id="corrdonnee_ville" placeholder="Ville" size="25px" maxlength="25"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Pays *</label><br/><br/>-->
                        <input type="text" name="corrdonnee_pays" id="corrdonnee_apys" placeholder="Pays" size="25px" maxlength="25"><br/><br/>

                    </form>
                    <form action=""><!-- <label for="">Telephone *</label><br/><br/>-->
                        <input type="tel" name="corrdonnee_telephone" id="corrdonnee_telephone" placeholder="Téléphone" size="25px" maxlength="12"><br/><br/>
                    </form>
                </form>
            </div>
        </section>

        <section id="api_stripe">
            <h2><span class="span3">3-</span>Régler</h2> <br/>
            <hr class="hr_parrainage">
            <h3>Regler en toute sécurité</h3><br/>
            <?php require_once('./config.php'); ?>
            <div class="securite_stripe">
                <p>Toutes vos informations bancaires sont séurisées avec:</p>
                <img src="img-content/stripe-retirer-argent.png" alt="sécurité des données sensibles">
            </div>

            <form action="charge.php" method="post" class="bouton_stripe">
                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?php echo $stripe['publishable_key']; ?>"
                        data-label="Donner 5€ avec votre carte blue"
                        data-amount="500"
                        data-description="Don pour l'éducation"></script>

            </form>
            <div class="securite_stripe_adresse">
                <p>Nota Bene: suspendez à tout moment votre don mensuel, ou votre parrainage, sur simple lettre de votre part</p>
                <address> Adresse postale
                    Yalla! Pour les Enfants
                    13, rue René Villerme – 75011 PARIS </address>
            </div>
        </section>
    </div>
</main>

<footer></footer>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
/*-
    $(".logoMenu").on("click",function(){
        $(this).toggleClass("animate");
    });
-*/
    var nav = document.querySelector('#burger');
    /*-var sidebar = document.querySelector('#hamb-sidebar');-*/
    var btn =  document.querySelector('.logoMenu');
    var liens = document.querySelector('#navigation_menu');
    var navon = 'burger-actif';
    var animation = 'animate';

    /*-sidebar.innerHTML = content.innerHTML;-*/


    btn.addEventListener('click', function(e){
        e.preventDefault();

        btn.classList.toggle(animation);
        nav.classList.toggle(navon);
    });

    liens.addEventListener('click', function(a){
        a.preventDefault();

        nav.classList.remove(navon);
        btn.classList.remove(animation);
    });





    /*------api stripe---*/



    // Fill in your publishable key
    Stripe.setPublishableKey('pk_test_lJfOILh69t8jvZsAgnmUTRJb');

    var stripeResponseHandler = function(status, response) {
        var $form = $('#payment-form');

        if (response.error) {
            // Show the errors on the form
            $form.find('.payment-errors').text(response.error.message);
            $form.find('button').prop('disabled', false);
        } else {
            // token contains id, last4, and card type
            var token = response.id;
            // Insert the token into the form so it gets submitted to the server
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            // and re-submit
            $form.get(0).submit();
        }
    };

    jQuery(function($) {
        $('#payment-form').submit(function(e) {
            var $form = $(this);

            // Disable the submit button to prevent repeated clicks
            $form.find('button').prop('disabled', true);

            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from submitting with the default action
            return false;
        });
    });




var bouton = document.getElementById("button").addEventListener("click", function() {
    handler.open({
        image: '/square-image.png',
        name: 'Demo Site',
        description: '2 widgets',
        amount: 2000
    });
});
    /*-----avertissement si navigateur n'est pas à jour---*/
    var $buoop = {vs:{i:10,f:-4,o:-4,s:8,c:-4},api:4};
    function $buo_f(){
        var e = document.createElement("script");
        e.src = "//browser-update.org/update.min.js";
        document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}

</script>
</body>
</html>