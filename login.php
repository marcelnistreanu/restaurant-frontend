<?php require_once("includes/header.php") ?>

    <div class="login_div">
        <div class="login_box">
            <h1 class="login_text">Login</h1>
            <form class="login_form" method="post">
                <div class="txt_field">
                    <input type="text" placeholder="Email" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Parola" style="caret-color: white; color: white;" required>
                </div>
                <input class="login_button" type="submit" value="Login">
                <div class="signup">
                    <h6 style="color: white;">Nu ai cont?</h6> <a href="signup.php">Creează cont</a>
                </div>
            </form>
        </div>
    </div>
 

<?php require_once("includes/footer.php") ?>