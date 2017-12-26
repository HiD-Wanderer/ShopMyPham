{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thêm bộ sưu tập
            </header>
            <div class="panel-body">
              {if isset($err)}
                  <h3 align="center" style="color: #ff0000">{$err}</h3>
              {/if}
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Tên bộ sưu tập <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ten_bst" name="ten_bst" type="text" value="{$data['ten_bst']}" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Tên URL <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ten_bst_url" name="ten_bst_url" type="text" value="{$data['ten_bst_url']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Hình <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="hinh_bst" name="hinh_bst" type="file"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Nội dung  <span class="required">*</span></label>
                            <div class="col-lg-10"><textarea rows="5" class="ckeditor " id="noi_dung" name="noi_dung">{$data['noi_dung']}</textarea>
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