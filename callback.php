<?php
##############################
$to = 'support@goldbank.world';
##############################

if (isset($_POST["phone"]) && $_POST["phone"] != '' ) { 

foreach($_POST AS $key => $value) {
    ${$key} = trim(filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS)); 
} // end FOREACH

		$time = date("d F Y / G:i");
		$from = '<do-not-reply@goldbank.world>';
		$message = 'Запрос обратного звонка c goldbank.world: 
------------
'.$time.'
------------
Имя: '.$name.'
Телефон: '.$phone;		
		$subj = 'Запрос обратного звонка c goldbank.world';
		mailit($from, $subj, $to, $message);

}

function mailit($from, $subj, $to, $message){
	
	$headers = "From: ".$from."\nReply-To: ".$from."\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit\r\n";
	
	mail ($to, $subj, $message, $headers);
	
} // end function
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta name="description" content="">
  
  <title>goldbank.world</title>
  <link rel="preload" as="style" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="preload" as="style" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="preload" as="style" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="preload" as="style" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
<div style="padding:50px;"> </div>
<section class="mbr-section content4 cid-rTu0ouXZKj" id="content4-b">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8" align="center">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Спасибо за Ваше обращение!</h2>
                <h3>Мы свяжемся с Вами в ближайшее время<br />
                <a href="javascript:;" onClick="parent.jQuery.fancybox.getInstance().close();">Вернуться на сайт</a></h3>
                
            </div>
        </div>
    </div>
</section>







  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script async src="assets/dropdown/js/nav-dropdown.js"></script>
  <script async src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script async src="assets/smoothscroll/smooth-scroll.js"></script>
  <script async src="assets/tether/tether.min.js"></script>
  <script async src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script async src="assets/parallax/jarallax.min.js"></script>
  <script async src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script async src="assets/theme/js/script.js"></script>

  
  
</body>
</html>