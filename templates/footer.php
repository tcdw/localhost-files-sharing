<?php
function pageFooter(){
?>
  </div>
  
  <!-- 尾部 -->
  <div class="footer">
    <p style="text-align: center;"><br>&copy;2014-2015 @Z's!<br><br></p>
  </div>
  <!-- 导航 -->
  <nav id="menu">
    <ul>
      <li><a href="index.php">首页 ~ Index</a></li>
      <li><a href="download.php">文件下载 ~ Download</a></li>
      <li><a href="upload.php">文件上传 ~ Upload</a></li>
      <li><a href="about.php">关于 ~ About</a></li>
    </ul>
  </nav>
  <!-- Call the menu UP -->
  <script type="text/javascript">
    $(function() {
      $('nav#menu').mmenu();
    });
  </script>
</body>
</html>
<?php } ?>