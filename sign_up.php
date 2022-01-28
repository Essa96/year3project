<?php
include_once 'header.php';
?>


    <section class="signup_form">
        <h2> SIGN UP </h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="submit" name="submit"> Sign up</button>
        </form>
    </section>

<?php
include_once 'footer.php';
?>