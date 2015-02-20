<?php
include './template.php';

/**
 *  index
 */

pageHeader('首页');
?>
<h3 style="text-align: center;">欢迎使用局域网文件分享程序</h3>
<p style="text-align: center;">快捷入口:<br><a href="upload.php">文件上传(Send.)</a> | <a href="download.php">文件下载(Recv.)</a><br><br>亦可通过左上角的按钮查阅更多功能。</p>
<?php
pageFooter();
?>