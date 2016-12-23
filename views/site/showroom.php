<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Image Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

     <div class="col-lg-4">
     <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
       <img src="speaker.jpg"  alt="speaker" width="460" height="345">
        <div class="carousel-caption">
          <h3>Klip Speaker System</h3>
                </div>
      </div>

      <div class="item">
        <img src="blootoothspeaker.jpg" alt="Speaker" width="460" height="345">
        <div class="carousel-caption">
          <h3>Klip Bluetooth Speaker</h3>
            </div>
      </div>
    
      <div class="item">
        <img src="usb.jpg" alt="USB Cable" width="460" height="345">
        <div class="carousel-caption">
          <h3>USB Cable</h3>
        
        </div>
      </div>

      <div class="item">
        <img src="headset.jpg" alt="headset" width="460" height="345">
        <div class="carousel-caption">
          <h3>Klip Bluetooth Headset</h3>
          <p>Music for days</p>
        </div>
      </div>
 
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

     <a href ="index.php"> Click here to go back home </a>

