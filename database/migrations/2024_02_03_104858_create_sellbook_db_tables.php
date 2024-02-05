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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique();
            $table->string('email', '50')->unique();
            $table->string('password', 100);
            $table->string('firstname', 50)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->string('profile_image', 50)->nullable();
            $table->string('contact_number', 11)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('status', 50)->default('active');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('customer_details_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('gender', 20)->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('customer_stripe_id')->nullable();
            $table->timestamps();
        });

        Schema::create('vendor_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('vendor_details_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->timestamps();
        });

        Schema::create('admin_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('admin_details_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id')->index('products_vendor_id_foreign');
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name');
            $table->json('images');
            $table->double('price', 10, 2);
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->index('products_category_id_foreign');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('item_condition', 50);
            $table->string('status', 50)->default('active');
            $table->boolean('is_admin_approved');
            $table->string('stripe_product_id');
            $table->timestamps();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index('carts_product_id_foreign');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('customer_id')->index('carts_customer_id_foreign');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code', 10);
            $table->unsignedBigInteger('product_id')->index('orders_product_id_foreign');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('customer_id')->index('carts_customer_id_foreign');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->double('sub_amount', 10, 2);
            $table->double('shipping_amount', 10, 2);
            $table->double('total', 10, 2);
            $table->json('shipping_details');
            $table->dateTime('order_datetime');
            $table->dateTime('payment_datetime');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('customer_details');
        Schema::dropIfExists('vendor_details');
        Schema::dropIfExists('admin_details');
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('orders');
    }
    
};
