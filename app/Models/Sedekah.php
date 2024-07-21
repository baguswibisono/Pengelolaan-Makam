<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedekah extends Model
{
    use HasFactory;

    protected $table = 'sedekah';
    protected $primaryKey = 'id_sedekah';
    protected $keyType = 'string';
        protected $fillable = [

        'id_sedekah',
        'nama',
        'tanggal',
        'bukti_transfer',
        'status',

    ];

    public static function generateId()
    {
        $count = self::count() + 1;
        return 'SDK' . str_pad($count, 5, '0', STR_PAD_LEFT);
    }
}
