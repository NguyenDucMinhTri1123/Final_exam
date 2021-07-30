<div class="col-sm-12">
    <div class="white-box">
        <div class="table-responsive">
            <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                <div class="dataTables_length" id="myTable_length">
                    <label>
                        Reader Table
                    </label>
                </div>
                <div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label></div>
                <table id="myTable" class="table table-striped dataTable no-footer" data-order="[[ 3, &quot;desc&quot; ]]" role="grid" aria-describedby="myTable_info">
                    <thead>
                        <tr role="row">
                            <th class="book_name sorting" rowspan="1" colspan="1" style="width: 148px;">Name</th>
                            <th class="status_book sorting" rowspan="1" colspan="1" style="width: 192px;">Email</th>
                            <th class="la sorting" rowspan="1" colspan="1" style="width: 129px;">Age</th>
                            <th class="new_chap_at sorting" rowspan="1" colspan="1" style="width: 125px;">Gender</th>
                            <th class="sorting_desc" rowspan="1" colspan="1" style="width: 174px;" aria-sort="descending">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr role="row" class="odd">
                            <td>
                                Nguyễn Đức Minh Trí
                            </td>
                            <td>
                                m1nhtr199@gmail.com

                            </td>
                            <td class=" la">23</td>
                            <td class="new_chap_at">Male</td>
                            <td class="sorting_1">

                                <a href="admin?direct=reader-manage&action=update" type="button" class="btn btn-warning btn-outline btn-circle btn-md m-r-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Sửa thông tin">
                                    <i class="far fa-edit"></i>
                                </a>

                                <a href="admin?direct=reader-manage&action=delete" type="button" class="btn btn-danger btn-outline btn-circle btn-md m-r-5" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cài đặt">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate"><a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="myTable" data-dt-idx="2" tabindex="0" id="myTable_next">Next</a></div>
            </div>
        </div>
    </div>
</div>