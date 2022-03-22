<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

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
