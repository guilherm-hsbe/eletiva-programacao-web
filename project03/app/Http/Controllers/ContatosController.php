<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contato;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContatosController extends Controller
{
    public function index() {
        $contato = Contato::all();

        return view('site.contatos', ['contato' => $contato]);
    }

    public function store(Request $request) {
        $contato = new Contato;

        $contato->nome = $request->nomeContato;;
        $contato->email = $request->emailContato;
        $contato->tipo = $request->tipoContato;
        $contato->mensagem = $request->mensagemContato;
        $contato->status = false;

        // Mensagem Status
        try {
            $contato->save();

            return redirect()->action([ContatosController::class, 'index'])
                                    ->with('msg','Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([ContatosController::class, 'index'])
                                    ->with('msg','Falha no envio da mensagem!');
        }
    }
}
