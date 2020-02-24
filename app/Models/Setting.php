<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table ="settings";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'tel',
        'hotline',
        'fax',
        'copyright',
        'facebook',
        'youtube',
        'instagram',
        'office_branch',
        'office_branch_en',
        'factory',
        'factory_en',
        'warehouse',
        'warehouse_en',
        'mail_host',
        'mail_driver',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption',
    ];
    public function getSetting($columns = ['*']){
        return self::select($columns)->first();
    }
}
