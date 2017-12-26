{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
	{if isset($DSDonDHChiTiet)}
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách chi tiết đơn hàng
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Số HD</th>
	                      <th>Mã SP</th>
	                      <th>Tên Sản Phẩm</th>
	                      <th>Số lượng</th>
	                      <th>Đơn giá</th>
	                  </tr>
	                  </thead>
	                  <body>
	                  {$i=1}
	                  {foreach $DSDonDHChiTiet as $item}
	              		<tr>
	              		    <td>{$i}</td>
	              		    <td>{$item['ma_hoa_don']}</td>
	              		    <td>{$item['ma_san_pham']}</td>
	              		    <td>{$item['ten_san_pham']}</td>
	              		    <td>{number_format($item['so_luong'])}</td>
	              		    <td>{number_format($item['don_gia'])}</td>
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
