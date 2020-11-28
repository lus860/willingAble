<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class NotesList extends Model
{
    protected $table = 'notes_lists';

    protected $fillable = [
        'title', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }
}
