<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Budget extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'amount'];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'budget_id');
    }
}
