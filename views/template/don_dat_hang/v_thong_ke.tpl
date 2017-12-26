{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thống kê doanh thu
            </header>
            <div class="panel-body">
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Từ ngày<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="ngaydi" name="ngaydi" type="date" value="{$ngaydi}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Đến ngày<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="ngayden" name="ngayden" type="date" value="{$ngayden}"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Xác nhận" name="btnxacnhan" />
                                
                            </div>
                        </div>
                        {if isset($DSDonDatHang)}
        <div class="row">
          <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                      Thông kê đơn hàng trong ngày
                  </header>
                  <table class="table table-striped">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>Mã hóa đơn</th>
                          <th>Mã KH</th>
                          <th>Ngày đặt</th>

                          <th>Tổng tiền</th>
                          <th>Còn lại</th>
                          <th>HTTT </th>
                          <th>Ghi chú</th>
                      </tr>
                      </thead>
                      <tbody>
                      {$i=1}
                      {foreach $DSDonDatHang as $itemDDH}
                        <tr>
                            <td>{$i}</td>
                            <td>{$itemDDH['ma_hoa_don']}</td>
                            <td>{$itemDDH['ma_khach_hang']}</td>
                            <td>{$itemDDH['ngay_dat']}</td>
                            <td>{number_format($itemDDH['tong_tien'])}</td>
                            <td>{$itemDDH['con_lai']}</td>
                            <td>{$itemDDH['hinh_thuc_thanh_toan']}</td>
                            <td>{$itemDDH['ghi_chu']}</td>
                        </tr>
                        {$i=$i+1}
                      {/foreach}
                      
                      </body>
                  </table>
              </section>
          </div>
        </div>
    {/if}
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


{/block}