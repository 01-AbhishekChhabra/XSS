<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';
/*
 * Configuration and setup Google API
 */
$clientId = '552565245434-1i3i2qvcp65ia9d5739t44c1810a6r3b.apps.googleusercontent.com';
$clientSecret = '4xTvspyQoD7fc6GLxYUETLnN';
$redirectURL = 'http://localhost:80/wt/login/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>