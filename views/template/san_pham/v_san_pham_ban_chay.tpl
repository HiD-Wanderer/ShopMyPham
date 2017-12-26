{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
	{if isset($DSSanPhamBanChay)}
		<div class="row">
	      <div class="col-lg-12">
	      		<section class="panel">
	              <header class="panel-heading">
	                  Danh sách sản phẩm
	              </header>
	              <table class="table table-striped">
	                  <thead>
	                  <tr>
	                      <th>#</th>
	                      <th>Mã </th>
	                      <th>Tên</th>
	                      <th>TSL</th>

	                      <th>ND tóm tắt</th>
	                      <th>ĐG </th>
	                      <th>ĐGKM </th>
	                  </tr>
	                  </thead>
	                  <body>
	                  {$i=1}
	                  {foreach $DSSanPhamBanChay as $item}
	              		<tr>
	              		    <td>{$i}</td>
	              		    <td>{$item['ma_san_pham']}</td>
	              		    <td>{$item['ten_san_pham']}</td>
	              		    <td>{number_format($item['TSL'])}</td>
	              		    <td>{$item['noi_dung_tom_tat']}</td>
	              		    <td>{$item['don_gia']}</td>
	              		    <td>{$item['don_gia_khuyen_mai']}</td>
	              		   
	              		   
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
