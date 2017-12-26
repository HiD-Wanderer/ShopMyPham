{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thêm sản phẩm vào bộ sưu tập
            </header>
            <div class="panel-body">
              {if isset($err)}
                  <h3 align="center" style="color: #ff0000">{$err}</h3>
              {/if}
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Mã BST <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ma_bst" name="ma_bst" type="text" value="{$data['ma_bst']}" />
                            </div>
                        </div> 
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Mã SP <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ma_san_pham" name="ma_san_pham" type="text" value="{$data['ma_san_pham']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Số lượng <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="so_luong" name="so_luong" type="text" value="{$data['so_luong']}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Thêm" name="btnThem" />
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

{/block}