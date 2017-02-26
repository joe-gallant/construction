<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no" />
	<title>Construction Website</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>



	<?php include('partials/header.php'); ?>
	<?php include('partials/hero.php'); ?>
	<?php include('partials/what-we-offer.php'); ?>
	<?php include('partials/testimonial.php'); ?>
	<?php include('partials/footer.php'); ?>

<script>
function openMenu(){
  var burger = document.querySelector('.burger_menu');
  burger.classList.toggle('open');
  var menu = document.querySelector('.mainNav');
  menu.classList.toggle('open');
}
function openPopup() {
  var popup = document.querySelector('.popup');
  popup.classList.toggle('open');
  var button = document.querySelector('.infoButton');
  button.classList.toggle('change');
}

</script>

<div class="infoButton" onClick="openPopup()"><i class="fa fa-info-circle info" aria-hidden="true"></i><i class="fa fa-times-circle close" aria-hidden="true"></i></div>
<p class="popup">Please note that this is just a demo of a construction company website</p>

</body>
</html>