{extends file="layout/masterSanPham.tpl"}
{block name='content'}




<div style="width: 30%; margin: 10px auto; border: 5px solid black; padding: 10px">
	{if isset($data['mss'])}
	<p>{$data['mss']}</p>
	{/if}
	<div class="row">
		<div class="col-md-12">
			<form method="post">
				<div class="form-group" >
					<label for="email">Tên khách hàng:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="{$data['ten_khach_hang']}">
					<span>{$dataErr['ten_khach_hang']}</span>
				</div>
				<div class="form-group">
					<label for="email" margin-right: 20px">Phái:</label>
					<label margin-right: 20px"><input type="radio" name="phai" value="1" {if $data['phai']==1}checked="checked"{/if}> Nam</label>
					<label margin-right: 20px"><input type="radio" name="phai" value="0" {if $data['phai']==0}checked="checked"{/if}> Nữ</label>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input style="border-radius: 0px;" type="email" class="form-control" id="email" name="email" value="{$data['email']}">
					<span>{$dataErr['email']}</span>
				</div>
				<div class="form-group">
					<label for="email">Địa chỉ:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="dia_chi" name="dia_chi" value="{$data['dia_chi']}">
					<span>{$dataErr['dia_chi']}</span>
				</div>
				<div class="form-group">
					<label for="email">Điện thoại:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="dien_thoai" name="dien_thoai" value="{$data['dien_thoai']}">
					<span>{$dataErr['dien_thoai']}</span>
				</div>

				<div class="form-group">
					<label for="pwd">Ghi chú:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ghi_chu" name="ghi_chu">

				</div>
				<div class="form-group">
					<label for="pwd">Tên đăng nhập:</label>
					<input style="border-radius: 0px;" type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap">
					<span>{$dataErr['ten_dang_nhap']}</span>
				</div>
				<div class="form-group">
					<label for="pwd">Mật khẩu:</label>
					<input style="border-radius: 0px;" type="password" class="form-control" id="mat_khau" name="mat_khau">
					<span>{$dataErr['mat_khau']}</span>
				</div>
				<div align="center">			  
					<button style="border-radius: 0px;" type="submit" name="dangky" class="btn btn-success" required="required">Lưu</button>

				</div>
			</form>
		</div>
	</div>		
</div>
{/block}
<!--`ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`, `ten_dang_nhap`, `mat_khau`-->