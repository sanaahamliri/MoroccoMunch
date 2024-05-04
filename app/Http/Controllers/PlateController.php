<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlateRequest;
use App\Models\category;
use App\Models\commentaire;
use App\Models\image;
use App\Models\Plate;
use App\Models\ingredient;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\JsonDecoder;

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
        $chef = Auth::user()->chef->id;

        $platesCount = Plate::where('IdChef', $chef)->count();
        $plates = Plate::where('IdChef', $chef)->get();
        $count = Reservation::whereHas('plates', function ($query) {
            $query->where('IdChef', Auth::user()->chef->id);
        })->count();
        return view('chef.dashboard', compact('plates', 'platesCount', 'count'));
    }


    public function showPlatesDetails(Plate $plate)
    {
        return view('chef.detailsPlate', compact('plate'));
    }

    public function search(Request $request)
    {
        $query = $request->search;

        if ($query != '') {
            $plates = Plate::where('name', 'like', '%' . $query . '%')
                ->with('categories')
                ->with('chefs.user')
                ->with('images')
                ->orderBy('id', 'desc')
                ->get();

            return response()->json([
                'plates' => $plates,
            ]);
        } else {
            $plates = Plate::with('categories')
                ->with('chefs.user')
                ->with('images')
                ->get();
            return response()->json([
                'plates' => $plates,
            ]);
        }
    }


    public function viewMore(Plate $plate)
    {

        $plateCategory = $plate->IdCategory;
        $relatedPlates = Plate::where('IdCategory', $plateCategory)
            ->where('id', '!=', $plate->id)
            ->limit(5)
            ->get();

        $comments = commentaire::where('plate_id', $plate->id)->get();

        return view('client.single', compact('plate', 'relatedPlates', 'relatedPlates', 'comments'));
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
    public function store(PlateRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['IdChef'] = Auth::user()->chef->id;

        $plate = Plate::create($validatedData);


        // $result =  explode(" ", $validatedData["ingredients"]);

        // $plate->ingredients()->create(['name' => json_encode($result)]);


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



    public function Refuse(Plate $plate)
    {
        $plate->delete();
        return redirect()->back()->with('success', 'plate deleted successfuly!');
    }


    public function showInvalidPlates()
    {
        $InvalidPlates = plate::where('status', '0')->get();
        $unvalidPlatesCount =  plate::where('status', '0')->count();
        $validPlatesCount =  plate::where('status', '1')->count();
        return view('admin.plate', compact('InvalidPlates', 'unvalidPlatesCount', 'validPlatesCount'));
    }



    public function filter(int $id)
    {
        if ($id == 0) {
            $plates = Plate::all();
            return response()->json([
                'plates' => $plates,
            ]);
        } else {
            $plates = Plate::where('IdCategory', $id)
                ->with('categories')->with('chefs.user')->with('images')
                ->get()->where('status', '1');

            return response()->json([
                'plates' => $plates,
            ]);
        }
    }
}
