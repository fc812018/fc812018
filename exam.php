<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
<style>
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.grid {
  background: #EEE;
  max-width: 1200px;
}

.grid-item {
  float: left;
}

/* item is invisible, but used for layout */
.grid-item,
.grid-item-content {
  width: 120px;
  height: 120px;
}

/* grid-item-content is visible, and transitions size */
.grid-item-content {
  width: 120px;
  height: 120px;
  background: #D26;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.5);
  border-radius: 5px;
  -webkit-transition: width 0.4s, height 0.4s;
          transition: width 0.4s, height 0.4s;
}

.grid-item:hover .grid-item-content {
  border-color: white;
  background: #A2C;
  cursor: pointer;
}

/* both item and item content change size */
.grid-item.is-expanded,
.grid-item.is-expanded .grid-item-content {
  width: 360px;
  height: 240px;
}

.grid-item.is-expanded {
  z-index: 2;
}

.grid-item.is-expanded .grid-item-content {
  background: #F90;
}

</style>

  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='../dist/masonry.pkgd.js'></script>


</head>
<body>
<h1>Masonry - columnWidth</h1>

<div class="grid">
  <div class="grid-item">
    <div class="grid-item-content"><img src="http://cdn3.whatculture.com/wp-content/uploads/2014/04/paige-wwe.jpg"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
  <div class="grid-item">
    <div class="grid-item-content"></div>
  </div>
</div>
<img src="http://i.ytimg.com/vi/BkB4N1fsR-E/maxresdefault.jpg" id="images" width="100" height="100" />

<script>
// external js: masonry.pkgd.js

var $grid = $('.grid').masonry({
  columnWidth: 120,
  itemSelector: '.grid-item'
});

$grid.on( 'click', '.grid-item-content', function( event ) {
  $( event.currentTarget ).parent('.grid-item').toggleClass('is-expanded');
  $grid.masonry();
});

</script>
<script>

$(document).ready(function() {
var img = $(this),t = true;//當t為true時，是正常狀態下的


$("#images").click(function() {

if(t) {

t = false;

imgH = $(this).height(1500);

imgW = $(this).width(1500);


} else {

t = true;

imgH = $(this).height(100);

imgW = $(this).width(100);

}

});

});

</script>

</body>

