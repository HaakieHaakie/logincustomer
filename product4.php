
<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>DEFAULT PRODUCT 4</h2>
        <?PHP
        if (isset($_SESSION['l_id'])) {
            echo "You are logged in!";
        }
        ?>
    </div>
</section>
<?php
include_once 'footer.php';
?>