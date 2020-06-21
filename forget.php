<?php
if(!empty($_POST) && !empty($_POST['email'])){
    require_once 'inc/db.php';
    require_once 'inc/functions.php';
    $req = $pdo->prepare('SELECT * FROM user WHERE email = ? AND confirmed_at IS NOT NULL');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if($user){
        session_start();
        $reset_token = str_random(60);
        $pdo->prepare('UPDATE user SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
        require 'inc/mail.php';
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Réinitiatilisation de votre mot de passe';
        $mail->Body = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
            <div class='row' style='margin: 5%''>
              <div class='col-8 col-offset-2' style='text-align:center; margin-right: auto; margin-left: auto; border: 1px solid rgba(128,128,128,0.4);box-shadow: -3px 5px 5px 0px rgba(0,0,0,0.75);'>
                <h1 style='padding-top: 5%; padding-bottom: 5%;'>
                  Bienvenu chez CorpScan
                </h1>
                <img src='https://raw.githubusercontent.com/PierreDenaes/Dow_J/master/images/corpscanLogo.png' alt='logo' class='logoImg'>
                <p style='padding-top: 5%;'>Afin de réinitialiser votre mot de passe merci de cliquer sur ce <a href='https://dotpot420.alwaysdata.net/reset.php?id={$user->id}&token=$reset_token'>lien</a></p>
              </div>
            </div>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send($_SESSION['flash']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par emails',header('Location: login.php'));
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Aucun compte ne correspond à cet adresse';
    }
}
?>
<?php require 'inc/header.php'; ?>

    <h1>Mot de passe oublié</h1>

    <form action="" method="POST">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary subtn" style="background-color:#4ab7bf; border:none;">Se connecter</button>

    </form>

<?php require 'inc/footer.php'; ?>