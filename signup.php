<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Signup</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="db_col2" placeholder="Username">
            <input type="password" name="db_col3" placeholder="Password">
<!--            <input type="text" name="B2B_code" placeholder="B2Bcode">-->
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>
<?php

include_once 'footer.php';
?>