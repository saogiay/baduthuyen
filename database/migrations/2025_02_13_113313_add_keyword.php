<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danhmucsanpham', function (Blueprint $table) {
            $table->string('keyword')->nullable();
        });

        Schema::table('danhmucbaiviet', function (Blueprint $table) {
            $table->string('keyword')->nullable();
        });

        Schema::table('sanpham', function (Blueprint $table) {
            $table->string('keyword')->nullable();
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->string('keyword')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danhmucsanpham', function (Blueprint $table) {
            $table->dropColumn('keyword');
        });

        Schema::table('danhmucbaiviet', function (Blueprint $table) {
            $table->dropColumn('keyword');
        });

        Schema::table('sanpham', function (Blueprint $table) {
            $table->dropColumn('keyword');
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->dropColumn('keyword');
        });
    }
}
