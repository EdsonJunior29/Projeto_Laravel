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
