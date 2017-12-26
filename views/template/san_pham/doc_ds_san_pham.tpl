{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<section id="portfolio">
  <div class="container">
    <div class="col-lg-12">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Portfolio</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
        </div>
      </div>
      <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
      </ul>
      <!--/#portfolio-filter-->
      
      <div class="row">
        <div class="portfolio-items"> {foreach $DSSanPham as $sanpham}
          <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap"> <img class="img-responsive" src="{$iPath}portfolio/{$sanpham['hinh']}" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class="preview" href="{$iPath}portfolio/{$sanpham['hinh']}" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a> </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item--> 
          {/foreach} </div>
      </div>
    </div>
  </div>
</section>
<!--/#portfolio-item--> 

{/block}