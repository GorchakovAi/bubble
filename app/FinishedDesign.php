<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class FinishedDesign extends Model
{
    protected $fillable = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6','h7'];

    public function catalog()
    {
        return $this->hasMany('App\CatalogDesign','catalog_id')->select('id','catalog_id', 'title','url_img','description')->get();
    }

    public function scopeTitle()
    {
        $data = $this->select('id', 'title')->get();
        return $data;
    }

}
