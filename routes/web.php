<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

// Vai ser chamado essa rota caso alguem passe uma URL inexistente 
Route::fallback(function () {
    echo 'teste';
});

Route::get('/', [PrincipalController::class, 'Principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'Contato'])->name('site.contato');
Route::get('/sobreNos', [SobreNosController::class, 'SobreNos'])->name('site.sobrenos');

Route::get('/login', function (){ return 'Rota login';})->name('site.login');

// Nessa rota de teste passamos dois parametros, que esses parametros vão receber os valores pelo controller
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'Teste'])->name('site.teste');

Route::prefix('/app')->group(function() {
    Route::get('/cliente', function (){ return 'Rota cliente';})->name('app.cliente');
    Route::get('/produtos', function (){ return 'Rota produtos';})->name('app.produto');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
});


/*

Route::get('/rota1', function () { 
    echo 'Rota 1'; 
})->name('site.rota1');

A rota com o name 'site.rota2 está redirecionando para a rota 'site.rota1' lembrando que precisa passar o name da rota
Route::get('/rota2', function () { 
    return redirect()->route('site.rota1'); 
})->name('site.rota2');
*/

/*
Uma maneira antiga de chamar um controlador
Route::get('/contato',[\App\Http\Controllers\ContatoController::class, 'Contato']);


Route::get('/contato/{nome}/{outro?}', function(string $nome, string $outro = "Caso eu náo passar parametro, vai ser esse valor") {
    echo "estamos aqui   {$nome} {$outro}";
});

No where dessa rota estou dizendo que o parametro categoria_id deve ser de 1 a 9 e o name de A ate Z maiusculo ou minusculo
Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id = 1) {
    echo "estamos aqui   {$nome} {$categoria_id}";
})->where('categoria_id', '[1-9]+')->where('nome', '[A-Za-z]');

*/
