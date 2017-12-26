{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Thêm người dùng
            </header>
            <div class="panel-body">
              {if isset($err)}
                  <h3 align="center" style="color: #ff0000">{$err}</h3>
              {/if}
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Tên User <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="username" name="username" type="text" value="{$data['username']}" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Password <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="password" name="password" type="text" value="{$data['password']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Họ Tên <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="fullname" name="fullname" type="text" value="{$data['fullname']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Ngày sinh<span class="required">*</span></label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="birthdate" name="birthdate" type="date" value="{$data['birthdate']}"/>
                            </div>
                            <label for="agree" class="control-label col-lg-2 col-sm-3">Nam </label>
                            <div class="col-lg-3 col-sm-2">
                                <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="gender" name="gender" value="1" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Địa chỉ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="address" name="address" type="text" value="{$data['address']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Email <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="email" name="email" type="text" value="{$data['email']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Số CMND <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="identitycard" name="identitycard" type="text" value="{$data['identitycard']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Số điện thoại <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="mobiphone" name="mobiphone" type="text" value="{$data['mobiphone']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Chức vụ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="role" name="role" type="text" value="{$data['role']}"/>
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