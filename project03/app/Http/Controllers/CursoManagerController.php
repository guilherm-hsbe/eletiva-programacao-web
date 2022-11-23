<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::latest()->paginate(5);

        return view('cursosmanager.index',compact('cursos'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursosmanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        // Curso::create($request->all());

        // Requisitar os campos no cadastro de novo curso
        $curso = new Curso;
        $curso->nome = $request->nome; #obrigatório
        $curso->descricao = $request->descricao; #obrigatório
        $curso->imagem = ""; #opcional
        $dirImage = "images/cursos";

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;
            $extension = $requestImage->extension();

            // Hash para gerar nome da imagem com data e hora. (Não difere dos outros arquivos)
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            // Mover a imagem selecionada para a pasta public/images/cursos
            $requestImage->move(public_path($dirImage), $imageName);
            $curso->imagem = $dirImage . "/" . $imageName;
        };

        $curso->save();

        return redirect()->route('cursosmanager.index')->with('success','Curso criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);

        return view('cursosmanager.show',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);

        return view('cursosmanager.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        $data = $request->all();
        
        Curso::findOrFail($id)->update($data);

        return redirect()->route('cursosmanager.index')->with('success','Curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curso::findOrFail($id)->delete();

        return redirect()->route('cursosmanager.index')->with('success','Curso excluido com sucesso!');
    }
}

