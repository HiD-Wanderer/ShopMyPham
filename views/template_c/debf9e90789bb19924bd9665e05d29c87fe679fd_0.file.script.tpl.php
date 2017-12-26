<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:00:19
  from "C:\wamp64\www\ShopMyPham\views\template\layout\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3eee135c2d66_27994846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'debf9e90789bb19924bd9665e05d29c87fe679fd' => 
    array (
      0 => 'C:\\wamp64\\www\\ShopMyPham\\views\\template\\layout\\script.tpl',
      1 => 1514046254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3eee135c2d66_27994846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- js -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!-- //js -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
modernizr.custom.js"><?php echo '</script'; ?>
>
<!-- Custom-JavaScript-File-Links --> 
<!-- cart-js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
minicart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // Mini Cart
    paypal.minicart.render({
      action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
      paypal.minicart.reset();
    }
  <?php echo '</script'; ?>
>

  <!-- //cart-js --> 
  <!-- script for responsive tabs -->                     
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
easy-responsive-tabs.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
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
  <?php echo '</script'; ?>
>
  <!-- //script for responsive tabs -->       
  <!-- stats -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
jquery.countup.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('.counter').countUp();
  <?php echo '</script'; ?>
>
  <!-- //stats -->
  <!-- start-smoth-scrolling -->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
move-top.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
jquery.easing.min.js"><?php echo '</script'; ?>
>

  <!-- here stars scrolling icon -->
  <?php echo '<script'; ?>
 type="text/javascript">
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
            <?php echo '</script'; ?>
>
            <!-- //here ends scrolling icon -->



<?php echo '<script'; ?>
>
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
        url:"<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/them-san-pham.html",
        dataType: "text",
        type: "POST",
        data: { sanpham: masanpham, so_luong: sl },
        success: function(result)
        {

          if(result!='')
          {
            
               
              window.location = "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/thong-tin-gio-hang.html";
            
          }
          else
            alert("Thêm vào giỏ hàng không thành công");
        }
      });
    });

  });
<?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['dsTimSanPham']->value)) {?> 
<?php echo '<script'; ?>
 type="text/javascript">
  $(function(){
    var currencies = [
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsTimSanPham']->value, 'itemdsTim');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdsTim']->value) {
?>
    { value: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['ten_san_pham'];?>
' , data: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['ten_san_pham_url'];?>
' },
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               
    ];
    $('#autocomplete').autocomplete({
      lookup: currencies,
      onSelect: function (suggestion) {

        var tenUrl=suggestion.data;
        $.ajax({
          url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
tim.php", 
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

<?php echo '</script'; ?>
>
<?php }?>







            <!-- for bootstrap working -->
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['iPath3']->value;?>
bootstrap.js"><?php echo '</script'; ?>
>
            <div id="fb-root"></div>
            <?php echo '<script'; ?>
>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }
}
