<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['title','salary','location','schedual','url','featured'];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => strtolower($name)]);

        $this->tags()->attach($tag);
    }
}
