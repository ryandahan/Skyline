<?php

namespace App\Models;

use App\Traits\AddBranchName;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{

use AddBranchName;

    protected $table = 'sales';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'date',
                  'number',
                  'DownPayment',
                  'FullAmount',
                  'details'
              ];


    protected $dates = [];


    protected $casts = [];




}
