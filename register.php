<?php 
require_once('config.php'); 
require_once('core/dbConfig.php');
require_once('core/core.php');

$core = new Core($db);

$DeclareDefine = $core->DeclareConfigDefine();

define('QB_WEBTITLE', $DeclareDefine['webtitle']);
define('QB_WEBDESC', $DeclareDefine['webdesc']);
define('QB_SITEURI', $DeclareDefine['weburl']);
define('QB_SHORTURL', $DeclareDefine['webshort']);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quixel URL | Register </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/login.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="content">
            <div class="logo">
                <h1><?= QB_WEBTITLE; ?></h1>
            </div>
            <div class="form">
                <h4>Register</h4>
<?php 

if(isset($_POST['submit'])){
    $core->RegisterUser($_POST);
}

?>
                <form method="post" action="">
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="mail" placeholder="E-mail">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="••••••">
                    <label for="rpass">Confirm Password</label>
                    <input type="password" id="rpass" name="rpass" placeholder="••••••">
                    <input type="submit" name="submit" value="Create Account">
                </form>
            </div>
            <p class="donthaveaccount">
                Already have a account ? <a href="login.php">Log In</a>
            </p>

        </div>
    </body>
</html>