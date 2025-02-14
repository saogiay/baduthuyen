<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->string('alt_avatar')->nullable();
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->string('alt_avatar')->nullable();
        });

        Schema::table('hinhanhsanpham', function (Blueprint $table) {
            $table->string('alt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->dropColumn('alt_avatar');
        });

        Schema::table('baiviet', function (Blueprint $table) {
            $table->dropColumn('alt_avatar');
        });

        Schema::table('hinhanhsanpham', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
    }
}
