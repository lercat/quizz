<?php
    require "header.php";
?>

    <main>
    <?php 
        if(isset($_SESSION['userId'])) {
            echo '<p>Vous êtes connecté !</p>';
        }
        else {
            echo '<p>Vous êtes déconnecté !</p>';
        }
    ?>
        
    </main>

<?php
    require "footer.php";
?>
