<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    // public function events()
    // {
    //     return $this->belongsToMany(Event::class);
    // }
    public static function store($request)
    {
        $image = $request->file('image')->store('img/sponsors', 'public');
        $sponsor = new Sponsor();
        $sponsor->name = $request->name;
        $sponsor->image = $image;
        $sponsor->save();
    }
}
