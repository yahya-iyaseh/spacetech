<?php

namespace App;

use App\EmployeeLink;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $with = ['links'];
    public function links()
    {
        return $this->hasMany(EmployeeLink::class, 'user_id', 'id');
    }
}
