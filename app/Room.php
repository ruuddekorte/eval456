<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function bed_type()
    {
       return $this->belongsTo(Bed_type::class);
    }

    public function bathroom_type()
    {
       return $this->belongsTo(Bathroom_type::class);
    }

    public function view()
    {
       return $this->belongsTo(View::class);
    }
}

