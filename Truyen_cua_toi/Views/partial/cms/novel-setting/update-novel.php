<div class="row">
              <div class="col-sm-12">
                  <div class="white-box">
                      <form class="form-horizontal" id="form-edit" method="POST" action="#" >
                          <input type="hidden" value="2" name="kind">
                          <input type="hidden" value="1" name="sex">
                          <div class="form-group">
                              <label class="col-md-12">Tên truyện</label>
                              <div class="col-md-12">
                                  <input type="text" class="form-control" value="<?=$novel->name?>" name="name">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Phân loại</label>
                              <div class="col-md-12">
                                  <select class="form-control" name="sex">
                                      <option value="1">Truyện Dịch</option>
                                      <option value="2" selected="">Truyện Sáng tác</option>
                                  </select>
                                  <hr>
                                  <select class="form-control" name="sex">
                                      <option value="1" selected="">Truyện Nam</option>
                                      <option value="2">Truyện Nữ</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Tình trạng</label>
                              <div class="col-md-12">
                                  <select class="form-control" name="status">
                                      <option value="1" selected="">Đang ra</option>
                                      <option value="2">Hoàn thành</option>
                                      <option value="3">Dừng viết</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-12">Giới thiệu</label>
                              <div class="col-md-12">
                                  <textarea class="form-control" rows="5" placeholder="" name="detail"><?=$novel->detail?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-12">
                                  <p class="pull-right">
                                      <button type="button" class="btn btn-danger btn-rounded">Lưu lại</button>
                                  </p>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>