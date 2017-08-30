<?php
require_once 'vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '708242379369755', // Replace {app-id} with your app id
    'app_secret' => '8bcf0d636e0168e7777eb936102b5f6e',
    'default_graph_version' => 'v2.2','fb_exchange_token'=>''
]);
$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/idcard/login_valid.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';