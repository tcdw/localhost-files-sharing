<?php
include './template.php';

/**
 *  本脚本用来上传文件。
 */

$path='./files/';//定义永久保存文件路径

  //HTML表单成功提交了吗？
  if($_SERVER['REQUEST_METHOD']=='POST')
  { //若成功提交了...
    //检查服务器是否接收到文件...
    if(isset($_FILES['upload']))
    { //若接收到了...
      //尝试移动文件！
      pageHeader('上传文件 ~ 结果');
      if(move_uploaded_file($_FILES['upload']['tmp_name'], $path.$_FILES['upload']['name']))
      {
        echo '<h2 style="color: green; text-align: center;">上传成功！</h2>';//上传成功！
      }//move... IF
    }//isset() IF
    //若发生错误...
    if($_FILES['upload']['error']>0)
    {
      //输出错误ID#
      echo'<h2 class="error">上传失败！</h2>';
      switch($_FILES['upload']['error'])
      {
        case 1:
          //#1 上传的文件大小超出php.ini的限制大小。
          echo'<p class="error">上传的文件超过php.ini限定的大小。</p>';
        break;
        case 2:
          //#2 上传的文件大小超过HTML表单限制大小。(@name='MAX_FILE_SIZE')
          echo'<p class="error">上传的文件超过HTML表单(MAX_FILE_SIZE)限定的大小。</p>';
        break;
        case 3:
          //#3 文件只上传了一部分
          echo'<p class="error">文件只上传了一部分。</p>';
        break;
        case 4:
          //#4 没有选中任何文件
          echo'<p class="error">没有选中任何文件。</p>';
        break;
        case 6:
          //#6 未提供临时文件夹
          echo'<p class="error">临时文件夹未准备好。</p>';
        break;
        case 7:
          //#7 PHP没有权限把文件写入磁盘
          echo'<p class="error">PHP没有权限把文件写入服务器。</p>';
        break;
        case 8:
          //#8 文件中止传送
          echo'<p class="error">文件中止传送。</p>';
        break;
        default:
          //#0 未知错误
          echo'<p class="error">未知错误。</p>';
        break;
      }//END SWITCH
    }//END ERROR IF
    echo'<p style="text-align: center;"><a href="./upload.php">&lt;- 返回上传界面</a></p>';
    pageFooter();
    //若临时文件仍然存在，尝试删除之！
    if(file_exists($_FILES['upload']['tmp_name'])&&is_file($_FILES['upload']['tmp_name']))
    {
      unlink($_FILES['upload']['tmp_name']);
    }
  }else{//未POST...
    pageHeader('上传文件 ~ File Upload!');
    uploadForm();
    pageFooter();
  }
?>