<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('surname', 50)->defaulValue('')->after('name');
            $table->string('language', 10)->after('email');
            $table->boolean('active')->default(1)->after('language');
            $table->boolean('verified')->default(0)->after('active');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('surname');
            $table->dropColumn('language');
            $table->dropColumn('active');
            $table->dropColumn('verified');
        });
    }
}
