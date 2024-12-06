<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'class_id',
        'nis',
        'jenis_kelamin',
        'nisn',
        'no_telepon',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
    ];

    /**
     * Get the user associated with the student.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the class associated with the student.
     */
    public function class_room(): BelongsTo
    {
        return $this->belongsTo(class_room::class, 'class_id', 'id');
    }
}
