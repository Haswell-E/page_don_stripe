<?php
/**
 * Created by PhpStorm.
 * User: zakaria NYA
 * Date: 28/06/2017
 * Time: 00:36
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <title>Document</title>
</head>
<body>

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
    <script src="" class="stripe-button"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-amount="5000" data-description="One year's subscription"></script>
</form>
<form action="/your-server-side-code" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="button"
            data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
            data-amount="999"
            data-name="Yalla pour les enfants"
            data-description="Widget"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-zip-code="true"
            data-currency="eur">
    </script>
    <form action="/your-server-side-code" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                data-amount="999"
                data-label="donate"
                data-name="Yalla pour les enfants"
                data-description="Widget"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-zip-code="true"
                data-currency="eur">
        </script>
</form>


    <form action="." method="post">
        <noscript>You must <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> in your web browser in order to pay via Stripe.</noscript>

        <input
                type="submit"
                value="Pay with Card"
                data-key="PUBLISHABLE STRIPE KEY"
                data-amount="500"
                data-label="donate"
                data-currency="cad"
                data-name="Example Company Inc"
                data-description="Stripe payment for $5"
        />
        <script src="https://checkout.stripe.com/v3/checkout.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $(':submit').on('click', function(event) {
                    event.preventDefault();
                    var $button = $(this),
                        $form = $button.parents('form');
                    var opts = $.extend({}, $button.data(), {
                        token: function(result) {
                            $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                        }
                    });
                    StripeCheckout.open(opts);
                });
            });
        </script>
    </form>

</body>
</html>
