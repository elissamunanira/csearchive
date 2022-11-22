<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class admin extends Model
{
    use HasFactory,HasRoles;


    protected $table = 'admins';

    public $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'email',
        'lastname',
        'phone',
        'gender',
        'department',
        'password',
    ];
        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

//     public function Project(){
//         return $this->hasMany(Project::class);
//     }
//     public function Lecturer(){
//         return $this->hasMany(Lecturer::class);
// }
}
