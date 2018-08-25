<?php

require_once 'facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '462237844273310', // Replace {app-id} with your app id
  'app_secret' => '19ee5bb7f8293597ad58673f06ad41d8',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email,user_photos']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://localhost/Myfirst/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>

