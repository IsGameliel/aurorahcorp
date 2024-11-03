<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ApplyInterest extends Command
{
    protected $signature = 'interest:apply';
    protected $description = 'Apply interest to confirmed plans for all users every 5 minutes';

    public function handle()
    {
        // Fetch all users
        $users = User::all();

        foreach ($users as $user) {
            // Call the applyInterestForUser method for each user
            \App\Models\Plan::applyInterestForUser($user->id);
        }

        $this->info('Interest applied to confirmed plans for all users successfully.');
    }
}
