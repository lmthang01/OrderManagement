<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');                     // Tên giao dịch
            $table->string('description')->nullable();  // Mô tả
            $table->string('assessment')->nullable();   // Đánh giá
            $table->integer('user_id')->nullable();      // Người phụ trách (tài khoản đang đăng nhập)
            $table->integer('customer_id')->nullable();  // Khách hàng
            $table->string('transaction_type');     // Loại giao dịch
            $table->string('contact_id')->nullable();   // Người liên hệ
            $table->dateTime('start_day')->default(DB::raw('CURRENT_TIMESTAMP'));   // Ngày bắt đầu
            $table->dateTime('deadline_day')->nullable()->default(DB::raw('CURRENT_TIMESTAMP')); // Hạn hoàn thành
            $table->dateTime('finish_day')->default(DB::raw('CURRENT_TIMESTAMP'));  // Ngày kết thúc
            $table->integer('status')->default(1);      // Trạng thái
            $table->string('result')->nullable();      // Kết quả
            $table->integer('priority');    // Ưu tiên
            $table->string('transaction_address');    // Địa chỉ giao dịch
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_name');
    }
};
