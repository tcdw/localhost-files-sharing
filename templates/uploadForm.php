<?php function uploadForm(){ ?>
    <form enctype="multipart/form-data" action="upload.php" method="post">
      <p id="status" style="text-align: center;">请选择一个文件上传。</p>
      <p style="text-align: center;"><input type="file" name="upload"></p>
      <p style="text-align: center;"><img id="loader" src="./css/images/loader-bar.gif" alt="Processing..." style="visibility: hidden;"></p>
      <p style="text-align: center;"><input style="visibility: visible;" id="sumit" type="submit" value="上传！"></p>
    </form>
    <script>
    $(function(){
      $('#sumit').click(function(){
        $('#status').html('处理中...');
        loader.style.visibility='visible';
        sumit.style.visibility='hidden';
      });
    });
    </script>
<?php } ?>