<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtinlienheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinlienhe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoten', 45)->nullable($value = true)->collation('utf8_unicode_ci');
            $table->string('dienthoai', 45)->nullable($value = true)->collation('utf8_unicode_ci');
            $table->string('noidung', 300)->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('thongtinlienhe');
    }
}
