<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('mongo_id', 100);
            $table->string('title', 300);
            $table->string('img_src', 300);
            $table->string('news_url', 300);
            $table->string('short_desc', 100);
            $table->longText('long_desc');
            $table->dateTime('date_time');
            $table->integer('news_portal_id');
            $table->integer('category_id');
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
