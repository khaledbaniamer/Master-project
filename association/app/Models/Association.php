<?php

namespace App\Models;
use App\Models\Manager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    
    public function manager()
    {
        return $this->hasOne(Manager::class);
    }
}
