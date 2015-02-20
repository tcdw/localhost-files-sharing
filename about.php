<?php
include './template.php';

/**
 *  about.php
 */

pageHeader('关于本程序');
?>
<h3 style="text-align: center;">Android局域网文件分享程序</h3>
<p style="text-align: center;">v2.0</p>
<div style="padding-left: 10px;">
    <h3>程序功能<small> ~ Function</small></h3>
    能让您和朋友们通过局域网进行文件快速互传分享。
    <h3>v2.0新特性 <small> ~ What's New</small></h3>
    <ul style="text-align: left;">
        <li>新增文件上传功能。</li>
        <li>重新编写代码，让后续修改更方便。</li>
        <li>使用 HTML 5 文档。</li>
        <li>对 CSS 样式进行优化。</li>
    </ul>
</div>
<?php
pageFooter();
?>