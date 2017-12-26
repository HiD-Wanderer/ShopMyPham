<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:09:57
  from "C:\wamp64\www\ShopMyPham\views\template\San_Pham\v_doc_ct_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ef05527b046_95319523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9117ac824ec56978320ab8a15e164856ddbf154c' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\San_Pham\\v_doc_ct_san_pham.tpl',
      1 => 1514074195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a3ef05527b046_95319523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
\
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213995a3ef05526bc17_53016559', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_213995a3ef05526bc17_53016559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-head_agile_info_w3l">
  <div class="container">
    <h3>Single <span>Page </span></h3>
    <!--/w3_short-->
    <div class="services-breadcrumb">
      <div class="agile_inner_breadcrumb">

       <ul class="w3_short">
        <li><a href="index.html">Home</a><i>|</i></li>
        <li>Single Page</li>
      </ul>
    </div>
  </div>
  <!--//w3_short-->
</div>
</div>
 <form method="post" action="#">
              <input type="search" placeholder="Search" id="autocomplete">
              <input type="submit">
</form>
<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
  <div class="container">
   <div class="col-md-4 single-right-left ">
    <div class="grid images_3_of_2">
      <div class="flexslider">
        <div style="border: 1px solid black">
         <img src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
san_pham/<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['hinh'];?>
" data-imagezoom="true" class="img-responsive"> 
       </div>    
       <div class="clearfix"></div>
     </div>  
   </div>
 </div>
 <div class="col-md-8 single-right-left simpleCart_shelfItem">
  <h3><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_san_pham'];?>
</h3>
  <p><span class="item_price"><?php echo number_format($_smarty_tpl->tpl_vars['San_Pham']->value['don_gia_khuyen_mai']);?>
 VNĐ </span> <del>- <?php echo number_format($_smarty_tpl->tpl_vars['San_Pham']->value['don_gia']);?>
 VNĐ </del></p>
  <div class="rating1">
    <span class="starRating">
      <input id="rating5" type="radio" name="rating" value="5">
      <label for="rating5">5</label>
      <input id="rating4" type="radio" name="rating" value="4">
      <label for="rating4">4</label>
      <input id="rating3" type="radio" name="rating" value="3" checked="">
      <label for="rating3">3</label>
      <input id="rating2" type="radio" name="rating" value="2">
      <label for="rating2">2</label>
      <input id="rating1" type="radio" name="rating" value="1">
      <label for="rating1">1</label>
    </span>
  </div>

  <div class="occasional">
    <h5>Số lượng :</h5>
   <input type="number" name="soluong" id="soluong" value="1" style="width: 70px; text-align:center">
   
   
  
    <div class="clearfix"> </div>
  </div>
  <div class="occasion-cart">
    <div >
    <button class="btn btn-buy" id="btnmuahang" name="<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ma_san_pham'];?>
">Add to Cart</button> 
   </div>

 </div>
 <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
   <li class="share">Share On : </li>
   <div class="fb-like" data-href="https://www.facebook.com/tinhte/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

 </div>
 <div class="clearfix"> </div>
 <!-- /new_arrivals --> 
 <div class="responsive_tabs_agileits"> 
  <div id="horizontalTab">
    <ul class="resp-tabs-list">
      <li>Nội dung chi tiết</li>
      <li>Bình luận</li>
      <li>Video</li>
    </ul>
    <div class="resp-tabs-container">
      <!--/tab_one-->
      <div class="tab1">

        <div class="single_page_agile_its_w3ls">
          <h6><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_san_pham'];?>
</h6>
          <p><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['noi_dung_chi_tiet'];?>
</p>

        </div>
      </div>
      <!--//tab_one-->
      <div class="tab2">

        <div class="single_page_agile_its_w3ls">
          <div class="bootstrap-tab-text-grids">
            <div class="bootstrap-tab-text-grid">
              
              <div class="fb-comments" data-href="https://www.facebook.com/tinhte/" data-numposts="5"></div>
              
              <div class="clearfix"> </div>
            </div>
            
          </div>

        </div>
      </div>
      <div class="tab3">

        <div class="single_page_agile_its_w3ls">
          <h6><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_san_pham'];?>
