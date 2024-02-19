<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('surname');
            $table->string('phone');
            $table->unsignedBigInteger('role_id')->default('0');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('age')->default('0');
            $table->integer('weight')->default('0');
            $table->integer('height')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('role_id');
            $table->dropColumn('age');
            $table->dropColumn('weight');
            $table->dropColumn('height');
        });
    }
}
