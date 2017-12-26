{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading"> Danh sách sản phẩm </header>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>URL </th>
            <th>Đơn giá </th>
            <th>Giá KM </th>
            <th>Ngày cập nhật </th>
            <th>Trong ngày </th>
            <th>&nbsp; </th>
          </tr>
        </thead>
        <tbody>
        
        {$i=1}
        {foreach $DSSanPham as $itemSanPham}
        <tr>
          <td>{$i}</td>
          <td>{$itemSanPham['ma_san_pham']}</td>
          <td>{$itemSanPham['ten_san_pham']}</td>
          <td>{$itemSanPham['ten_san_pham_url']}</td>
          <td>{number_format($itemSanPham['don_gia'])}</td>
          <td>{number_format($itemSanPham['don_gia_khuyen_mai'])}</td>
          <td>{$itemSanPham['ngay_cap_nhat']}</td>
      
          <td><a href="{$path}quan-tri/san-pham/cap-nhat-san-pham/{$itemSanPham['ma_san_pham']}" class="btn btn-info">Cập nhật</a> <a href="{$path}quan-tri/san-pham/xoa-san-pham/{$itemSanPham['ma_san_pham']}" class="btn btn-warning">Xóa</a></td>
        </tr>
        {$i=$i+1}
        {/foreach}
        <tr>
          <td colspan="9" align="center">{$LinkPage}</td>
        </tr>
          </tbody>
        
      </table>
    </section>
  </div>
</div>
{/block} 