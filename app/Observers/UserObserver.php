<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $duplicate_user = DB::table('users')
        ->where('email', 'LIKE', $user->email)
        ->first();

        if(!$duplicate_user) {
            DB::table('locations')->insert([
                'name'=>'Practice location',
                'created_at'=> date('Y-m-d H:j:s'),
                'updated_at'=> date('Y-m-d H:j:s'),
                'user'=> $user->id,
                'url'=> 'https://sites-jk.s3.eu-west-2.amazonaws.com/seeder/dartboard.png',
            ]);
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
