<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51JEUVeSJulM4wjDno5H6Lqh3Hgclj5TALfOubsMIZwAqb5x3zZXQAvpqX3KISLc7lNjJld70XcQwWfMx9dzjBVa800hIMoLnve";

$secretKey="sk_test_51JEUVeSJulM4wjDnBSIvEXpeJTeE1HS7vDZzdOSeMazmXDPMF2uFnEh2OPHlKLIKjxtBgwI7vXyIUQMZoTro25Vr00t94DeZT2";

\Stripe\Stripe::setApiKey($secretKey);
?>
