# Xây dựng website quản lý đơn hàng cho doanh nghiệp
# https: https://github.com/lmthang01/OrderManagement.git

# Video1: phân chia folder, tạo Controller, tạo routes
- Phân chia folder
- resources/views/backend/home, category, product
                  frontend/home, category, product
- Tạo Controller
- Frontend/HomeController, ..., bằng lệnh: php artisan make:controller Frontend/HomeController 
- Backend/HomeController, ...
- Tạo routes: 

# Video2: Ghép layout admin
- link: https://getbootstrap.com/docs/4.0/examples/dashboard/
- Tạo thư mục theme_admin trong public
- Tạo file css, js
- Tạo file nav.php trong config

# Video3: Ghép layout Danh mục (List khách hàng)
- Tạo view create, update, form
- Tạo route ...

# Video4: Xử lý kết nối, migrate csdl
- Cấu hình: DB_DATABASE=ordet_management
- make:migration: php artisan make:migration create_categories_table
- Tạo các trường tương ứng create_categories_table, create_user_...

# Video5 Tạo model, thêm mới csdl
- php artisan make:model Category 
- Thêm mới => function store()

# Video6 Hiển thị dữ liệu index()
- Hiển thị => function index()

# Video7 Giao diện cập nhật edit(), cập nhật update()
- Hiển thị => function edit()
- Cập nhật dữ liệu => function update()

# Video8 Xóa danh mục delete()

# Video9 Xác thực dữ liệu danh mục
- Validate bằng Request
- Link: https://laravel.com/docs/9.x/validation#form-request-validation
- php artisan make:request CategoryRequest 

# Video10 Thông báo notifications for Laravel
- Link: https://github.com/yoeunes/toastr
- Tải package: composer require yoeunes/toastr
- Cấu hình: php artisan vendor:publish --provider="Yoeunes\Toastr\ToastrServiceProvider"

# Video11 Tạo layouts customer
- Tạo route
- Tạo views/customer
- Tạo controller
- Tạo request

# Video12 Tạo csdl customer
- Tạo table: php artisan make:migration create_custumers_table
- Tạo dữ liệu
- Tạo model

# Video13 Xử lý thêm customer
- Tạo view
- Xử lý controller
    + Thêm $categories = Category::all(); 
- Xử lý Request
    + Thêm 'name' => 'required|unique:customers,name,'.$this->id,

# Video14 Tạo liên kết customers với categories
- Ở model 
    + belongTo
- Ở controller
    + with()
- views

# Video15 Viết hàm xử lý ảnh cho Category (List khách hàng)
- Tạo folder helpers 
    -> tạo file autoload.php, upload_file.php
- Cài đặt file composer.json
    -> "files": [
            "app/Helpers/autoload.php"
        ]
- Chạy lệnh: composer dump-autoload 
- Tạo function upload_image()

# Video16 Hiển thị avatar ho Category (List khách hàng)
- Tạo hàm pare_url_file()
- Tùy chỉnh trong index.blade.php
- Tùy chỉnh trong form.blade.php
- ** Ở customer cũng tương tự

# Video17 Dựng template quản lý user và user type
- Tạo route user
- Tạo controller user, user type
- Tạo views user, 4  file
- Tạo model user
- config nav
- Tạo csdl user_type (có user_has_type) -> Tạo 2 table
    -> php artisan make:migration create_user_type_table 
- Thêm dữ liệu USER | ADMIN | SYSTEM bằng tay trong table user_types
- Tạo thêm model user_types, user_has_types

# Video18 Xử lý lưu user *(Chưa quay video)
- Tạo request
- Đặt password mặt định, status = 1
- Kiểm tra type của user
- Tạo function insertOrUpdateHasType()
- Cập nhật function store
- Cập nhật delete

# Video19 Show active, user_type tương ứng tài khoản
- Chỉnh sưa views index
- Cài đặt trong model User
- Cài đặt trạng thái hoạt động
- Cài đặt user
- Hiển thị trạng thái khi cập nhật