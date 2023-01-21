<?php require_once("includes/header.inc.php") ?>

    <div class="signup_div">
        <div class="signup_box">
            <h1 class="signup_text">Sign up</h1>
            <form class="signup_form" method="post" action="includes/signup.inc.php">
                <div class="txt_field">
                    <input type="text" placeholder="Nume" name="nume" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Prenume" name="prenume" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Email" name="vemail" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Parola" name="vparola" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Confirmare parola" name="vconfirmparola" style="caret-color: white; color: white;" required>
                </div>
                <input class="signup_button mb-2" type="submit" value="Sign up">

                <?php
                    if (isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                    <?php }
                ?>
            </form>
        </div>
    </div>
 

<?php require_once("includes/footer.inc.php") ?>