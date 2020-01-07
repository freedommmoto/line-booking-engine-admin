<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'award';

    public function insert($number,$details){
        $self->number = $number;

           $table->bigIncrements('id');
            $table->integer('number');
            $table->integer('details');
            $table->timestamps();
    }
}
