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

        
        
        // Créez un nouvel enregistrement de plat
        $plate = new Plate();
        $plate->name = $validatedData['name'];
        $plate->description = $validatedData['description'];
        $plate->ingredients = $validatedData['ingredients'];
        $plate->IdCategory = $validatedData['IdCategory'];
        $plate->IdChef = Auth::user()->chef->id; // Assurez-vous d'associer le chef
        
        // Enregistrez le plat
        $plate->save();
        
        // Handle file uploads
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imagePath = $this->storeImage($file);
                // Créer un nouvel enregistrement d'image lié au plat
                Image::create([
                    'url' => $imagePath,
                    'imageable_id' => $plate->id,
                    'imageable_type' => Plate::class,
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Plate created successfully');
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
        return view('chef.plateAdd', compact('plate'));
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
            'IdChef' => 'required',
        ]);

        $plate->update($validatedData);

        return redirect()->route('chef.plateAdd')->with('success', 'Plate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plate $plate)
    {
        $plate->delete();

        return redirect()->route('chef.plateAdd')->with('success', 'Plate deleted successfully');
    }
}
