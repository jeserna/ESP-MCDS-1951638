<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->date('birthdate')->after('password');
            $table->string('gender')->after('birthdate');
            $table->string('photo')->after('gender')->default('img/nophoto.png');
            $table->string('role')->after('photo')->default('editor');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn(['birthdate','gender', 'photo', 'role']);
        });
    }
}
