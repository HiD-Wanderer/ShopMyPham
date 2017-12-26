{extends file="layout/masterSanPham.tpl"}\
{block name="content"}
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
         <img src="{$iPath}san_pham/{$San_Pham['hinh']}" data-imagezoom="true" class="img-responsive"> 
       </div>    
       <div class="clearfix"></div>
     </div>  
   </div>
 </div>
 <div class="col-md-8 single-right-left simpleCart_shelfItem">
  <h3>{$San_Pham['ten_san_pham']}</h3>
  <p><span class="item_price">{number_format($San_Pham['don_gia_khuyen_mai'])} VNĐ </span> <del>- {number_format($San_Pham['don_gia'])} VNĐ </del></p>
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
    <button class="btn btn-buy" id="btnmuahang" name="{$San_Pham['ma_san_pham']}">Add to Cart</button> 
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
          <h6>{$San_Pham['ten_san_pham']}</h6>
          <p>{$San_Pham['noi_dung_chi_tiet']}</p>

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
          <h6>{$San_Pham['ten_san_pham']}</h6>
          <div>
            <video width="100%" controls>
              <source src="{$iPath}/san_pham/Video/{$San_Pham['video']}" type="video/mp4">
                <source src="{$iPath}/san_pham/Video/{$San_Pham['ten_san_pham_url']}.ogg" type="video/ogg">
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
      {$i=0}
      {if isset($DSSanPham)}
      {foreach $DSSanPham as $sanpham}
      {if $i<4}  
      <div class="col-md-3 product-men single">
        <div class="men-pro-item simpleCart_shelfItem">
          <div class="men-thumb-item">
            <img src="{$iPath}san_pham/{$sanpham['hinh']}" alt="" class="pro-image-front">
            <img src="{$iPath}san_pham/{$sanpham['hinh']}" alt="" class="pro-image-back">
            <div class="men-cart-pro">
              <div class="inner-men-cart-pro">
                <a href="{$path}san-pham/ct/{$sanpham['ten_san_pham_url']}-{$sanpham['ma_san_pham']}.html" class="link-product-add-cart">Quick View</a>
              </div>
            </div>
            <span class="product-new-top">New</span>

          </div>
          <div class="item-info-product ">
            <h4><a href="single.html">{$sanpham['ten_san_pham']}</a></h4>
            <div class="info-product-price">
              <span class="item_price">{$sanpham['don_gia_khuyen_mai']}</span>
              <del>{$sanpham['don_gia']}</del>
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
      {$i=$i+1}
      {/if}
      {/foreach}
      {/if}   
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
{/block}