<?php
  $isIE9 = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== false;

  if ($isIE9) {
    die('Браузер не поддердживается!');
  }
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <title><%= htmlWebpackPlugin.options.title %></title>
    <style>
      html{
        background: linear-gradient(220.55deg, #8A88FB 0%, #D079EE 100%);
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <noscript>
      <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <!-- built files will be auto injected -->
  </body>
</html>