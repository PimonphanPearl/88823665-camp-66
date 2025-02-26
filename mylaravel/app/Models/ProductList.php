<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    public $timestamps = false;
    protected $table = 'product_list';

    // Protect against mass assignment vulnerabilities
    protected $fillable = ['name', 'category_id', 'user_id'];

    // ความสัมพันธ์กับตาราง categories
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // ความสัมพันธ์กับตาราง users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
