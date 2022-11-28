<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorys', function (Blueprint $table) {
            $table->id();
                $table->string('sales_product_id')->unique();
                $table->enum('delivery_frequency', array('weekely', 'monthly', 'quaterly'));
                $table->string('user_id')->unique();
                $table->timestamp('expected_delivery_date', $precision = 0);
                $table->timestamp('order_delivery_date', $precision = 0)->nullable();
                $table->string('status');
                $table->string('viewed');
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
        //
    }
};
