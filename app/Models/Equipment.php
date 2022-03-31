<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specs',
        'category',
        'manufacturer_id'.
        'invoice_id'
    ];
    protected $table = 'equipment';

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturers::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
