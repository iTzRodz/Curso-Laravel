<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

Route::fallback(function () {
    echo 'Rota error 404';
});

Route::get('/',[PrincipalController::class, 'Principal'])->name('index');
Route::get('/contato', [ContatoController::class, 'Contato'])->name('contato');
Route::get('/sobreNos',[SobreNosController::class, 'SobreNos'])->name('sobre');

Route::get('/login', function (){ return 'Rota login';})->name('site.login');

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'Teste'])->name('site.teste');

Route::prefix('/app')->group(function() {
    Route::get('/cliente', function (){ return 'Rota cliente';})->name('app.cliente');
    Route::get('/produtos', function (){ return 'Rota produtos';})->name('app.produto');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
});

Route::get('/rota1', function () { 
    echo 'Rota 1'; 
})->name('site.rota1');

Route::get('/rota2', function () { 
    return redirect()->route('site.rota1'); 
})->name('site.rota2');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class, 'Contato']);

Route::get('/contato/{nome}/{outro?}', function(string $nome, string $outro = "Caso eu náo passar parametro, vai ser esse valor") {
    echo "estamos aqui   {$nome} {$outro}";
});

Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id = 1) {
    echo "estamos aqui   {$nome} {$categoria_id}";
})->where('categoria_id', '[1-9]+')->where('nome', '[A-Za-z]');


