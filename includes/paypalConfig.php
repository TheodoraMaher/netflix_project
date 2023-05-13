<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ARK7O60gDv3Zk7eyAVGe5yIMavGZbX2_3pBxbUvLRcIbHTvgzFhfbuuHd_fSaA-oyBv6t8C1WmLexGFj',     // ClientID
        'EItKn__dADLHmvUpcwSNgVCLtlzvZ9V0rEqjsXaypqbSwKcIT3orLWCvliTIwRU1joxVZbPDezFHnpnL'      // ClientSecret
    )
);
?>