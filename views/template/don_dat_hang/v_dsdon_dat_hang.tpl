{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
	{if isset($DSDonDatHang)}
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách đơn hàng
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Số HD</th>
	                      <th>Ngày HD</th>
	                      <th>Tổng tiền</th>

	                      <th>Mã KH</th>
	                      <th>Tên KH</th>
	                      <th>Địa chỉ </th>
	                      <th>Email </th>
	                      <th>Điện thoại </th>
	                      <th>HTTT </th>
	                      <th>&nbsp; </th>
	                  </tr>
	                  </thead>
	                  <tbody>
	                  {$i=1}
	                  {foreach $DSDonDatHang as $itemDDH}
	              		<tr>
	              		    <td>{$i}</td>
	              		    <td>{$itemDDH['ma_hoa_don']}</td>
	              		    <td>{$itemDDH['ngay_dat']}</td>
	              		    <td>{number_format($itemDDH['tong_tien'])}</td>
	              		    <td>{$itemDDH['ma_khach_hang']}</td>
	              		    <td>{$itemDDH['ten_khach_hang']}</td>
	              		    <td>{$itemDDH['dia_chi']}</td>
	              		    <td>{$itemDDH['email']}</td>
	              		    <td>{$itemDDH['dien_thoai']}</td>
	              		    <td>{$itemDDH['hinh_thuc_thanh_toan']}</td>
	              		    <td>
		              		    <a href="{$path}quan-tri/don-hang/cap-nhat-don-hang/{$itemDDH['ma_hoa_don']}" class="btn-cap-nhat">Cập nhật</a>
		              		    <a href="{$path}quan-tri/don-hang/xoa-don-hang/{$itemDDH['ma_hoa_don']}" class="btn btn-warning">Xóa</a>
	              		    </td>
	              		</tr>
	              		{$i=$i+1}
	                  {/foreach}
	                  
	                  </body>
	              </table>
	          </section>
	      </div>
	    </div>
	{/if}
{/block}
<!--SELECT `ma_hoa_don`, `hoa_don`.`ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `trang_thai`,  `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`-->