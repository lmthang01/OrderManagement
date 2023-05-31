<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OrderManagement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
   
    <!-- others css -->
    <link rel="stylesheet" href="../../../assets/css/typography.css">
    <link rel="stylesheet" href="../../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../../assets/css/styles.css">
    <link rel="stylesheet" href="../../../assets/css/editstyles.css">
    <link rel="stylesheet" href="../../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader area end -->
    <!-- Page container area start -->
    <div class="page-container">
        <!-- Sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <!-- Logo -->
                <div class="logo"><a id="logo" href="#" title="CRMVIET"><img class="logo-main scale-with-grid" src="https://crmviet.vn/wp-content/uploads/2020/04/logo-crmviet.png" alt="logo crmviet"></a></div>
                <!-- <div class="logo">
                    <a href="index.html"><img src="../../../assets/images/icon/logo.png" alt="logo"></a>
                </div> -->
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <!-- Khách hàng -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">
                                <i class="ti-user"></i><span>Khách hàng</span></a>
                                <ul class="collapse">
                                    <li><a href="../../CustomerManagement/Customer/customer.php">Khách hàng</a></li>
                                    <li><a href="../../CustomerManagement/Contact/personContact.php">Liên hệ với khách hàng</a></li>
                                    <li><a href="../../CustomerManagement/ListCustomer/listCustomer.php">List khách hàng</a></li>
                                </ul>
                            </li>

                            <!-- Kinh doanh -->
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true">
                                <i class="fa fa-briefcase"></i><span>Kinh doanh</span></a>
                                <ul class="collapse">
                                    <li><a href="../Transaction/transaction.php">Giao dịch với khách hàng</a></li>
                                    <li><a href="../Order/order.php">Đơn hàng</a></li>
                                    <li class="active"><a href="../Contract/contract.php">Hợp đồng bán ra</a></li>
                                </ul>
                            </li>
                            
                            <!-- Báo cáo -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Báo cáo</span></a>
                                <ul class="collapse">
                                    <li><a href="../../Report/StatisticalChart/statisticalChart.php">Biểu đồ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Sidebar menu area end -->

        <!-- Main content area start -->
        <div class="main-content">
            <!-- Header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- Nav and Search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left nav-btn-click">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- Profile info & Task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            
                            <!-- Zoom -->
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                            <!-- Notify -->
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Message -->
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../../assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Setting -->
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header area end -->

            <!-- Page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="../../CustomerManagement/Customer/customer.php">Home</a></li>
                                <li><a href="../Transaction/transaction.php">Kinh Doanh</a></li>
                                <li><a href="../Contract/contract.php">Hợp Đồng Bán Ra</a></li>
                                <li><span>Thêm Mới Hợp Đồng Bán Ra</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Profile Info -->
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../../../assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Hà Trung Nghĩa<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item profile-option" href="#">Hướng dẫn sử dụng</a>
                                <a class="dropdown-item profile-option" href="#">Thông tin cá nhân</a>
                                <a class="dropdown-item profile-option" href="#">Cài đặt Email</a>
                                <a class="dropdown-item profile-option" href="#">Hòm thư</a>
                                <a class="dropdown-item profile-option" href="#">Trợ giúp</a>
                                <a class="dropdown-item profile-option" href="#">Thoát</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title area end -->

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <div class="card card-header-main">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Thêm mới hợp đồng bán ra</h4>
                                            <div class="btn-group-head-order">
                                                <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                                                <a href="../Contract/contract.php">
                                                    <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin Khách hàng start -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin Khách hàng</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        <div class="btn-load">
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Khách Hàng</button>
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" >Chọn Liên Hệ</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã khách hàng:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên khách hàng:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ ĐKKD:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ văn phòng:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ngày sinh:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input" disabled>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Email:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại KH:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số tài khoản:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã số thuế:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Người đại diện:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Chức vụ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin Khách hàng end -->
                            <!-- Form nhập thông tin Hợp đồng start-->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin hợp đồng</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Chủ sở hữu:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn chủ sở hữu--</option>
                                                        <option value="">Hà Trung Nghĩa</option>
                                                        <option value="">Lê Minh Thắng</option>
                                                        <option value="">Huỳnh Nhật Trường</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Giá trị hợp đồng:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price unit-price-exp">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Ngày bắt đầu:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Ngày kết thúc:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Ngày hiệu lực:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Trạng thái:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn trạng thái--</option>
                                                        <option value="">Chưa thực hiện</option>
                                                        <option value="">Đã đặt cọc</option>
                                                        <option value="">Đang thực hiện</option>
                                                        <option value="">Thanh toán hoàn tất</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên hợp đồng:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Loại hợp đồng:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn loại hợp đồng--</option>
                                                        <option value="">Đơn hàng bán lẻ</option>
                                                        <option value="">Đơn hàng đặt tiệc</option>
                                                        <option value="">Thiết kế Web</option>
                                                        <option value="">Đăng ký gói dịch vụ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Hình thức thanh toán:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn hình thức thanh toán--</option>
                                                        <option value="">Trả trước</option>
                                                        <option value="">Trả sau</option>
                                                        <option value="">Trả góp</option>
                                                        <option value="">12 tháng</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Hình thức vận chuyển:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn hình thức vận chuyển--</option>
                                                        <option value="">Vietnam Post</option>
                                                        <option value="">Viettel Post</option>
                                                        <option value="">J&T</option>
                                                        <option value="">Ninja Van</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Ngày thanh toán:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Loại thanh toán:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn loại thanh toán--</option>
                                                        <option value="">Nhận tiền mặt</option>
                                                        <option value="">Nhận chuyển khoản</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">% giá trị HĐ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tiền thanh toán:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price unit-price-exp">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Doanh số tính cho:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn--</option>
                                                        <option value="">Hà Trung Nghĩa</option>
                                                        <option value="">Lê Minh Thắng</option>
                                                        <option value="">Huỳnh Nhật Trường</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin Hợp đồng end -->
                            <!-- Form nhập thông tin Hàng hóa start -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin hàng hóa</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        <div class="btn-load">
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Hàng Hóa</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã hàng hóa:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên hàng hóa:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
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
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-file-input" class="col-form-label input-label">Hình ảnh:</label>
                                                    <input class="form-control" type="file" value="" id="example-file-input">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá nhập:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group-head-order">
                                            <button type="button" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin Hàng hóa end -->
                            <!-- Bảng thông tin hàng hóa start -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="head-title-addbtn">
                                            <h4 class="header-title">Hàng hóa</h4>
                                        </div>
                                        <div class="data-tables datatable-dark">
                                            <table id="dataTable3" class="text-center table-business">
                                                <thead class="text-capitalize">
                                                    <tr>
                                                        <th>Mã hàng hóa</th>
                                                        <th>Tên hàng hóa</th>
                                                        <th>Mô tả</th>
                                                        <th>Xuất xứ</th>
                                                        <th>Hãng SX</th>
                                                        <th>Bảo hành</th>
                                                        <th>Đơn vị tính</th>
                                                        <th>Giá nhập</th>
                                                        <th>Giá xuất</th>
                                                        <th>Thuế</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form thông tin khách hàng end -->
                            <!-- Thống kê tổng đơn hàng -->
                            <div class="card-body card-body-order">
                                <div class="statistics-total">
                                    <div class="total-label">
                                        <span>Tổng tiền hàng:</span><br>
                                        <span>Tiền chiết khấu:</span><br>
                                        <span>Tiền thuế:</span><br>
                                        <span>Tổng tiền:</span><br>
                                        <span>Lợi nhuận:</span>
                                    </div>
                                    <div class="total-money">
                                        <span>35.200.000</span><br>
                                        <span>11.000.000</span><br>
                                        <span>11.000.000</span><br>
                                        <span>11.000.000</span><br>
                                        <span>24.200.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../../../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../../../assets/js/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/owl.carousel.min.js"></script>
    <script src="../../../assets/js/metisMenu.min.js"></script>
    <script src="../../../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../../../assets/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="../../../assets/js/plugins.js"></script>
    <script src="../../../assets/js/scripts.js"></script>
</body>

</html>
