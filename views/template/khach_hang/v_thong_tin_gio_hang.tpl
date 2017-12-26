include_once();
{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<title>Thông Tin Giỏ Hàng</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <div class="w3-container w3-light-grey w3-justify">
<div class="row" style="margin: 10px auto">
   <h3 align="center">Thông Tin Giỏ Hàng</h3>
	<form method="post">
	{if isset($mangSanPham)}
		<h3>Danh sách Sản Phẩm</h3>
		{$i=1}
    {$tongtien=0}
		<table class="table table-striped" style="color: #000000">
  			<th>STT</th><th>Mã Sản Phẩm</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th>
  			{foreach $mangSanPham as $masanpham =>$TT}
  				<tr>
  					<td>{$i}</td>
  					<td>{$masanpham}</td>
  					<td>{$TT['2']}</td>
  					<td>
  						<input type="number" name="sl_{$masanpham}" value="{$TT['1']}" style="width: 15%; text-align:center">
 						  				
  					</td>
  					<td>{number_format($TT['0'])}</td>
  					<td>{number_format($TT['0']*$TT['1'])}</td>
  				</tr>
  				{$i=$i+1}
          {$tongtien=$tongtien+$TT['0']*$TT['1']}
  			{/foreach}  
        <tr>
          <td colspan="5" align="right">
            <strong>Tổng tiền sản phẩm</strong>
          </td>
          <td>
            {number_format($tongtien)} VNĐ
          </td>
        </tr>
		</table>
		
	{/if}

	
	{if isset($mangSanPham) || isset($mangBoSuuTap)}
		<p align="center">
			<input style="border-radius: 10px;" type="submit" name="CapNhat" value="Cập nhật" class="w3-btn w3-red">
			<a style="border-radius: 10px;" href="{$path}khach-hang/dat-hang.html" class="w3-btn w3-green">Đăt hàng</a>
			<a style="border-radius: 10px;" href="{$path}khach-hang/huy-gio-hang.html" class="w3-btn w3-aqua">Hủy giỏ hàng</a>
		</p>
	{/if}
	</form>
  </div>
	{if ! isset($mangSanPham) && ! isset($mangBoSuuTap)}
		<h2 align="center">Giỏ hàng rỗng</h2>
	{/if}

  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        $smarty->assign()
      </div>

      <form class="w3-container" action="form.asp">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" id="ten_dang_nhap" name="ten_dang_nhap"  required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" id="mat_khau" name="mat_khau" required>
           <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Đăng nhập</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
{/block}