<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class HomePage extends \App\Models\HomePage
{
    protected $fillable = [
        'text_block_1', 'text_block_1_en', 'description', 'description_en', 'banner', 'video',
        'text_block_2', 'text_block_2_en', 'content_block_2', 'content_block_2_en', 'isShowBlock_2',
        'text_block_3', 'text_block_3_en', 'content_block_3', 'content_block_3_en', 'isShowBlock_3'
    ];
}
