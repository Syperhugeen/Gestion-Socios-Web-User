<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;

class NewslleterUser extends Model
{

    protected $table    = 'newslleter_users';
    protected $fillable = ['name', 'description'];

    // A t r i b u t o s   m u t a d o s

    public function getRouteDesuscribirAttribute()
    {
        return route('changeUserNewsletterToNotSend', $this->email);
    }

}
