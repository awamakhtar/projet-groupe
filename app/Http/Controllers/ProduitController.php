<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
     /**
     * Affiche la liste des contacts
     */
    public function page()
    {

        $produits = produit::all();
        return view('produits.page', compact('produits'));
    }
    
   
    public function about()
    {
        return view('about');
    }
    public function sign()
    {
        return view('sign');
    }
    

    public function index()
    {
        return view('index');
    }
   

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('aut.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function details()
    {
        return view('details');
    }

    public function whislist()
    {
        return view('whislist');
    }

    public function contact()
    {
        return view('contact');
    }



    /**
     * return le formulaire de créationcreation d'un contact
     */
    public function create()
    {

        return view('produits.create');

    }


    /**
     * Enregistre un nouveau contact dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'categorie'=>'required',
            'quantite'=> 'required',
            'prix' => 'required',
        ]);


        $produit = new produit([
            'categorie' => $request->get('categorie'),
            'quantite' => $request->get('quantite'),
            'prix' => $request->get('prix'),
        ]);


        $produit->save();
        return redirect('/')->with('success', 'produit Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un contact spécifique
     */

    public function show($id)
    {

        $produit = produit::findOrFail($id);
        return view('produits.show', compact('produit'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $produit=produit::findOrFail($id);

        return view('produits.edit', compact('produit'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'categorie'=>'required',
            'quantite'=> 'required',
            'prix' => 'required',

        ]);




        $produit= produit::findOrFail($id);
        $produit->categorie = $request->get('categorie');
        $produit->quantite = $request->get('quantite');
        $produit->prix = $request->get('prix');



        $produit->update();

        return redirect('/')->with('success', 'produit Modifié avec succès');

    }




    /**
     * Supprime le contact dans la base de données
     */
    public function destroy($id)
    {

        $produit = produit::findOrFail($id);
        $produit->delete();

        return redirect('/')->with('success', 'produit Supprime avec succès');

    }
}
