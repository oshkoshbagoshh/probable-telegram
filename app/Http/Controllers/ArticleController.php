<?php

namespace App\Http\Controllers;

use phpDocumentor\Reflection\DocBlock\Description;

class ArticleController extends Controller
{
    public function index()
    {
        // Dummy data for articles
        $articles = [
            [
                'id' => 1,
                'title' => 'Introduction to Bulma CSS',
                'content' => 'Bulma is a modern CSS framework based on Flexbox...',
                'published_at' => '2025-02-01',
            ],
            [
                'id' => 2,
                'title' => 'Building Responsive Layouts with Bulma',
                'content' => 'Learn how to use Bulma\'s grid system to create responsive layouts...',
                'published_at' => '2025-02-03',
            ],
            [
                'id' => 3,
                'title' => 'Top CSS Frameworks in 2025',
                'content' => 'A comparison of popular CSS frameworks like Bulma, Tailwind, and Bootstrap...',
                'published_at' => '2025-02-05',
            ],
        ];

        // Pass the data to the view
        return view('articles.index', ['articles' => $articles]);
    }

    //TODO:  store method to display individual articles



}
