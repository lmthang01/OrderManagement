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