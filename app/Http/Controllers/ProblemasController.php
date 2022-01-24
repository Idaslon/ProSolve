<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problema;
use App\Models\Notificacao;

class ProblemasController extends Controller {
    public function index() {
        $problemas = Problema::all();
        $notificacoes = Notificacao::all();

        return view('feed', ['problemas' => $problemas, 'notificacoes' => $notificacoes]);
    }

    public function show($id) {
        $problema = Problema::find($id);
        return view ('problemaDetalhes', ['problema' => $problema]);
    }

    public function create() {
        $notificacoes = Notificacao::all();
        return view('problema',  ['notificacoes' =>$notificacoes]);
    }

    public function store(Request $request) {
        if (!$request->hasFile('arquivos') || !$request->file('arquivos')->isValid()) {
            return redirect()
                ->back()
                ->with('error', 'Falha ao fazer upload')
                ->withInput();
        }

        $nome = uniqid(date('HisYmd'));
        $extensao = $request->arquivos->extension();
        $nomeArquivo = "foto01.png";
        // $nomeArquivo = "{$nome}.{$extensao}";
        $upload = $request->arquivos->storeAs('problemas', $nomeArquivo);

        if ( !$upload )
            return redirect()
                ->back()
                ->with('error', 'Falha ao fazer upload')
                ->withInput();

        return $upload;


        // $problema = Problema::create($request->all());
        // $notificacao_data = array(
        //     'problema_id' => $problema->id,
        //     'mensagem' => "Sua publicação foi postada",
        // );
        // $notificacao = Notificacao::create($notificacao_data);

        // return redirect()->route('feed', []);
    }
}
