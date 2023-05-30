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
        Schema::create('order', function (Blueprint $table) {
            $table->id('idOrder');
            $table->foreignId('idCustomer');
            $table->integer('payment');
            $table->integer('subtotal');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idCustomer')->references('idCustomer')->on('customer');
            // $table->foreign('idOrder')->references('idOrder')->on('detail_order');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
