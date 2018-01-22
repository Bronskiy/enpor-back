<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>


<div class="page-wrapper">
  <div class="header-wrapper header-transparent header-light">
    <div class="header">
      <div class="container">
        <div class="header-inner">
          <div class="navigation-toggle toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="header-logo">
            <a href="/">
              <img src="/dist/img/enpor-logo.png" class="svg" alt="Home">
            </a>
          </div>
          <div class="header-nav">
            <div class="primary-nav-wrapper">
              
              <ul class="nav">
                <li class="nav-item"><a href="#about" class="nav-link active">About</a></li>
                <li class="nav-item"><a href="#about-ico" class="nav-link active">ICO</a></li>
                <li class="nav-item"><a href="#card" class="nav-link active">Card</a></li>
                <li class="nav-item"><a href="#phone-app" class="nav-link active">Phone App</a></li>
                <li class="nav-item"><a href="#stats" class="nav-link active">Statistics</a></li>
                <li class="nav-item"><a href="#docs" class="nav-link active">Documents</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link active">Contact</a></li>
                <li class="nav-item"><a href="/faq.html" class="nav-link active">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="header-actions">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="#" class="sign-in nav-link modal-submit" id="modal-action-submit" data-toggle="modal" data-target="#modal-signin">
                  <span>Sign In</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/signup.html" class="sign-up nav-link modal-submit" id="modal-action-submit" data-toggle="modal" data-target="#modal-signup">
                  <span>Sign Up</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo $content ?>


    <div class="footer-wrapper" id="contact">
      <div class="footer">
        <div class="footer-inner clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="widget">
                  <h3>Contact Us</h3>
                  <p>Tel.: +33 555 444 6677</p>
                  <p>Tel.: +33 555 444 6677</p>
                  <p>Email: enpor@enpor</p>
                  <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="widget">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="#about" class="nav-link active">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-ico" class="nav-link active">ICO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#card" class="nav-link active">Card</a></li>
                    <li class="nav-item"><a class="nav-link" href="#phone-app" class="nav-link active">Phone App</a></li>
                    <li class="nav-item"><a class="nav-link" href="#stats" class="nav-link active">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#docs" class="nav-link active">Documents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" class="nav-link active">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/faq.html" class="nav-link active">FAQ</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="widget">
                  <h3>Subscribe to our newsletter</h3>
                  <p>Lorem ipsum dolor sit amet, mea aeque tation ne, ei nisl lucilius tacimates eum</p>
                  <form method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your e-mail address">
                    </div>
                    <div class="form-group clearfix">
                      <button type="submit" class="btn btn-primary pull-right">Join Newsletter</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="footer-line-left">
              &copy; <?php echo date('Y') ?> Enpor. All rights reserved.
            </div>
            <div class="footer-line-right">
              <ul class="nav nav-line">
                <li class="nav-item"><i class="fa fa-cc-paypal"></i></li>
                <li class="nav-item"><i class="fa fa-cc-mastercard"></i></li>
                <li class="nav-item"><i class="fa fa-cc-visa"></i></li>
                <li class="nav-item"><i class="fa fa-credit-card"></i></li>
                <li class="nav-item"><i class="fa fa-btc"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php $this->endContent() ?>
