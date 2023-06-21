<form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Tên hàng hóa:</label>
                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Đơn vị:</label>
                <select class="custom-select custom-select-height">
                    <option selected="selected">--Chọn đơn vị--</option>
                    <option value="">Gam</option>
                    <option value="">Mét</option>
                    <option value="">Chiếc</option>
                    <option value="">Bộ</option>
                    <option value="">Gói</option>
                    <option value="">Hộp</option>
                    <option value="">Thùng</option>
                    <option value="">Lít</option>
                </select>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Hãng SX:</label>
                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="example-file-input" class="col-form-label input-label">Hình ảnh:</label>
                <input class="form-control custom-select-height" type="file" value="" id="example-file-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Đơn giá nhập:</label>
                <div class="textbox-unitprice">
                    <input class="form-control custom-select-height" type="text" value="" id="example-text-input" style="border-radius: 3px 0 0 3px !important;">
                    <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">0</span>
                </div>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                <div class="textbox-unitprice">
                    <input class="form-control custom-select-height" type="text" value="" id="example-text-input" style="border-radius: 3px 0 0 3px !important;">
                    <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">%</span>
                </div>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                <div class="textbox-unitprice">
                    <input class="form-control custom-select-height" type="text" value="" id="example-text-input" style="border-radius: 3px 0 0 3px !important;">
                    <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">0</span>
                </div>
            </div>
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                <div class="textbox-unitprice">
                    <input class="form-control custom-select-height" type="text" value="" id="example-text-input" style="border-radius: 3px 0 0 3px !important;">
                    <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">%</span>
                </div>
            </div>
            <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
            <div class="form-group">
                <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                <div class="textbox-unitprice">
                    <input class="form-control custom-select-height" type="text" value="" id="example-text-input" style="border-radius: 3px 0 0 3px !important;">
                    <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">0</span>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-group-head-order mt-3">
        <button type="button" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
    </div>
</form>
