<h3>Fodasse</h3>


@php
    
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h1>Primeiro Bloco de codigo</h1>
@elseif(count($fornecedores) > 10)
    <h1>Segundo bloco</h1>
@else
  <h1>Bloco else</h1>
@endif

@unless ($fornecedor[0]['status'] == 'S')
    Fornecedor Inativo
@endunless

@isset ($fornecedor)
<br>
  Fornecedor: {{ $fornecedor[0]['nome'] }} 
@endisset
  
@Empty ($fornecedor[1]['cnpj'])
  <br>
  CNPJ vazio: {{ $fornecedor[1]['cnpj'] }} 
     
@endEmpty


