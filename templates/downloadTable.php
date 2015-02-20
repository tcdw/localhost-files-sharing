<?php function downloadTableHeader(){ ?>
<table cellpadding="2" cellspacing="2" border="1" width="100%" align="center">
  <tr>
    <td width="90px">文件名<a href="#" onclick="location.reload(bForceGet=true)" align="right">(Refresh...)</a></td>
    <td width="60px">文件大小</td>
  </tr>
<?php
}
function downloadTableFooter(){
?>
  </table>
<?php } ?>