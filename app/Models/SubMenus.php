<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenus extends Model
{
    protected $table='sub_menu';

    public $timestamps='true';

    protected $fillable=[
        'menu_id',
        'title',
        'content',
        'order',
    ];
}
