{extends file="layout/masterSanPham.tpl"}
{block name="content"}
<title>BST</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="{$iPath1}/css1/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="{$iPath1}/css1/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="{$iPath1}/css1/style_common.css" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="{$iPath3}/js1/jquery-1.11.0.min.js"></script>
<script src="{$iPath3}/js1/bootstrap.min.js"></script>

<div class="col-sm-15">
<a class="w3-btn-floating w3-hover-dark-grey w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
<a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
<br>
<div class="col-sm-15">
  <img src="{$iPath}8.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}7.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}6.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}5.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}4.jpg"  width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}3.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}2.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

<div class="col-sm-15">
  <img src="{$iPath}1.jpg" width="1280" height="650" class="mySlides w3-animate-fading">
</div>

</div>

<audio autoplay>
      <source src="{$iPath}beauti.mp3" /> 
    </audio>
<script>
    {literal}
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
    {/literal}
</script>

<script>
{literal}
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 9000);    
    }
    {/literal}
</script>


<!--gallery start here-->
<div class="gallery agile">
    <div class="container">
        <div class="gallery-main">
            <div class="gallery-top fadeInRightBig" data-wow-delay="0.3s">
                <h2>BỘ SƯU TẬP</h2>
            </div>
            <div class="gallery-bottom wow zoomIn" data-wow-delay="0.3s">
            {foreach $DSbstGroup as $item}
              {$bosuutap=$item[0]}
              {$DSbst=$item[1]}
               <div class="view view-seventh">
                 
                  {foreach $DSbst as $sp}
                   <div class="project-eff">
                        <div id="nivo-lightbox-demo">  
                        
                        <a href="{$iPath}san_pham/SPALL/{$sp['hinh']}" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"></span>
                        
                        <img class="img-responsive" src="{$iPath}san_pham/SPALL/{$sp['hinh']}" alt="{$sp['ten_san_pham']}" alt="">
                            <div class="mask">
                                <h3>{$bosuutap['ten_bst']}</h3>
                                <p>{$bosuutap['noi_dung']}</p>   
                            </div></a>
                       </div>
                   </div>
                   {/foreach}
                  
                </div>
               {/foreach}
        </div>
    </div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="{$iPath1}/css1/magnific-popup.css">
            <script type="text/javascript" src="{$iPath3}/js1/nivo-lightbox.min.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
                });
                </script>
{/block}