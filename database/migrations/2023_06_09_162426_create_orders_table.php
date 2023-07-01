<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_order')->nullable();
            $table->integer('customer_id')->default(0);
            $table->integer('deliver_id')->default(0);
            $table->integer('contact_name')->nullable(); // Địa chỉ văn phòng
            $table->integer('contact_phone')->nullable(); // Địa chỉ văn phòng
            $table->string('guarantee')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('payments')->nullable();
            $table->date('delivery_time')->nullable();
            $table->date('order_date')->nullable();
            $table->string('note')->nullable();
            $table->integer('status')->default(1);
            $table->integer('user_id')->default(0); // Thuộc user nào tạo

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
