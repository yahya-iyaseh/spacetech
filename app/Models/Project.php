<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Category;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Resizable;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
