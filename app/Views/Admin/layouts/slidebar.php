<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/MiniProject/';
 require $root.('/config.php');


?>

<div class="wrapper ">
<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?=$path?>/assets/img/favicon.png">
          </div>
          <p>CT</p>
        </a>
        <a href="" class="simple-text logo-normal">
     Books
          <!-- <div class="logo-image-big">
            <img src="<?=$path?>/assets/img/logo3.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?=$path .'/dashboard'?>">
              <i class="nc-icon nc-bank"></i>
              <p>dashoard</p>
            </a>
          </li>
          <li>
            <a href="<?=$path .'/category'?>">
              <i class="nc-icon nc-diamond"></i>
              <p>Category</p>
            </a>
          </li>
          <li>
            <a href="<?=$path .'/product'?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Product</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">