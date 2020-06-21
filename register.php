<?php
require_once 'inc/functions.php';
ini_set('display_errors', 'on');
session_start();
if(!empty($_POST)){

    $errors = array();
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT id FROM user WHERE email = ?');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    }
    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }
    if(empty($errors) && $user){

        $req = $pdo->prepare('UPDATE user SET password = ?, confirmation_token = ? WHERE id = ?');
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$password, $token, $user->id]);
        // mail
        require 'inc/mail.php';
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Confirmation de votre compte';
        $mail->Body = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
            <div class='row' style='margin: 5%''>
              <div class='col-8 col-offset-2' style='text-align:center; margin-right: auto; margin-left: auto; border: 1px solid rgba(128,128,128,0.4); box-shadow: -3px 5px 5px 0px rgba(0,0,0,0.75);'>
                <h1 style='padding-top: 5%; padding-bottom: 5%;'>
                  Bienvenu chez CorpScan
                </h1>
                <img src='https://raw.githubusercontent.com/PierreDenaes/Dow_J/master/images/corpscanLogo.png' alt='logo' class='logoImg'>
                <p style='padding-top: 5%;'>Afin de valider votre compte merci de cliquer sur ce  <a href='https://dotpot420.alwaysdata.net/confirm.php?id={$user->id}&token=$token'>lien</a></p>
              </div>
            </div>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send($_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte',header('Location: login.php'));
        exit();
    }else{
           $errors['email'] = "Votre email n'est pas valide"; 
        }
}
?>

<?php require 'inc/header.php'; ?>
<img src="images/corpscanLogo.png" alt="logo" class="logoImg">
<h1 class="connect">S'inscrire</h1>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
        <?php foreach($errors as $error): ?>
           <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="" method="POST">


    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Confirmez votre mot de passe</label>
        <input type="password" name="password_confirm" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary subtn" style="background-color:#2aa1b8; border:none;">M'inscrire</button>

</form>

<?php require 'inc/footer.php'; ?>
