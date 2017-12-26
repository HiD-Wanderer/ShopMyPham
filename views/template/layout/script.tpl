<!-- js -->
<script type="text/javascript" src="{$iPath3}jquery-2.1.4.min.js"></script>
<!-- //js -->

<script src="{$iPath3}modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links --> 
<!-- cart-js -->
<script src="{$iPath3}minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
      action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
      paypal.minicart.reset();
    }
  </script>

  <!-- //cart-js --> 
  <!-- script for responsive tabs -->                     
  <script src="{$iPath3}easy-responsive-tabs.js"></script>
  <script>
    $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
    }
  });
      $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
      });
    });
  </script>
  <!-- //script for responsive tabs -->       
  <!-- stats -->
  <script src="{$iPath3}jquery.waypoints.min.js"></script>
  <script src="{$iPath3}jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{$iPath3}move-top.js"></script>
  <script type="text/javascript" src="{$iPath3}jquery.easing.min.js"></script>

  <!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

              });
            </script>
            <!-- //here ends scrolling icon -->

  <!-- for bootstrap working -->
            <script type="text/javascript" src="{$iPath3}bootstrap.js"></script>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

<script>
  $(document).ready(function()
  {

    $(".btn-buy").click(function()
    {

      var sl=$("#soluong").val();
      if(sl<=0)
      {
        alert("Vui lòng nhập số lượng > 0");
        return;
      }
      var masanpham=$(".btn-buy").attr("name");
      $.ajax(
      {
        url:"{$path}khach-hang/them-san-pham.html",
        dataType: "text",
        type: "POST",
        data: { sanpham: masanpham, so_luong: sl },
        success: function(result)
        {

          if(result!='')
          {
            
               
              window.location = "{$path}khach-hang/thong-tin-gio-hang.html";
            
          }
          else
            alert("Thêm vào giỏ hàng không thành công");
        }
      });
    });

  });
</script>


{if isset($dsTimSanPham)} 
<script type="text/javascript">
  $(function(){
    var currencies = [
    {foreach $dsTimSanPham as $itemdsTim}
    { value: '{$itemdsTim['ten_san_pham']}' , data: '{$itemdsTim['ten_san_pham_url']}' },
    {/foreach}               
    ];
    $('#autocomplete').autocomplete({
      lookup: currencies,
      onSelect: function (suggestion) {

        var tenUrl=suggestion.data;
        $.ajax({
          url: "{$path}tim.php", 
          dataType: "text",
          type: "POST",
          data: { ten_san_pham_url : tenUrl  },
          success: function(result)
          {                                       
            if(result!="")
              $('#mainSanPham').html(result);
          }
        });
                //end ajax
              }
            });          
  });
  function veserver(tenUrl)
  {
    alert(tenUrl);
  }

</script>
{/if}

 {if isset($dsTimSanPham)} 
        <script type="text/javascript">
            $(function(){
              var currencies = [
                {foreach $dsTimSanPham as $itemdsTim}
                    { value: '{$itemdsTim['ten_san_pham']}' , data: '{$itemdsTim['ten_san_pham_url']}' },
                {/foreach}               
              ];
            $('#autocomplete').autocomplete({
                lookup: currencies,
                onSelect: function (suggestion) {
                
                    var tenUrl=suggestion.data;
                    $.ajax({
                                    url: "{$path}tim.php", 
                                    dataType: "text",
                                    type: "POST",
                                    data: { ten_san_pham_url : tenUrl  },
                                    success: function(result)
                                    {                                       
                                        if(result!="")
                                          $('#mainSanPham').html(result);
                                    }
                            });
                //end ajax
                }
              });          
            });
            function veserver(tenUrl)
            {
                alert(tenUrl);
            }

  </script>







          