<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->collation('utf8_unicode_ci');
            $table->text('code')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('anhdaidien')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('motabaiviet')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->text('noidungbaiviet')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('status')->collation('utf8_unicode_ci');
            $table->integer('danhmucbaiviet_id')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('baiviet');
    }
}
