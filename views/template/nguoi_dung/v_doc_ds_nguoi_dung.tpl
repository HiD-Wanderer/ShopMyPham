{extends file="../layoutAdmin/masterAdmin.tpl"}
{block name="content"}
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Mã ND</th>
                                 <th><i class="icon_calendar"></i> Họ tên</th>
                                 <th><i class="icon_mail_alt"></i> Ngày sinh</th>
                                 <th><i class="icon_pin_alt"></i> Email</th>
                                 <th><i class="icon_mobile"></i> Địa chỉ</th>
                                 <th><i class="icon_cogs"></i> Điện thoại</th>
                                 <th><i class="icon_pin_alt"></i> Chức vụ</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              {foreach $DSNguoiDung as $nd}
                              <tr>
                                 <td>{$nd['id']}</td>
                                 <td>{$nd['fullname']}</td>
                                 <td>{$nd['birthdate']}</td>
                                 <td>{$nd['email']}</td>
                                 <td>{$nd['address']}</td>
                                 <td>{$nd['mobiphone']}</td>
                                 <td>{$nd['role']}</td>                                 
                                 <td>
                                  <div class="btn-group">
                                     
                                      <a class="btn btn-success" href="{$path}quan-tri/nguoi-dung/cap-nhat-nguoi-dung/{$nd['id']}"><i class="icon_check_alt2"></i>Sửa</a>
                                      <a class="btn btn-danger" href="{$path}quan-tri/nguoi-dung/xoa-nguoi-dung/{$nd['id']}"><i class="icon_close_alt2"></i>Xóa</a>
                                  </div>
                                  </td>
                              </tr>
                              {/foreach}
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
{/block}
