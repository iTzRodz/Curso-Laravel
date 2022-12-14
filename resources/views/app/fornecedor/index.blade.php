<h3>Fodasse</h3>

@php
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h1>Aprendendo IF e Else</h1>
    <p>Primeiro Bloco de codigo</p>
@elseif(count($fornecedores) > 10)
    <h1>Segundo bloco</h1>
@else
    <h1>Bloco else</h1>
@endif

@unless($fornecedores2[0]['status'] == 'S')
    <hr>
    <h1>Unless</h1>
    fornecedores2 Inativo
@endunless

@isset($fornecedores2)
    <hr>
    <h1>Metodo Isset</h1>
    fornecedores2: {{ $fornecedores2[0]['nome'] }}
@endisset

@empty($fornecedores2[1]['cnpj'])
    <hr>
    <h1>Metodo Empty</h1>
    CNPJ vazio: {{ $fornecedores2[1]['cnpj'] }}
    <br>
@endEmpty

@isset($fornecedores2)
    <hr>
    <h1>Operador Condicional de Valor Default</h1>
    {{ $fornecedores2[0]['cnpj'] ?? 'Dado Não preenchido' }}
    <br>
    Telefone: ({{ $fornecedores2[0]['ddd'] ?? 'DDD não informado' }})
    {{ $fornecedores2[1]['tel'] ?? 'Número de telefone não informado' }}
    <br>
    @switch($fornecedores2[1]['ddd'])
        @case('1')
            <p>São Paulo - SP</p>
        @break

        @case('85')
            <p>TESTE</p>
        @break

        @default
            <H3>Nenhum bloco</H3>
    @endswitch
@endisset

@isset($fornecedores2)
    <hr>
    <h1>Usando For</h1>
    @for ($i = 0; isset($fornecedores2[$i]); $i++)
        <p> fornecedores2 = {{ $fornecedores2[$i]['ddd'] ?? 'DDD não existe' }} </p>
    @endfor
@endisset

@isset($fornecedores2)
    <hr>
    <h1>Usando While</h1>
    @php $i = 0; @endphp
    @while (isset($fornecedores2[$i]))
        <p>fornecedores2 = {{ $fornecedores2[$i]['tel'] ?? 'Telefone não existe' }}</p>
        @php $i++; @endphp
    @endwhile
@endisset

@isset($fornecedores2)
    <hr>  
    <h1>Aprendendo ForEach</h1>
    @foreach ($fornecedores2 as $index => $fornecedor)
      <p>Nome: {{ $fornecedor['nome'] ?? 'Sem nome' }}</p>
      <p>Telefone  {{ $fornecedor['tel'] ?? 'Telefone não existe' }}</p>  
    @endforeach  
@endisset

@isset($fornecedores2)
    <hr>
    <h1>Aprendendo ForElse</h1>
    @Forelse ($fornecedores2 as $index => $fornecedor)
      <span> DDD: ({{ $fornecedor['ddd'] ?? 'Sem DDD' }}) </span>
      <span> Telefone: {{ $fornecedor['tel'] ?? 'Telefone não existe' }} </span>  
      <br>
      @empty
          "Não existe fornecedores2es cadastrados"
    @endforelse
@endisset

@isset($fornecedores2)
    <hr>
    <h1>Aprendendo ForElse</h1>
    @Forelse ($fornecedores2 as $index => $fornecedor)
      <span> DDD: ({{ $fornecedor['ddd'] ?? 'Sem DDD' }}) </span>
      <span> Telefone: {{ $fornecedor['tel'] ?? 'Telefone não existe' }} </span>  
      <br>
      @empty
          "Não existe fornecedores2es cadastrados"
    @endforelse
@endisset

