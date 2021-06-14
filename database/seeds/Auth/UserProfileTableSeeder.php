<?php

use App\Models\Auth\User;
use Carbon\Carbon as Carbon;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class UserProfileTableSeeder.
 */
class UserProfileTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('profile');

        $user1 = User::first()->id;
        $user2 = User::find(2)->id;
        $user3 = User::find(3)->id;
        $profile = [
            [
                'user_id' => $user1,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのttt888と申します。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => 1,
                'updated_by' => null,
            ],
            [
                'user_id' => $user2,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのttt888と申します。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => 1,
                'updated_by' => null,
            ],
            [
                'user_id' => $user3,
                'profession' => '医者',
                'country' => 'Japan',
                'self_introduction' => '私クラウドワークスのttt888と申します。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => 1,
                'updated_by' => null,
            ],
        ];

        DB::table('profile')->insert($profile);

        $this->enableForeignKeys();
    }
}
