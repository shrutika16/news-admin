<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mongo_id',
        'title',
        'img_src',
        'news_url',
        'short_desc',
        'long_desc',
        'date_time',
        'news_portal_id',
        'category_id',
        'is_active'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * Get the phone associated with the user.
     */
    public function category()
    {
        return $this->hasOne(category::class, 'id' , 'category_id');
    }

    /**
     * Get the phone associated with the user.
     */
    public function news_portal()
    {
        return $this->hasOne(news_portal::class, 'id', 'news_portal_id');
    }

}
