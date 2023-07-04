<!DOCTYPE html>
<html>
<head>
    <title>Hợp đồng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        @media print {
            @page {
                size: A4;
                margin: 0;
            }

            body {
                margin: 0.5cm 1cm;
            }
        }

        @media print {
            .page-break {
                page-break-before: always;
            }
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table, th, td {
            border: 1px solid #0166b3;
            border-collapse: collapse;
            text-align: center;
            color: #fff;
        }

        th {
            background-color: #0166b3;
        }

        .indent {
            text-indent: 1em;
        }

        .header_right_top {
            color: #0166b3;
            font-weight: 700;
            text-align: center;
            margin-top: 1cm;
        }

        .header_right_bottom {
            margin-top: 14px;
            padding-left: 22%;
        }

        .title {
            color: #0166b3;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            margin-top: 10px;
        }

        .foundation {
            font-size: 14px;
            font-weight: 500;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Trang 1 -->
    <div class="page-break">
        <!-- Header -->
        <div class="row justify-content-between">
            <div class="col-4 logo-pdf">
                <img src="../../../assets/images/icon/pdf-logo/logo-vnpt-inkythuatso-01-01-14-56-59.jpg" alt="Logo" width="150px">
            </div>
            <div class="col-5">
                <div class="header_right_top">CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM<br>Độc lập - Tự do - Hạnh phúc</div>
                <div class="header_right_bottom"><i>Hợp đồng số:.............</i><br><i>Mã khách hàng:.........</i></div>
            </div>
        </div>
        <!-- Header End -->
        <div class="container">
            <h1 class="title">HỢP ĐỒNG CUNG CẤP VÀ SỬ DỤNG DỊCH VỤ</h1>
            <div class="foundation">
                <i>- Căn cứ Bộ Luật Dân sự ngày 24 tháng 11 năm 2015;</i><br>
                <i>- Căn cứ Luật Viễn thông ngày 23 tháng 11 năm 2009;</i><br>
                <i>- Căn cứ Luật Bảo vệ quyền lợi người tiêu dùng ngày 17 tháng 11 năm 2010;</i><br>
                <i>- Căn cứ Nghị định số 25/2011/NĐ-CP ngày 06 tháng 4 năm 2011;</i><br>
                <i>- Căn cứ Nghị định số 99/2011/NĐ-CP ngày 27 tháng 10 năm 2011;</i><br>
                <i>- Nghị định số 81/2016/NĐ-CP của Chính phủ ngày 01/7/2016;</i><br>
                <i>- Nghị định số 49/2017/NĐ-CP ngày 24 tháng 4 năm 2017.</i>
            </div>
            <p class="indent" style="margin-bottom: 0;">Hợp đồng cung cấp và sử dụng dịch vụ (dưới đây gọi tắt là “Hợp đồng”) được ký kết ngày .... tháng .... năm ....... tại ..................
                <br>giữa và bởi:</p>
            <div><strong>Bên sử dụng dịch vụ (gọi tắt là “Bên A”): (Tên Khách hàng/ Tên cơ quan/ tổ chức)</strong></div>
            <div>Người đại diện: {{ $contract->id }}</div>
            <div class="row">
                <div class="col-5">Chức vụ: {{ $contract->start_day }}</div>
                <div class="col-3">Ngày sinh: ..... / ..... /.........</div>
                <div class="col-4">Nam/Nữ: ........</div>
            </div>
            <div class="row">
                <div class="col-5">Số CCCD/CMND/Hộ chiếu/.............</div>
                <div class="col-3">Ngày cấp: ...... / ...... /........</div>
                <div class="col-4">Nơi cấp: .........................</div>
            </div>
            <div class="row">
                <div class="col-5">Số Giấy chứng nhận ĐKDN/QĐTL/GPTL: .................</div>
                <div class="col-3">Ngày cấp: ...... / ...... /........</div>
                <div class="col-4">Nơi cấp: .........................</div>
            </div>
            <div>Địa chỉ thường trú: ........................................................................................................................</div>
            <div>Địa chỉ thanh toán: ........................................................................................................................</div>
            <div>Địa chỉ trụ sở giao dịch: ........................................................................................................................</div>
            <div>Người ký: {{ $contract->user->name }}</div>
            <div class="row">
                <div class="col-5">Tài khoản số: .................</div>
                <div class="col-3">Tại ngân hàng: ..................</div>
                <div class="col-4">MST/Mã NNS: .........................</div>
            </div>
            <div class="row">
                <div class="col-5">Điện thoại: .................</div>
                <div class="col-3">E-mail: ..................</div>
                <div class="col-4">Thông tin liên hệ khác: .........................</div>
            </div>

            <div style="margin-top: 20px;"><strong>Bên cung cấp dịch vụ (gọi tắt là “Bên B”): Trung tâm kinh doanh VNPT Tỉnh/TP - Chi nhánh Tổng Công ty Dịch vụ Viễn thông</strong></div>
            <div class="row">
                <div class="col-5">Đại diện bên B: {{ $contract->id }}</div>
                <div class="col-7">Chức vụ: {{ $contract->id }}</div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">(Theo giấy ủy quyền số ..............................................)</div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-5">Tài khoản số: .................</div>
                <div class="col-3">Tại ngân hàng: ..................</div>
                <div class="col-4">Mã số thuế: .........................</div>
            </div>
            <div class="row">
                <div class="col-5">GPKD số: .......................................... </div>
                <div class="col-3">Ngày cấp ..... / ..... /....... </div>
                <div class="col-4">Nơi cấp ......................................................</div>
            </div>
            <div>Địa chỉ: ..........................................................................................................</div>
            <div class="row">
                <div class="col-5">Điện thoại: .................</div>
                <div class="col-7">Website: ..................</div>
            </div>
            <p>Hotline chăm sóc khách hàng: 800126 (dịch vụ cố định/ internet/ truyền hình), 9191 (dịch vụ di động)</p>
            <span style="font-weight: 600; color: #0166b3;">Điều 1: Bên B cung cấp cho Bên A dịch vụ:</span>
            <table style="width:100%; margin: 10px 0;">
                <tr>
                <th>STT</th>
                <th>Tên Hàng Hóa</th>
                <th>Đơn Giá Xuất</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Thông Tin Khác</th>
                </tr>
                <tr>
                <td>1</td>
                <td>Smith</td>
                <td>1000000</td>
                <td>2</td>
                <td>2000000</td>
                <td></td>
                </tr>
                <tr>
                <td>2</td>
                <td>Jackson</td>
                <td>2000000</td>
                <td>1</td>
                <td>2000000</td>
                <td></td>
                </tr>
                <tr>
                <td>3</td>
                <td>Doe</td>
                <td>3000000</td>
                <td>3</td>
                <td>9000000</td>
                <td></td>
                </tr>
            </table>
            <span style="font-weight: 600; color: #0166b3;">Điều 2: Hình thức thanh toán, nhận thông báo cước, thông tin chăm sóc khách hàng:</span>
            <p>Các bên thống nhất các hình thức nhận thông báo cước, thông tin khuyến mại/chăm sóc khách hàng, hình thức thanh toán Bên A đăng ký như sau:</p>
            <div class="row">
                <div class="col-5">
                    <strong>Hình thức thanh toán của bên A</strong><br>
                    <span>1. Qua ngân hàng/TMĐT</span><br>
                    <span>2. Tại các điểm giao dịch của Bên B </span><br>
                    <span>3. Tại địa chỉ thanh toán</span><br>
                    <span>4. Khác ...........................</span><br>
                </div>
                <div class="col-1">
                    <br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                </div>
                <div class="col-5">
                    <strong>Hình thức nhận thông báo cước</strong><br>
                    <span>1. Qua cổng thông tin điện tử</span><br>
                    <span>2. Qua thư điện tử (email)</span><br>
                    <span>3. Qua tin nhắn (số điện thoại)</span><br>
                    <span>4. Bản in</span><br>
                </div>
                <div class="col-1">
                    <br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                    <input type="checkbox"><br>
                </div>
            </div>
            <div style="margin-top: 10px;"><strong>Nhận thông tin khuyến mại/ quảng cáo, chăm sóc khách hàng:</strong>| Đồng ý <input type="checkbox">   |   Từ chối <input type="checkbox"> |</div>
        </div>
    </div>
    <div class="page-break">

    </div>
</body>
</html>
