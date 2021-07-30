<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div id="wizard">
                
                <div class="wizard-content">
                    <div class="wizard-pane active" role="tabpanel">
                        
                        <form class="form-horizontal" method="POST" action="admin" >
                            <input type="hidden" name="add_chapter" value="yes">
                            <input type="hidden" name="novel_id" value="<?= $_GET['novel-id']; ?>">
                            <div class="form-group">
                                <label class="col-md-12">STT</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="STT" placeholder="1 - chỉ mang tính chất tham khảo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tên chương</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nội dung chương</label>
                                <div class="col-md-12" >
                                    <textarea class="form-control" rows="7"  placeholder="" name="content"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12" ><button type="submit" class="btn btn-danger btn-rounded pull-right" ><i class="ti-upload"></i> Thêm chương</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>