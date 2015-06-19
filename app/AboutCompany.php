<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    protected $fillable = ['url_img','description'];
    public function scopeTitle()
    {
        $info = $this->find(1);
        $data =["url_img"=>$info->url_img,"description"=>$info->description];
        return $data;
    }
}
