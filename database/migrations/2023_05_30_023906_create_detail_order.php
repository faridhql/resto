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
        Schema::create('detail_order', function (Blueprint $table) {
            $table->id('idDetail');
            $table->foreignId('idOrder');
            $table->foreignId('idMenu');
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idMenu')->references('idMenu')->on('menus');
            $table->foreign('idOrder')->references('idOrder')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_order');
    }
};
