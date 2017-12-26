{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
	{if isset($DSBoSuuTapAdmin)}
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách Bộ Sưu Tập
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Mã BST</th>
	                      <th>Tên BST</th>
	                      <th>Tên URL</th>

	                      <th>Nội Dung</th>
	                      
	                      <th>&nbsp; </th>
	                  </tr>
	                  </thead>
	                  <body>
	                  {$i=1}
	                  {foreach $DSBoSuuTapAdmin as $item}
	              		<tr>
	              		    <td>{$i}</td>
	              		    <td>{$item['ma_bst']}</td>
	              		    <td>{$item['ten_bst']}</td>
	              		    <td>{$item['ten_bst_url']}</td>
	              		    <td>{$item['noi_dung']}</td>
	              		    <td>
		              		    <a href="{$path}quan-tri/bst/cap-nhat-bst/{$item['ma_bst']}" class="btn btn-info">Cập nhật</a>
		              		    <a href="{$path}quan-tri/bst/xoa-bst/{$item['ma_bst']}" class="btn btn-warning">Xóa</a>
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