<?php

namespace App\Http\Controllers;

use App\Exports\CategorysExport;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('permission:data.category.index')->only('index');
    //     $this->middleware('permission:data.category.create')->only('create', 'store');
    //     $this->middleware('permission:data.category.edit')->only('edit', 'update');
    //     $this->middleware('permission:data.category.destroy')->only('destroy');
    // }

    public function index(Request $request)
    {
        $categorys = DB::table('category')
            ->when($request->input('nama_category'), function ($query, $nama_category) {
                return $query->where('nama_category', 'like', '%' . $nama_category . '%');
            })
            ->paginate(5);
        return view('data.category.index', compact('categorys'));
    }

    public function create()
    {
        return view('data.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'nama_category' => $request->nama_category
        ]);
        return redirect()->route('category')->with('success', 'Tambah Data category Sukses');
    }

    public function show(category $category)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('data.category.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findorfail($id);
        $category->update($request->all());
        return redirect()->route('category')->with('toast_success', 'Edit Data category Sukses');

    }

    public function destroy(category $category, $id)
    {
        $category = Category::findorfail($id);
        try {
            $category->delete();
            return redirect()->route('category')->with('success', 'Hapus Data category Sukses');
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1451) {
                return redirect()->route('category')
                    ->with('error', 'Tidak Dapat Menghapus category Yang Masih Digunakan Oleh Kolom Lain');
            } else {
                return redirect()->route('category')->with('success', 'Hapus Data category Sukses');
            }
        }
    }


    // public function export()
    // {
    //     return Excel::download(new CategorysExport, 'category.xlsx');
    // }
}
