<!DOCTYPE html>
<html>
  <head>
    <title>Zet Tools</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/pimp_my_bar.js"></script>
    <script type="text/javascript" src="js/colorpicker.js"></script>
    <script type="text/javascript" src="js/sticky.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <?php 
      if(!empty($page)){
        if ($page == 'z-input' || $page == 'z-input-id' || $page == 'z-input-random') {
          echo "<link rel='stylesheet' type='text/css' href='z-input/css/z-input.css'>";
          echo "<script type='text/javascript' src='z-input/js/z-input.js'></script>";
        }
      }
     ?>

  </head>  
  <body>