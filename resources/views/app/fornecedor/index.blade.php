<h3>Fodasse</h3>

{{-- Comentario no blade --}}

@php
    
@endphp

{{-- Modo de usar IF e ELSE no blade --}}
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h1>Primeiro Bloco de codigo</h1>
@elseif(count($fornecedores) > 10)
    <h1>Segundo bloco</h1>
@else
  <h1>Bloco else</h1>
@endif

{{-- Unless é a negação do IF como se colocasse o ! antes do bloco IF --}}
@unless ($fornecedor[0]['status'] == 'S')
    
    Fornecedor Inativo
@endunless
{{-- @dd($fornecedor) --}}

{{-- Isset 
  if(isset($var)) Retorna True caso a variavel existiver definida
  --}}

@isset ($fornecedor)
<br>
  Fornecedor: {{ $fornecedor[0]['nome'] }} 
@endisset

{{-- IsEmpty 
  Verifica se a variavel está vazia. Caso a variavel tenho os seguintes valores: 
  - ''
  - 0
  - 0.0
  - '0'
  - null
  - false
  - array()
  - $varSemValor
  --}}

  
@Empty ($fornecedor[1]['cnpj'])
  <br>
  CNPJ vazio: {{ $fornecedor[1]['cnpj'] }} 
     
@endEmpty

{{-- Operador ternario --}}
@Empty ($fornecedor[1]['cnpj'] ? 'CNPJ Informado' : 'CNPJ não informado')
  <br>
  {{-- Fornecedor: {{ $fornecedor[0]['nome'] }}  --}}
@endEmpty
