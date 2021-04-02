<?php
    include_once 'header.php';
?>

<h3>Registracija</h3>

<br>

<form action="user_insert.php" method='post'>
    <input type="text" name="first_name" placeholder="Vnesi ime" required="required"><br><br>
    <input type="text" name="last_name" placeholder="Vnesi priimek" required="required"><br><br>
    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required"><br><br>
    <input type="password" name="pass1" placeholder="Vnesi geslo" required="required"><br><br>
    <input type="password" name="pass2" placeholder="Potrdi geslo" required="required"><br><br>
    <input type="submit" name="submit" value="Shrani"><br><br>
</form>

<?php
    include_once 'footer.php';
?>