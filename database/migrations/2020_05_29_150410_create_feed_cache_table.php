<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedCacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_cache', function (Blueprint $table) {
            $table->string('user_id')->primary();
            $table->integer('user_cursor')->default(0);
            $table->integer('user_last_index')->default(0);
            $table->integer('media_cursor')->default(0);
            $table->integer('media_last_index')->default(0);
            $table->integer('day_coins')->default(0);
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
        Schema::dropIfExists('feed_cache');
    }
}
