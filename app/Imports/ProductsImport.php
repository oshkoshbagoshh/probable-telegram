<?php

namespace App\Imports;

use App\Models\Product; // Ensure you have a Product model
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'url' => $row['url'],
            'product_category' => $row['product category'],
            'product_name' => $row['product name'],
            'video_counts' => $row['video counts'],
            'price' => $row['price'],
            'estimated_revenue' => $row['estimated revenue'],
            'rating' => $row['rating'],
            'email' => $row['email'],
            'individual' => $row['individual'],
            'product_details' => $row['product details'],
            'script' => $row['script'],
            'date_added' => \Carbon\Carbon::parse($row['date added']),
            'email_sent' => $row['email sent'] === 'x',
            'product_sold' => $row['product sold $'],
            'product_returned' => $row['product returned $'],
            'email_b' => $row['email b'],
            'individual_b' => $row['individaul b'],
            'script_b' => $row['script b'],
            'raw_text' => $row['raw text'],
            'article_markdown' => $row['article markdown'],
            'affiliate_link' => $row['affiliate link'],
            'status' => $row['status'],
        ]);
    }
}
