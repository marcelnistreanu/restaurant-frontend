<?php require_once("includes/header.php") ?>

    <div class="signup_div">
        <div class="signup_box">
            <h1 class="signup_text">Sign up</h1>
            <form class="signup_form" method="post">
                <div class="txt_field">
                    <input type="text" placeholder="Nume" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Prenume" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Email" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Parola" style="caret-color: white; color: white;" required>
                </div>
                <div class="txt_field">
                    <input type="text" placeholder="Confirmare parola" style="caret-color: white; color: white;" required>
                </div>
                <input class="signup_button" type="submit" value="Sign up">
            </form>
        </div>
    </div>
 

<?php require_once("includes/footer.php") ?>