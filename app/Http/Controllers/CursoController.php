<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
   
    public function index()
    {
        return response( Curso::all(), 200);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        try {
            $curso = Curso::create($request->all());
            return response($curso, 201);
        }catch(\Throwable $th){
            return response($th->getMessage(),400);
        }
    }

    
    public function show(Curso $curso)
    {
        //
    }

    
    public function edit(Curso $curso)
    {
        //
    }

 
    public function update(Request $request, Curso $curso)
    {
        //
    }

    public function destroy(Curso $curso)
    {
        //
    }
}
