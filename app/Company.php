<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $gruad = [];

    public function customers()
    {
        return $this->hasMany(Customer::class, 'company_id', 'id');
    }
}
