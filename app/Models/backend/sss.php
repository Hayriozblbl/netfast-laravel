<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class sss extends Model
{
    use MultiLanguage;



    protected $fillable = [
      'title_tr', 'text_tr'


        ];


        /**
         * This array will have the attributes which you want it to support multi languages
         */
        protected $multi_lang = [
                  'title', 'text'

        ];
}
