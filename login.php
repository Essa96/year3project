<?php
include_once 'header.php';
?>


    <section class="signup_form">
        <h2> LOG IN </h2>
        <div class="signup_form_form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="user_or_email" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit"> Log in</button>
            </form>
        </div>
    </section>

<?php
include_once 'footer.php';
?>