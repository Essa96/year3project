<?php
include_once 'header.php';
?>


    <section class="login_form">
        <h2> LOG IN </h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="user_or_email" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit"> Log in</button>
        </form>
    </section>

<?php
include_once 'footer.php';
?>