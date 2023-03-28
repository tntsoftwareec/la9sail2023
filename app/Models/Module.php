<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Exception;
use Log;
use App\Helpers\TntHelper;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        "name","name_db","label","view_col","model","controller","is_gen","icon"
    ]
    protected $hidden = [];
    
    
}
