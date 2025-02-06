<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGioithieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gioithieu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('noidunggioithieu')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('anhbanner')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('gioithieu');
    }
}
