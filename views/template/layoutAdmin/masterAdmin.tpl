<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  {block name="head"}{include file="layoutAdmin/head.tpl"}{/block}
  <body onLoad="timeRefresh(6000);">
  <!-- container section start -->
  <section id="container" class="">
      <!-- header -->
      {block name="header"}{include file="layoutAdmin/header.tpl"}{/block}
      <!-- left -->
      {block name="left"}{include file="layoutAdmin/left.tpl"}{/block}
      <!--main content start-->
      <section id="main-content">
          <section class="main" id="mainKhachHang">
			<!-- content -->
          {block name="content"}{/block}
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- script -->
    {block name="script"}{include file="layoutAdmin/script.tpl"}{/block}
  </body>
</html>
