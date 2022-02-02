<?php
require_once 'includes/dbh.inc.php';
include_once 'header.php';
?>


    <section class="signup_form">
        <h2> SIGN UP </h2>
        <div class="signup_form_form">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full Name...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <button type="submit" name="submit"> Sign up</button>
            </form>
        </div>
    </section>

<?php
include_once 'footer.php';
?>