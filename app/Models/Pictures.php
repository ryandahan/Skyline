<?php

namespace App\Models;

use App\Traits\AddBranchName;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{

    use AddBranchName;

    protected $table = 'pictures';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'type',
                  'details',
                  'image',
                  'branch'
              ];


    protected $dates = [];


    protected $casts = [];




}
