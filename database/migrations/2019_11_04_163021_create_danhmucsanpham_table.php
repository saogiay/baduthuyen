<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhmucsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmucsanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->collation('utf8_unicode_ci');
            $table->integer('danhmuccha_id')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('code')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('anhdaidien')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('anhbanner')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('status')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('status_page')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('danhmucsanpham');
    }
}
