<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\image;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plates = Plate::all();
        $categories = category::all();
        return view('chef.plateAdd', compact('plates', 'categories'));
    }


    public function showPlates()
    {
        $platesCount = Plate::count();
        $plates = Plate::all();
        return view('chef.dashboard', compact('plates','platesCount'));
    }

    public function showPlatesDetails(Plate $plate)
    {
        return view('chef.detailsPlate', compact('plate'));
    }

    public function showPlatesDetailsAdmin(Plate $plate)
    {
        return view('admin.detailsPlate', compact('plate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chef.plateAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'IdCategory' => 'required',
            'image.*' => 'required|image', // Ajoutez la validation pour les images
        ]);



        $plate = new Plate();
        $plate->name = $validatedData['name'];
        $plate->description = $validatedData['description'];
        $plate->ingredients = $validatedData['ingredients'];
        $plate->IdCategory = $validatedData['IdCategory'];
        $plate->IdChef = Auth::user()->chef->id;
        $plate->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imagePath = $this->storeImage($file);
                Image::create([
                    'url' => $imagePath,
                    'imageable_id' => $plate->id,
                    'imageable_type' => Plate::class,
                ]);
            }
        }

        return redirect('/chef')->with('success', 'Plate created successfully');
    }

    private function storeImage($file)
    {
        // Générer un nom de fichier unique pour l'image
        $filename = uniqid() . '_' . $file->getClientOriginalName();

        // Stockez l'image dans le répertoire 'public/images'
        $file->storeAs('public/images', $filename);

        // Retournez le chemin à stocker dans la base de données
        return 'images/' . $filename;
    }





    /**
     * Display the specified resource.
     */
    public function show(Plate $plate)
    {
        return view('chef.plateAdd', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plate $plate)
    {
        $categories = Category::all();

        return view('chef.plateEdit', compact('plate', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plate $plate)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'IdCategory' => 'required',
        ]);

        $plate->update($validatedData);

        return redirect('/chef');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();

        return redirect()->back()->with('success', 'Plate deleted successfully');
    }



    public function validation(Plate $plate)
    {
        if (!$plate->status) {
            $plate->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'plate validated!');
        }
    }

    public function showInvalidPlates()
    {
        $InvalidPlates = plate::where('status', '0')->get();
        $unvalidPlatesCount =  plate::where('status', '0')->count();
        $validPlatesCount =  plate::where('status', '1')->count();
        return view('admin.plate', compact('InvalidPlates','unvalidPlatesCount','validPlatesCount'));
    }
}
