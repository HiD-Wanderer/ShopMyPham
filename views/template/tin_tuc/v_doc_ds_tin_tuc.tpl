{extends file="layout/masterSanPham.tpl"}
{block name="content"}
<br><br><br><br><br><br>
<!-- Start Blog Banner
        ==================================== -->
<section>
  <div class="container">
    <div class="row wow fadeInDown" data-wow-duration="500ms">
      <div class="col-lg-12"> 
        
        <!-- section title -->
        <div class="title text-center">
          <h2>Danh Sách <span class="color">Tin Tức</span></h2>
          <div class="border"></div>
        </div>
</section>
<!-- End Section -->

<section id="blog" class="bg-one">
      <div class="container">
        <div class="row">
          <div class="clearfix">
          
          <!-- single blog post -->
             {if isset($DSTinTuc)}
            {foreach $DSTinTuc as $tin}
            <article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
              <div class="note">
                <div id="gallery-post" class="media-wrapper">
                  <div class="item">
                    <img src="{$iPath}{$tin['hinh']}" width="500" height="400" alt="amazing caves coverimage" class="img-responsive">
                  </div>
                  
                </div>
  
                <div class="excerpt">
                  <h3 align="center" ><b>{$tin['tieu_de']}</b></h3>
                  <p>{$tin['tom_tat']}</p>
                  <a class="btn btn-transparent" href="{$path}tin-tuc/ct/{$tin['tieu_de_url']}-{$tin['ma_tin_tuc']}.html">Xem Thêm>></a>
                </div>
              </div>            
            </article>
              {/foreach}
            {/if}
            <!-- end single blog post -->
            
            <!-- single blog post -->
            
          </div>
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end section -->




<div class = "col-sm-15" style="background-color: #444444; color:#aae098" align="center"> </br>

{/block} 