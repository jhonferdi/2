<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; // cek create.blade.php

class Post extends Model
{
    use HasFactory;
    use Sluggable; // cek create.blade.php

    // protected $fillable = ['title', 'excerpt', 'author', 'body'];
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search']:false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%'. $filters['search'] .'%');
        // } 
        
        //bisa pake yang atas atau yang bawah (sama aja)

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%'. $search .'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array // cek create.blade.php
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}