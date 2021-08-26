<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Category;

class CategoryController extends Controller{

    /**
     * HTTP Method : GET
     * URL : /categories
     */
    public function list()
    {
        $categoriesList = Category::all() ;
        // $categoriesList = Category::findAll() c'est pareil

        return response()->json($categoriesList);
    }

    public function item($id)
    {
        $categoriesList = [
            1 => [
              'id' => 1,
              'name' => 'Chemin vers O\'clock',
              'status' => 1
            ],
            2 => [
              'id' => 2,
              'name' => 'Courses',
              'status' => 1
            ],
            3 => [
              'id' => 3,
              'name' => 'O\'clock',
              'status' => 1
            ],
            4 => [
              'id' => 4,
              'name' => 'Titre Professionnel',
              'status' => 1
            ],
        ];



        if(array_key_exists($id, $categoriesList)){
            $categoryToReturn = $categoriesList[$id];
            return response()->json($categoryToReturn);
        }else{
            abort(404);
        }

    }

}
