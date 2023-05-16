<?php

namespace App\Traits;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;


trait AddBranchName
{


    protected static function bootAddBranchName()
    {

//        parent::boot();
        $branchName =  session('branch') ?? "New York";

        self::creating(function ($model) use($branchName) {
            $model->branch = $branchName;
        });

        self::addGlobalScope(function (Builder $builder) use($branchName) {
            $builder->where('branch',$branchName);
        });


    }
}
