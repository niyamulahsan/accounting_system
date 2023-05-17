<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['account_id', 'amount', 'type', 'date'];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
