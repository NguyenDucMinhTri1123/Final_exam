  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 col-xs-12">
              <div class="white-box">
                  <ul class="nav nav-tabs tabs customtab">
                      <li class="tab active" >
                          <a href="#profile" data-toggle="tab">Hồ sơ</a>
                      </li>
                      <li class="tab " >
                          <a href="#novel" data-toggle="tab">Tác Phẩm</a>
                      </li>
                      <li class="tab " >
                          <a href="#password" data-toggle="tab">Quản Lý Mật Khẩu</a>
                      </li>

                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane active" id="profile">


                          <form class="form-horizontal form-material" method="post" action="https://pub.truyen.onl/account/users/update-info">
                              <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
                              <div class="form-group">
                                  <label class="col-md-12">Tên hiển thị</label>
                                  <div class="col-md-12">
                                      <input type="text" name="name" value="M1nhtr199" placeholder="Không được dùng ký tự đặc biệt và chỉ được đổi một lần duy nhất" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Năm sinh</label>
                                  <div class="col-md-12">
                                      <input type="text" name="birthday" placeholder="yyyy" value="1999" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-12">Giới tính</label>
                                  <div class="col-sm-12">
                                      <select name="sex" class="form-control form-control-line">
                                          <option value="0" selected="">Bí mật</option>
                                          <option value="1" selected="">Nam</option>
                                          <option value="2">Nữ</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Giới thiệu ngắn</label>
                                  <div class="col-md-12">
                                      <textarea rows="5" id="description" name="description" placeholder="Không quá 200 ký tự" class="form-control form-control-line">Cuộc đời là những niềm đau ._. chỉ có thế giới của truyện mới có thể làm nguôi ngoai con tim mệt mỏi này.</textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Email</label>
                                  <div class="col-md-12" id="form-email" data-email="nguyenducminhtri1123@gmail.com">
                                      <span>nguyenducminhtri1123@gmail.com</span> <a class="m-l-5" href="javascript:" id="edit-email"><strong>Edit</strong></a>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <button class="btn btn-info">Cập nhật</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="tab-pane " id="novel">
                          <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                              <div class="dataTables_length" id="myTable_length">
                                  <label>Show
                                      <select name="myTable_length" aria-controls="myTable" class="">
                                          <option value="10">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                      </select> entries
                                  </label>
                              </div>
                              <div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div>
                              <table id="myTable" class="table table-striped dataTable no-footer" data-order="[[ 3, &quot;desc&quot; ]]" role="grid" aria-describedby="myTable_info">
                                  <thead>
                                      <tr role="row">
                                          <th data-class-name="book_name" class="book_name sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 148px;">Name</th>
                                          <th data-class-name="status_book" class="status_book sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 192px;">Status</th>
                                          <th data-class-name="la" class="la sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Latest: activate to sort column ascending" style="width: 129px;">Latest</th>
                                          <th data-class-name="new_chap_at" class="new_chap_at sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Latest At: activate to sort column ascending" style="width: 125px;">Latest At</th>
                                          <th class="sorting_desc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 174px;" aria-sort="descending">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr role="row" class="odd">
                                          <td class=" book_name">
                                              <a href="#" target="_blank">Bầu Trời Đảo Ngược</a>
                                          </td>
                                          <td class=" status_book">
                                              Chờ xuất bản, Đang ra
                                              <span style="cursor: pointer" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Truyện đăng trên 10 chương sẽ được BTV kiểm tra và xuất bản"><i class="fa fa-info-circle m-l-5"></i></span>
                                          </td>
                                          <td class=" la">Không có chương</td>
                                          <td class="new_chap_at">23:41 04-07-2021</td>
                                          <td class="sorting_1">
                                              
                                              <a href="admin?direct=novel-setting&amp;action=delete" type="button" class="btn btn-danger btn-outline btn-circle btn-md m-r-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Xóa">
                                                  <i class="far fa-trash-alt"></i>
                                              </a>

                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">
                                  Showing 1 to 1 of 1 entries
                              </div>
                              <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                  <a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a>
                                  <span>
                                      <a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a>
                                  </span>
                                  <a class="paginate_button next disabled" aria-controls="myTable" data-dt-idx="2" tabindex="0" id="myTable_next">Next</a>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane " id="password">
                          <form class="form-horizontal" method="post" action="https://pub.truyen.onl/account/users/change-password">
                              <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
                              
                              <div class="form-group">
                                  <label class="col-md-12">Mật khẩu mới</label>
                                  <div class="col-md-12">
                                      <input type="password" placeholder="Nhập mật khẩu mới" name="new_password" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Nhập lại mật khẩu mới</label>
                                  <div class="col-md-12">
                                      <input type="password" placeholder="Nhập lại mật khẩu mới" name="new_password_confirmation" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-12">
                                      <button type="submit" class="btn btn-info">Cập nhật</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>