<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->collation('utf8_unicode_ci');
            $table->text('code')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('anhdaidien')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('giasanpham')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('motasanpham')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('noidungsanpham')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('status')->collation('utf8_unicode_ci');
            $table->integer('danhmucsanpham_id')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('title')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('description')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('headings')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('sanpham');
    }
}
