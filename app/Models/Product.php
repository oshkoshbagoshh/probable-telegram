<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'product_category', 'product_name', 'video_counts',
        'price', 'estimated_revenue', 'rating', 'email',
        'individual', 'product_details', 'script', 'date_added',
        'email_sent', 'product_sold', 'product_returned',
        'email_b', 'individual_b', 'script_b', 'raw_text',
        'article_markdown', 'affiliate_link', 'status'
    ];

}
