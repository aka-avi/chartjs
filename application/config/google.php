<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
// $this->load(FCPATH . 'vendor/autoload.php');

//Make object of Google API Client for call Google API
$this->google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$this->google_client->setClientId('957031376234-bq1u3v7qb6s06ctcb7l4e2vsd4guahtd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$this->google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$this->google_client->setRedirectUri('http://localhost/ci3/index.php/welcome/login');

// to get the email and profile 
$this->google_client->addScope('email');

$this->google_client->addScope('profile');

?> 