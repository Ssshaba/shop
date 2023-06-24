<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        // Обновление полей модели Product
        $product->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'preview_image' => $data['preview_image'],
            'price' => $data['price'],
            'count' => $data['count'],
            'is_published' => $data['is_published'],
            'category_id' => $data['category_id'],
        ]);

        // Обновление связей с тегами
        $product->tags()->sync($data['tags']);

        // Обновление связей с цветами
        $product->colors()->sync($data['colors']);
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('product.show', compact('product','tags', 'colors', 'categories'));
    }
}
