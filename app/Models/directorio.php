<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorio extends Model
{

    public function create(){
        return view('aaa');
    }

    use HasFactory;
}
