<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#posted" aria-controls="posted" role="tab" data-toggle="tab" aria-expanded="true"><span>Đã đăng (1)</span></a></li>

            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="posted">
                    <form method="GET" action="" class="input-group input-group-sm">
                        <input type="number" class="form-control" name="index" value="" placeholder="Tìm STT">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </form>
                    <form method="POST" action="" >
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="table-responsive">

                            <div style="display:none;">
                                <form method="POST" action=""></form>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger" value="Delete">

                            </div>
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th width="20"><input type="checkbox" id="checkAllChapter"></th>
                                        <th width="30" class="text-center">STT</th>
                                        <th>Tên chương</th>
                                        <th>Ngày xuất bản</th>
                                        <th>Lượt đọc <span style="cursor: pointer" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nếu số màu đen là lượt đọc, còn màu tím là lượt mở khóa"><i class="fa fa-info-circle m-l-5"></i></span></th>
                                        <th width="150">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><input type="checkbox" name="chapter_ids[]" value="13799826" class="checkChaper"></td>
                                        <td class="text-center">1</td>
                                        <td><a href="#">chương 1: Vọng Khấu</a></td>
                                        <td>07/07/2021 23:52:11</td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-warning btn-outline btn-circle btn-xs m-r-5"><i class=" far fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btn-outline btn-circle btn-xs m-r-5" onclick="btnConfirm('#chapter13799826', null, 'Bạn có chắc chắn muốn xóa chương này?')"><i class="far fa-trash-alt"></i></button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn waves-effect waves-light btn-danger" onclick="btnConfirm('#deleteSelectedChapter', null, 'Bạn có chắc muốn xóa những chương được chọn?')">Xóa Đã Chọn</button>

                    </form>
                </div>
                <div role="tabpanel" class="tab-pane " id="waiting">
                    <form method="POST" action="#">

                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th width="20"><input type="checkbox"></th>
                                        <th width="30" class="text-center">STT</th>
                                        <th>Tên chương</th>
                                        <th>Ngày đăng</th>
                                        <th>Ngày xuất bản</th>
                                        <th width="150">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="7" class="text-center">Không có chương hẹn giờ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn waves-effect waves-light btn-info" onclick="publishedChapter()">Xuất Bản</button> <button type="button" class="btn waves-effect waves-light btn-danger" onclick="deleteUnpublishedChapter()">Xóa</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>