  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 col-xs-12">
              <div class="white-box">
                  <ul class="nav nav-tabs tabs customtab">
                      <li class="tab active">
                          <a href="#profile" data-toggle="tab">Hồ sơ</a>
                      </li>

                      <li class="tab ">
                          <a href="#password" data-toggle="tab">Quản Lý Mật Khẩu</a>
                      </li>

                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane active" id="profile">


                          <form class="form-horizontal form-material" method="post" action="#">

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

                      <div class="tab-pane " id="password">
                          <form class="form-horizontal" method="post" action="#">


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