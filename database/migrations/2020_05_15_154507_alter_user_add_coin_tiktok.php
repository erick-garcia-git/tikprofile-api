<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserAddCoinTiktok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->integer('coin')->default(0);
            $table->string('user_id');
            $table->string('sec_user_id');
            $table->string('avatar_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('coin');
            $table->dropColumn('user_id');
            $table->dropColumn('sec_user_id');
            $table->dropColumn('avatar_url');
        });
    }
}
