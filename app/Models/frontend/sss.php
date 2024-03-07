<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class sss extends Model
{

    protected $table = 'ssses';


    protected $fillable = [
        'title_tr','text_tr',
     ];

     /**
      * This array will have the attributes which you want it to support multi languages
      */
     protected $multi_lang = [
         'title',
         'text',
     ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */



}
