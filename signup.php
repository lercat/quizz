<?php
    require "header.php";
?>

    <main>
        <section>
            <h1>SignUP</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p>Remplissez tous les champs !</p>';
                    }
                    else if ($_GET['error'] == "invaliduidmail") {
                        echo '<p>Username et ou Mail invalides !</p>';
                    }
                    else if ($_GET['error'] == "invaliduid") {
                        echo '<p>Username invalide !</p>';
                    }
                    else if ($_GET['error'] == "invalidmail") {
                        echo '<p>Adresse mail déjà enregistrée !</p>';
                    }
                    else if ($_GET['error'] == "passwordcheck") {
                        echo '<p>Vos mots de passe ne correspondent pas !</p>';
                    }
                    else if ($_GET['error'] == "usertaken") {
                        echo '<p>Ce username existé déjà !</p>';
                    }
                }
                else if ($_GET['signup'] == "success") {
                    echo '<p>Inscription réussie !</p>'; 
                }

            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Enregistrez vous</button>
            </form>
        </section>
    </main>

<?php
    require "footer.php";
?>
