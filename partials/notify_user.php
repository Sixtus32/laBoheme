<?php
session_start();
if (!isset($_SESSION['account_status'])) {
?>
    <div class="user_notify" id="user-notify">
        <p>
            <i class="ri-error-warning-line"></i>
            <?= $_SESSION['user_name'] ?> ,
            <?= $_SESSION['user_name'] ?> , por favor active su cuenta.
        </p>
    </div>
<?php
} else {
?>
    <div class="user_notify" id="user-notify">
        <p>
            <i class="ri-error-warning-line"></i>
            <?= $_SESSION['user_name'] ?> , disfrute de las nuevas ofertas de LaBoheme.
        </p>
    </div>
<?php
} ?>