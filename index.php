<?php 
    session_start();
    $submit = filter_input(INPUT_POST, 'submit');

    if (isset($submit)) {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        if (($email == "info@kneifl.cz") && ($password == 'heslo123')) {
            
            $_SESSION['loggedEmail'] = $email;

        }
    }

    ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if (isset($_SESSION['loggedEmail'])) {
        ?> <p>Byl jsi přihlášen jako <?= $_SESSION['loggedEmail']; ?></p> <?php
    } else {
?>
    <h1>Přihlašovací formulář</h1>
    <form action="post.php" method="post">
        <label for="email">Přihlašovací email:</label>
        <input type="email" name="email" id="email">
    
        <label for="password">Heslo:</label>
        <input type="password" name="password" id="password">

        <input type="submit" name="submit" value="Odeslat">
    </form>
<?php } ?>
</body>
</html>