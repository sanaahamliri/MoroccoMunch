<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\chef;
use App\Models\client;
use App\Models\plate;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categorieCount = Category::count();
        $clientCount = client::count();
        $chefCount = chef::count();
        $plateCount = plate::count();
        return view('admin.dashboard', compact('categories','categorieCount','clientCount','chefCount','plateCount'));
    }

    public function create()
    {
        return view('admin.dashboard');
    }
    
    public function show()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
                ]);

        Category::create($request->all());

        return redirect()->back()
            ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update($request->all());

        return redirect()->route('admin.dashboard')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
       $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
