<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{



    protected $table = 'inquiries';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'email',
                  'phone',
                  'is_read',
                  'height',
                  'fabricType',
                  'backPiece',
                  'corners',
                  'pillowLook',
                  'pillowTop',
                  'armRest',
                  'halfCircleFront',
                  'designColor',
                  'woodColor',
                  'typeOfFurniture',
                  'note',
                  'image',
                  'win_height',
                  'win_width',
                  'certain_style',
                  'main_fabric',
                  'inner_fabric' ,
                  'table_style' ,
                  'table_category' ,
                  'table_size' ,
                  'table_color' ,
                  'table_decoration' ,
                  'table_count' ,
                  'table_design' ,
                  'width' ,
                  'length' ,
                  'rug_style' ,
                  'size' ,
                  'ends' ,
                  'decoration' ,
                  'height_wood' ,
                  'legs' ,
                  'button_type' ,
    ];


    protected $dates = [];


    protected $casts = [];




}
