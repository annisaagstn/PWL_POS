<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //Mendefinisikan nama tabel
    protected $primaryKey = 'user_id'; //Mendefinisikan primary key
}
