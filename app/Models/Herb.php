<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicament;

class Herb extends Model
{
    use HasFactory;

    public function medicaments()
    {
        return $this->belongsToMany(Medicament::class, 'herb_medicaments', 'herb_id', 'medicament_id');
    }
}
