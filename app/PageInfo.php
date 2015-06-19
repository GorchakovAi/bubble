<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageInfo extends Model
{
    protected $fillable = ['url_logo', 'url_video', 'url_vk', 'url_fb', 'url_twitter', 'url_gp'];

    public function scopeTitle()
    {
        $info = $this->find(1);
        $data =["url_logo"=>$info->url_logo,"url_video"=>$info->url_video,"url_vk"=>$info->url_vk,"url_fb"=>$info->url_fb,"url_twitter"=>$info->url_twitter,"url_gp"=>$info->url_gp];
        return $data;
    }
}
