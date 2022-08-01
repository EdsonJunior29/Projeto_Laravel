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

{{-- trabalhando com valor default no blade. sintaxe ?? --}}
@isset($variavelTesteIfElse)
    Fornecedor: {{ $variavelTesteIfElse[1]['nome']}}
    <br>
    Status: {{ $variavelTesteIfElse[1]['status']}}
    <br>
    <br>
    <!-- Se a variável não está definida (isset)
        se a variável estiver null
        Utilizamos a sintaxe default
    -->
    CNPJ:  {{ $variavelTesteIfElse[0]['CNPJ'] ?? 'Dado não foi preenchido'}}
    <br>
    <br>
    CNPJ:  {{ $variavelTesteIfElse[1]['CNPJ'] ?? 'Dado não foi preenchido'}}
    <br>
    <br>
    CNPJ:  {{ $variavelTesteIfElse[2]['CNPJ'] ?? 'Dado não foi preenchido'}}
@endisset

{{-- utilizando o switch / case no blade.php --}}

<br>
<br>
@isset($variavelTesteIfElse)
    Fornecedor: {{ $variavelTesteIfElse[0]['nome']}}
    <br>
    Status: {{ $variavelTesteIfElse[0]['status']}}
    <br>
    CNPJ:  {{ $variavelTesteIfElse[0]['CNPJ']}}
    <br>
    DDD: {{ $variavelTesteIfElse[0]['DDD'] ?? ''}}
    <br>
    Telefone: {{ $variavelTesteIfElse[0]['Telefone'] ?? ''}}
    <br>
    <br>
    @switch($variavelTesteIfElse[0]['DDD'])
        @case('11')
            São Paulo -SP
            @break
        @case('21')
            Rio de Janeiro - RJ
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @default
            Estado não identificado
    @endswitch

@endisset

<br>
<br>

{{-- Utilizando o operador for na sintaxe blade--}}

@isset($variavelTesteIfElse)
    @for ($i = 0; isset($variavelTesteIfElse[$i]); $i++)
        Fornecedor: {{ $variavelTesteIfElse[$i]['nome']}}
        <br>
        Status: {{ $variavelTesteIfElse[$i]['status']}}
        <br>
        CNPJ:  {{ $variavelTesteIfElse[$i]['CNPJ'] ?? ''}}
        <br>
        DDD: {{ $variavelTesteIfElse[$i]['DDD'] ?? ''}}
        <br>
        Telefone: {{ $variavelTesteIfElse[$i]['Telefone'] ?? ''}}

        <hr>
    @endfor

@endisset

{{-- trabalahando com o while na sintaxe blade--}}

@isset($variavelTesteIfElse)

    Teste while
    <br>
    <br>
    @php $i = 0 @endphp
    @while (isset($variavelTesteIfElse[$i]))
        Fornecedor: {{ $variavelTesteIfElse[$i]['nome']}}
        <br>
        Status: {{ $variavelTesteIfElse[$i]['status']}}
        <br>
        CNPJ:  {{ $variavelTesteIfElse[$i]['CNPJ'] ?? ''}}
        <br>
        DDD: {{ $variavelTesteIfElse[$i]['DDD'] ?? ''}}
        <br>
        Telefone: {{ $variavelTesteIfElse[$i]['Telefone'] ?? ''}}
        @php
            $i++
        @endphp
        <hr>
    @endwhile

@endisset

{{-- Foraech na sintaxe blade--}}


@isset($variavelTesteIfElse)

    Teste foreach
    <br>
    <br>
    @foreach ($variavelTesteIfElse as $indice => $fornecedores)
        Fornecedor: {{ $fornecedores['nome']}}
        <br>
        Status: {{ $fornecedores['status']}}
        <br>
        CNPJ:  {{ $fornecedores['CNPJ'] ?? ''}}
        <br>
        DDD: {{ $fornecedores['DDD'] ?? ''}}
        <br>
        Telefone: {{ $fornecedores['Telefone'] ?? ''}}
        <hr>
    @endforeach
@endisset

{{-- forelse só existe na sintaxe blade.--}}
{{-- Ele e uma combinação do foreach e um comando condicional. --}}
{{-- O mesmo verifica se o array está ou não vazio. --}}
{{-- Se houver itens no array o bloco e executado. Se não o fluxo é desviado--}}

@isset($variavelTesteIfElse)

    Teste forelse
    <br>
    <br>
    @forelse ( $variavelTesteIfElse as $indice => $fornecedores )

        {{-- Objeto loop só existe no foreach e forelse--}}

        Iteração atual: {{ $loop->iteration}}
        <br>
        <br>
        Fornecedor: {{ $fornecedores['nome']}}
        <br>
        Status: {{ $fornecedores['status']}}
        <br>
        CNPJ:  {{ $fornecedores['CNPJ'] ?? ''}}
        <br>
        DDD: {{ $fornecedores['DDD'] ?? ''}}
        <br>
        Telefone: {{ $fornecedores['Telefone'] ?? ''}}

        <br>
        <br>
        @if($loop->first)
            Se for a primeira iteração do lopp o atributo first retorna true.
        @endif

        <br><br>
        @if($loop->last)
            última iteração do loop. Retorna True.
            <br>
            Total de registros : {{ $loop->count }}
        @endif
        <hr>
    @empty
        Array vazio
    @endforelse
@endisset

{{-- Assert para aplicação web(frontEnd) --}}
{{-- São arquivo que complementam o frontend da aplicação. Ex. imagem, som, vídeos etc.. --}}
{{-- Tudo aquilo que complementa uma págia HTML. São considerado assert's' --}}
{{-- Todos os assert's precisam está na pasta public da aplicação.' --}}

{{-- Trabalhar com templates no blades --}}
{{-- Templates são modelos que servem como base para a criação de algo. (views)--}}
{{-- Template é uma view com passagens de parâmentros e associações --}}
{{-- Na view que vai receber um template utilizamos a função @extends--}}

{{-- Direcionando o conteúdo para áreas específicas na view --}}
{{-- Utilizamos a função @section e finalizamos com o @endsection obs: a section precisa de ter um nome --}}
{{-- Além de envio do html o section também permite envios de parâmetros e varíaveis para o controlador. --}}

{{-- @yield() é uma função que recebe o bloque que será anexado no layouts --}}

{{-- @component realiza a inclusão de uma view dentro de outra view--}}
{{-- Se assemelha com o include. --}}
