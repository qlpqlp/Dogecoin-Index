<?php
/**
*   File: Index file of Doge Wow Index
*   Author: https://twitter.com/inevitable360 and all #Dogecoin friends and familly helped will try to find a way to put all names eheh!
*   Description: Real use case of the dogecoin.com CORE Wallet connected by RPC Calls using Old School PHP Coding with easy to learn steps (I hope lol)
*   License: Well, do what you want with this, be creative, you have the wheel, just reenvent and do it better! Do Only Good Everyday
*/
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Much Wow and Such Sad Dogecoin Index!</title>
  <meta name="description" content="Much Wow and Such Sad Dogecoin Index!">
  <meta name="author" content="All Dogecoin Community!">
  <meta name="generator" content="You!">
  <link href="//what-is-dogecoin.com/img/dogecoin-300.png" rel="icon" />
  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="css/doge.css" crossorigin="anonymous">  
  <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include("inc/menu.php"); ?>
  <?php
$wow = json_decode(file_get_contents("https://api.alternative.me/fng/"));
$wowindex = 1;
if ($wow->data[0]->value > 10){ $wowindex = 2;}
if ($wow->data[0]->value > 20){ $wowindex = 3;}
if ($wow->data[0]->value > 30){ $wowindex = 4;}
if ($wow->data[0]->value > 40){ $wowindex = 5;}
if ($wow->data[0]->value > 50){ $wowindex = 6;}
if ($wow->data[0]->value > 60){ $wowindex = 7;}
if ($wow->data[0]->value > 70){ $wowindex = 8;}
if ($wow->data[0]->value > 80){ $wowindex = 9;}
if ($wow->data[0]->value > 90){ $wowindex = 10;}

  ?>
<div class="dashboard-meter__wrapper">
<h7>Much Wow and Such Sad Dogecoin Index!</h7>
  <meter id="risk-meter" class="dashboard-meter sr-only" min="0"  max="10" value="3"></meter>
  <div class="dashboard-meter__container">
  <div class="dashboard-meter"></div>
  <div class="dashboard-meter__dial">
  </div>
</div>
<label for="risk-meter" class="dashboard-meter__labels">
  <span class="sr-only">Do Only Good Everyday</span>
  <span aria-hidden="true" style="padding-left: 15px">Such Sad</span>
  <span aria-hidden="true" style="padding-right: 15px">Much Wow</span>
</label>
<h1 id="wow"><?php echo $wow->data[0]->value; ?>%</h1>
</div>
<script>
jQuery({someValue: 0}).animate({someValue: <?php echo $wow->data[0]->value; ?>}, {
  duration: 5000,
  easing:'swing', // can be anything
  step: function() { // called on every step
    // Update the element's text with rounded-up value:
    $('#wow').text(Math.ceil(this.someValue) + "%");
  }
});
</script>
</body>
</html>