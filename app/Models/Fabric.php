<?php

namespace App\Models;

use App\Traits\AddBranchName;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{

    use AddBranchName;

    protected $table = 'fabrics';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'type',
                  'category',
                  'SerialNumber',
                  'Amount',
                  'details',
                  'image',
                    'catalog_id'
              ];


    protected $dates = [];


    protected $casts = [];


    public function catalog(){

        return $this->hasOne(Catalog::class , 'id','catalog_id');
    }




}
