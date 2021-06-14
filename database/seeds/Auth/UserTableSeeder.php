<?php

use App\Models\Auth\User;
use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('users');

        //Add the master administrator, user id of 1
        $users = [
            [
                'first_name' => '伊藤',
                'last_name' => '正男',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのtopdev8888と申します。',
                'created_by' => 1,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'uuid' => Str::uuid(),
            ],
            [
                'first_name' => '山縣',
                'last_name' => '綾子',
                'email' => 'executive@executive.com',
                'password' => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのtopdev8888と申します。',
                'created_by' => 1,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'uuid' => Str::uuid(),
            ],
            [
                'first_name' => '森本',
                'last_name' => '志穂',
                'email' => 'user@user.com',
                'password' => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => true,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのtopdev8888と申します。',
                'created_by' => 1,
                'updated_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'uuid' => Str::uuid(),
            ],
        ];

        DB::table('users')->insert($users);

        $this->enableForeignKeys();
    }
}
