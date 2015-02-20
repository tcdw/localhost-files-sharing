<?php
//传入的$title值决定网页标题
function pageHeader($title){
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="css/mobile.css">
<link rel="stylesheet" href="css/jquery.mmenu.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mmenu.min.js"></script>
</head>

<body>
  <!-- 头部 -->
  <div class="header">
    <a href="#menu"><img src="css/images/button.jpg" alt="button" style="margin-left:10px; margin-top: 4px;"></a>
  </div>
  
  <!-- 正文 -->
  <div class="content">
<?php } ?>