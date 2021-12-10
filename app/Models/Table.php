<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @method static create(array $data)
 * @method static findOrFail($id)
 * @method static where(string $string)
 * * @method static find(mixed $input)
 */
class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        "status_id"
    ];

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}


