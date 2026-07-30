<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\ImageService;

use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(
        private readonly ImageService $imageService,
    ) {
    }

    public function index()
    {
        $products = Product::orderBy('sort')->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'price' => ['required', 'numeric'],
            'sort' => ['required', 'integer'],
            'image' => ['required', 'image'],
        ]);

        $data['image'] = $this->imageService->upload(
            $request->file('image'),
            'products',
        );

        Product::create($data);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Товар добавлен.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => ['required'],
            'price' => ['required', 'numeric'],
            'sort' => ['required', 'integer'],
            'image' => ['nullable', 'image'],
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->imageService->replace(
                $request->file('image'),
                $product->image,
                'products',
            );
        }

        $product->update($data);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Товар обновлен.');
    }

    public function destroy(Product $product)
    {
        $this->imageService->delete(
            $product->image,
            'products',
        );

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Товар удален.');
    }
}