</h6>
          <div>
            <video width="100%" controls>
              <source src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
/san_pham/Video/<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['video'];?>
" type="video/mp4">
                <source src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
/san_pham/Video/<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_san_pham_url'];?>
.ogg" type="video/ogg">
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <!-- //new_arrivals --> 
    <!--/slider_owl-->

    <div class="w3_agile_latest_arrivals">
      <h3 class="wthree_text_info">Sản phẩm <span>Cùng loại</span></h3> 
      <?php $_smarty_tpl->_assignInScope('i', 0);
?>
      <?php if (isset($_smarty_tpl->tpl_vars['DSSanPham']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPham']->value, 'sanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sanpham']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['i']->value < 4) {?>  
      <div class="col-md-3 product-men single">
        <div class="men-pro-item simpleCart_shelfItem">
          <div class="men-thumb-item">
            <img src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
san_pham/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['hinh'];?>
" alt="" class="pro-image-front">
            <img src="<?php echo $_smarty_tpl->tpl_vars['iPath']->value;?>
san_pham/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['hinh'];?>
" alt="" class="pro-image-back">
            <div class="men-cart-pro">
              <div class="inner-men-cart-pro">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ma_san_pham'];?>
.html" class="link-product-add-cart">Quick View</a>
              </div>
            </div>
            <span class="product-new-top">New</span>

          </div>
          <div class="item-info-product ">
            <h4><a href="single.html"><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_san_pham'];?>
</a></h4>
            <div class="info-product-price">
              <span class="item_price"><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['don_gia_khuyen_mai'];?>
</span>
              <del><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['don_gia'];?>
</del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
              <form action="#" method="post">
                <fieldset>
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="add" value="1">
                  <input type="hidden" name="business" value=" ">
                  <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                  <input type="hidden" name="amount" value="30.99">
                  <input type="hidden" name="discount_amount" value="1.00">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="return" value=" ">
                  <input type="hidden" name="cancel_return" value=" ">
                  <input type="submit" name="submit" value="Add to cart" class="button">
                </fieldset>
              </form>
            </div>

          </div>
        </div>
      </div>
      <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>   
      <div class="clearfix"> </div>
      <!--//slider_owl-->
    </div>
  </div>
</div>
<!--//single_page-->
<!--/grids-->
<div class="coupons">
  <div class="coupons-grids text-center">
    <div class="w3layouts_mail_grid">
      <div class="col-md-3 w3layouts_mail_grid_left">
        <div class="w3layouts_mail_grid_left1 hvr-radial-out">
          <i class="fa fa-truck" aria-hidden="true"></i>
        </div>
        <div class="w3layouts_mail_grid_left2">
          <h3>FREE SHIPPING</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
      </div>
      <div class="col-md-3 w3layouts_mail_grid_left">
        <div class="w3layouts_mail_grid_left1 hvr-radial-out">
          <i class="fa fa-headphones" aria-hidden="true"></i>
        </div>
        <div class="w3layouts_mail_grid_left2">
          <h3>24/7 SUPPORT</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
      </div>
      <div class="col-md-3 w3layouts_mail_grid_left">
        <div class="w3layouts_mail_grid_left1 hvr-radial-out">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </div>
        <div class="w3layouts_mail_grid_left2">
          <h3>MONEY BACK GUARANTEE</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
      </div>
      <div class="col-md-3 w3layouts_mail_grid_left">
        <div class="w3layouts_mail_grid_left1 hvr-radial-out">
          <i class="fa fa-gift" aria-hidden="true"></i>
        </div>
        <div class="w3layouts_mail_grid_left2">
          <h3>FREE GIFT COUPONS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>

  </div>
</div>
<!--grids-->
<?php
}
}
/* {/block "content"} */
}
