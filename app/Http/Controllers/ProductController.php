<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    // Data dummy di memory
    private $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1500],
        ['id' => 2, 'name' => 'Smartphone', 'price' => 800],
        ['id' => 3, 'name' => 'Tablet', 'price' => 600],
    ];
    // GET /api/products
    public function index()
    {
        return response()->json($this->products);
    }
    // GET /api/products/{id}
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', (int) $id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }
}