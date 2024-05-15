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
        Schema::create('phim', function (Blueprint $table) {
            $table->id();
            $table->string('tenphim');
            $table->string('theloai');
            $table->string('daodien');
            $table->string('dienvienchinh');
            $table->dateTime('ngayphathanh');
            $table->integer('thoiluong');
            $table->longText('mota');
            $table->string('hinhanh');
            $table->string('video');
            $table->string('trangthai');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phim');
    }
};
