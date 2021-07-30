<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#posted" aria-controls="posted" role="tab" data-toggle="tab" aria-expanded="true"><span>Đã đăng (1)</span></a></li>
                
                <li role="presentation" class=""><a href="#deleted" aria-controls="deleted" role="tab" data-toggle="tab" aria-expanded="false"><span>Đã xóa (0)</span></a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="posted">
                    <form method="GET" action="https://pub.truyen.onl/books/108140/chapters" class="input-group input-group-sm">
                        <input type="number" class="form-control" name="index" value="" placeholder="Tìm STT">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </form>
                    <form method="POST" action="https://pub.truyen.onl/chapters/108140/multipleDestroy" id="deleteSelectedChapter">
                        <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="table-responsive">
                            <div style="display:none;">


                            </div>
                            <div style="display:none;">
                                <form method="POST" action="https://pub.truyen.onl/chapters/13799826/destroy" id="chapter13799826"></form>
                                <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
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
                                        <td><a href="https://pub.truyen.onl/chapters/13799826/edit">chương 1: Vọng Khấu</a></td>
                                        <td>07/07/2021 23:52:11</td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            <a href="https://pub.truyen.onl/chapters/13799826/edit" type="button" class="btn btn-warning btn-outline btn-circle btn-xs m-r-5"><i class=" far fa-edit"></i></a>
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
                    <form method="POST" action="https://pub.truyen.onl/books/108140/chapters/alarmAction" id="unpublishChapterForm">
                        <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
                        <div class="table-responsive">
                            <div style="display:none;">


                            </div>
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th width="20"><input type="checkbox" id="checkAllUnpublishChapter"></th>
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
                <div role="tabpanel" class="tab-pane " id="deleted">
                    <div class="alert alert-info"> <strong>Lưu ý:</strong> Những chương bị đưa vào thùng rác sẽ tự động bị xóa sau 30 ngày</div>
                    <form method="POST" action="https://pub.truyen.onl/chapters/108140/multipleRestore" id="restoreSelectedChapter">
                        <input type="hidden" name="_token" value="HgnIlyBdp8oTXlHdXWbScOWgVEYL7wML0LQnfw4q">
                        <div class="table-responsive">
                            <div style="display:none;">


                            </div>
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th width="20"><input type="checkbox" id="checkAllDeletedChapters"></th>
                                        <th width="30" class="text-center">STT</th>
                                        <th>Tên chương</th>
                                        <th>Ngày xuất bản</th>
                                        <th>Ngày xóa</th>
                                        <th width="150">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="7" class="text-center">Không có chương đã xóa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn waves-effect waves-light btn-info" onclick="btnConfirm('#restoreSelectedChapter', null, 'Bạn có chắc chắn muốn phục hồi những chương được chọn? Nếu truyện có đồng bộ với truyencv, các chương phục hồi sẽ được đăng lên truyencv sau 15p kể từ lúc bạn chọn phục hồi')">Phục Hồi</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>