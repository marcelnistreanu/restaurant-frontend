<?php require_once("includes/header.inc.php") ?>

    <div class="login_div">
        <div class="login_box">
            <h1 class="login_text">Login</h1>
            <form class="login_form" action="includes/login.inc.php" method="post">
                <div class="txt_field">
                    <input type="text" placeholder="Email" name="email" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Parola" name="parola" style="caret-color: white; color: white;" required>
                </div>
                <input class="login_button" type="submit" value="Login" name="submit">
                <div class="signup">
                    <h6 style="color: white;">Nu ai cont?</h6> <a href="signup.php">Creează cont</a>
                </div>

                <?php
                    if (isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                    <?php }
                ?>
            </form>
        </div>
    </div>
 

<?php require_once("includes/footer.inc.php") ?>