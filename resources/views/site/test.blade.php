<h4>
    P1 = {{ $p1 }}
    <br>
    P2 = {{ $p2 }}
</h4>


{{-- adicionando comentários com a sintaxe blade --}}

{{-- Incluindo PHP puro nas view do blade--}}
@php
    // código em PHP puro.
    echo 'Teste PHP Puro';
@endphp

<br>
{{-- Sintaxe blade --}}
{{ 'Teste '}}
<br>

{{-- sintaxe PHP --}}
<?= 'Teste' ?>

{{-- trabalhando com array no blade --}}
{{-- @dd($variavelTesteIfElse) --}}

{{-- Blade if-else --}}

@if (count($variavelTesteIfElse) > 0 && count($variavelTesteIfElse) < 10)
    <h3>Fornecedores cadastrados.</h3>
@elseif (count($variavelTesteIfElse) > 10 )
    <h3>Array possui mais de 10 Fornecedores cadastrados.</h3>
@else
    <h3>Ainda não existe Fornecedores cadastrados.</h3>
@endif

{{-- Operador de decisão unless --}}
{{-- Equanto o if verifica retorno positivo, o unless verifica o retorno negativo --}}

{{-- @dd($variavelTesteIfElse); --}}

Fornecedor: {{ $variavelTesteIfElse[0]['nome']}}
<br>
Status: {{ $variavelTesteIfElse[0]['status']}}
<br>

@if ($variavelTesteIfElse[0]['status'] == 'N')
    Fornecedor inativo
@endif

<br>
{{-- Invertendo o resultado com o if --}}
@if ( !($variavelTesteIfElse[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<br>
{{-- Executa se o retorno da codição for false. --}}
@unless ($variavelTesteIfElse[0]['status'] == 'S')
    Fornecedor inativo unless.
@endunless

<br>
{{-- Trabalhando com isset--}}
{{-- Operador que verifica se uma varável ou indices de arrays estão definidos(existe ou não). --}}
{{-- O isset e um método nativo do php --}}
{{--ex:. if(isset($variavelTesteIfElse))-> retorna true se a variável existir. --}}
<br>
@isset($variavelTesteIfElse)
    Fornecedor: {{ $variavelTesteIfElse[0]['nome']}}
    <br>
    Status: {{ $variavelTesteIfElse[0]['status']}}
    <br>
    CNPJ:  {{ $variavelTesteIfElse[0]['CNPJ']}}
@endisset
<br>
<br>
@isset($variavelTesteIfElse)
    Fornecedor: {{ $variavelTesteIfElse[1]['nome']}}
    <br>
    Status: {{ $variavelTesteIfElse[1]['status']}}

    @isset($variavelTesteIfElse[1]['CNPJ'])
        CNPJ:  {{ $variavelTesteIfElse[1]['CNPJ']}}
    @endisset()

@endisset

{{-- Utilizando o operador empty--}}
{{-- Operador empty verifica se uma variável ou um índice de um array está vazio --}}
{{-- O empty no php puro e utilizado dentro do bloco if-else --}}
{{-- o empty retorna true se a variável estiver vazia e so é renderizado no browser quando está vazia. --}}

@empty($variavelTesteIfElse[2]['CNPJ'])
    Vazio
@endempty

@empty($variavelTesteIfElse[0]['CNPJ'])
    Contem valores
@endempty

