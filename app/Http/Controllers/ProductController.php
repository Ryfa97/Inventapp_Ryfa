<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = DB::table('product')
            ->select('product.*', 'category.nama_category as nama_category')
            ->leftJoin('category', 'product.category_id', '=', 'category.id')
            ->when($request->input('nama_product'), function ($query, $nama_product) {
                return $query->where('product.nama_product', 'like', '%' . $nama_product . '%');
            })
            ->when($request->input('nama_category'), function ($query, $nama_category) {
                return $query->where('nama_category', 'like', '%' . $nama_category . '%');
            })
            ->paginate(5);
        return view('data.product.index', compact('products'));
    }

    public function create()
    {
        $categorys = Category::all();
        $products = Product::all();
        return view('data.product.create', compact('categorys', 'products'));
    }

    public function store(StoreProductRequest $request)
    {
        Product::create([
            'nama_product' => $request->nama_product,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('product.index')->with('success', 'Tambah Data Product Sukses');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $category = Category::all();

        return view('data.product.edit',)
            ->with(['product' => $product, 'category' => $category]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $validate = $request->validated();
        $product->update($validate);
        return redirect()->route('product.index')->with('success', 'Edit Data Product Sukses');
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Hapus Data Product Sukses');
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1451) {
                return redirect()->route('product.index')
                    ->with('error', 'Tidak Dapat Menghapus Product Yang Masih Digunakan Oleh Kolom Lain');
            } else {
                return redirect()->route('product.index')->with('success', 'Hapus Data Product Sukses');
            }
        }
    }

}
