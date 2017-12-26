{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Cập Nhật đơn đặt hàng
            </header>
            <div class="panel-body">
              {if isset($err)}
                  <h3 align="center" style="color: #ff0000">{$err}</h3>
              {/if}
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Ngày lập hóa đơn <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ngay_dat" name="ngay_dat" type="text" value="{$data['ngay_dat']}" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Tổng tiền <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="tong_tien" name="tong_tien" type="text" value="{$data['tong_tien']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Mã KH <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ma_khach_hang" name="ma_khach_hang" type="text" value="{$data['ma_khach_hang']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">HTTT <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="hinh_thuc_thanh_toan" name="hinh_thuc_thanh_toan" type="text" value="{$data['hinh_thuc_thanh_toan']}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Cập nhật" name="btnCapNhat" />
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

{/block}