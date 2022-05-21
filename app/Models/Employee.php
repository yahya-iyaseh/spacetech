<?php

namespace App\Models;

use App\Models\EmployeeLink;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $with = ['links'];
    public function links()
    {
        return $this->hasMany(EmployeeLink::class);
    }
}
