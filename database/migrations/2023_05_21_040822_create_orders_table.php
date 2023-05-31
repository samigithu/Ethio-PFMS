<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->decimal('total_cost', 12, 2);
            $table->string('cust_email');
            $table->string('user_id');
            $table->string('handled_by');
            $table->string('order_placed'); // determine if ordered online or on-site
            $table->string('receipt_photo_path',2048);// recit
            $table->string('status')->default('In progress');
            $table->string('remarks')->nullable();
            $table->date('trans_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
