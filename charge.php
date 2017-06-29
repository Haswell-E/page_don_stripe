<link rel="stylesheet" href="css/page_don.css">
<?php
/**
 * Created by PhpStorm.
 * User: zakaria NYA
 * Date: 28/06/2017
 * Time: 00:38
 */

  require_once('./config.php');
  $token  = $_POST['stripeToken'];
  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => '500',
      'currency' => 'eur'
  ));
  echo '<div class="paiement_complet_div"><h1 class="paiement_complet">Merci de votre généreux don, vous avez contribuer à l\'éducation des enfants Syriens réfugiés au Liban</h1></div>';

  ?>

<h1 class="paiement_complet">Merci de votre généreux don, vous avez contribuer à l\'éducation des enfants Syriens réfugiés au Liban</h1>

