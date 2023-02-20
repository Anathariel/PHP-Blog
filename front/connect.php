<?php
require_once './header-front.php';
?>
<section>
    <?php 
    if(isset($_GET['err'])){
    ?>
    <p style="color: red;">Pseudo ou mot de passe incorrect</p>
    <?php } ?>
    <form action="../admin/auth.php" method="POST">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" id="pseudo"><br><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
</section>