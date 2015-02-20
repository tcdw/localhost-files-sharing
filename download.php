<?php
include './template.php';

/**
 *  本脚本用来遍历文件列表并下载文件。
 */

$path='./files/';//定义永久保存文件路径

pageHeader('文件下载 ~ Files Download!');
downloadTableHeader();

  //搜索文件夹内的所有文件！
  $q=scandir($path);
  
  foreach ($q as $item) {
    if ((is_file($path . '/' . $item)) AND (substr($item, 0, 1) != '.')) {
      $file_size=filesize($path . '/' . $item);
      
      print "<tr><td width=\"90px\"><a href=\"$path/$item\">$item</a></td><td width=\"60px\">$file_size bytes</td></tr>";
    }
  }

downloadTableFooter();
pageFooter();

?>