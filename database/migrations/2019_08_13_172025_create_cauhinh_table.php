<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauhinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhinh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tendoanhnghiep')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('diachi')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('hotline1')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('hotline2')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('email')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('logo')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('favicon')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('fanpage')->nullable($value = true)->collation('utf8_unicode_ci');
             $table->text('map')->nullable($value = true)->collation('utf8_unicode_ci');
              $table->text('about')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('cauhinh');
    }
}
