<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'payment_method',
        'plan',
        'cardHolder_name',
        'user_id',
        'status',
        'amount',
    ];

    public static function applyInterestForUser($userId)
    {
        // Fetch only confirmed plans for the specified user
        $confirmedPlans = self::where('user_id', $userId)->where('status', 'approved')->get();

        foreach ($confirmedPlans as $plan) {
            // Calculate new amount with 15% interest
            $newAmount = $plan->amount * 1.15; // 15% interest

            // Update the plan amount in the database
            $plan->update(['amount' => $newAmount]);
        }
    }

    public function withdraw($amount)
    {
        if ($this->amount >= $amount) {
            $this->amount -= $amount;
            $this->save();
            return true;
        }
        return false;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
