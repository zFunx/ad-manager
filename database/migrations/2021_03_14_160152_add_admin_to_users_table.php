<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddAdminToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username');
            $table->foreignId('user_type_id');
        });

        DB::table('users')->insert(
            [
                'name' => env('ADMIN_NAME'),
                'email' => env('ADMIN_EMAIL'),
                'username' => env('ADMIN_USERNAME'),
                'password' => Hash::make(env('ADMIN_PASSWORD')),
                'user_type_id' => DB::table('user_types')->where('name','admin')->first()->id
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            DB::table('users')->where('username', 'admin')->delete();
            $table->dropColumn('username');
            $table->dropColumn('user_type_id');
        });
    }
}
