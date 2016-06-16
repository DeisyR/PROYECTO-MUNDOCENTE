<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            //$table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            //$table->string('link', 60);
            $table->integer('active')->default(1);
            $table->integer('type_person')->default(2);
            $table->rememberToken();
            $table->timestamps();

    /*                    $table->increments('id_person');

            $table->string('firstname');

            $table->string('lastname');

            $table->string('mail')->unique();

            $table->string('password', 60);

            $table->string('link', 60);

            $table->boolean('state_person')->default(0);

            $table->string('type_person', 60);

            $table->integer('id_entity')->index();

            $table->boolean('active')->default(0);

            $table->string('confirm_token', 100);
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
