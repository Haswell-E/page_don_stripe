<?php
/**
 * Created by PhpStorm.
 * User: zakaria Nya
 * Date: 28/06/2017
 * Time: 00:27
 */

require_once('vendor/autoload.php');

$stripe = array(
    "secret_key"      => "sk_test_IVfOinM6ufJo003euO8bkfaq",
    "publishable_key" => "pk_test_lJfOILh69t8jvZsAgnmUTRJb"
);


\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

