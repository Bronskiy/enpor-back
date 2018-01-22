<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_account-front.php')
?>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <?php echo $content ?>
            </div>
        </div>
    </section>
<?php $this->endContent() ?>