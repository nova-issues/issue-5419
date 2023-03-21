<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            [
                'name' => 'March 2022',
                'email' => 'march-2022@example.com',
                'password' => Hash::make(Str::random()),
                'created_at' => '2022-03-31 22:00:00',
            ],
            [
                'name' => 'March 2023',
                'email' => 'march-2023@example.com',
                'password' => Hash::make(Str::random()),
                'created_at' => '2023-03-21 07:27:19',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
