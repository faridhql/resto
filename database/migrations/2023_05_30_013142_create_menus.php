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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('idMenu');
            $table->string('name',50);
            $table->integer('price');
            $table->string('image', 100);
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('idMenu')->references('idMenu')->on('detail_order');      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
