<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Project extends Model
{
    use HasFactory,HasRoles;

    protected $table ='projects';

    protected $fillable =[
        'title',
        'owner',
        'abstract',
        'department',
        'domain',
        'accademic_year',
        'pdf_version'];

    public $primaryKey ='id';

    // public function User(){
    //     return $this->belongTo(User::class);
    // }
    // public function Admin(){
    //     return $this->belongTo(Admin::class);
    // }
}


