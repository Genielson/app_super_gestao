<h3>Fornecedor</h3>

{{-- Fica aqui o comentario --}}

{{'Teste Fornecedor'}}

@php
    
    // Meu comentario 
    /*
        meu outro comentario
    */

    if(){
        
    }elseif (true) {
        # code...
    }

@endphp

{{--@dd {variavel} --}}

{{--
@if(count($fornecedores) < 10)
   <h3>Existem fornecedores </h3>
@elseif(count($fornecedores) > 10)
   <h3>Nao existem fornecedores</h3>
@else
   <h3>Existem bla bla blah </h3>
@endif 
--}}

{{--
@unless(1 > 2)
   <h3> Entrou </h3> // se for false
@endunless
--}}

{{--
@isset($forn)
  <h1>Existe a variavel </h1>
@endisset
--}}

{{--
@empty($nome)
    <h1>Vazio</h1>
@endempty
--}}

{{--
@@switch($cont)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch
--}}

{{--
@for($i = 0; $i < 10; $i++)
    {{$i}}    
@endfor
--}}

{{--
@php
    $i = 0
@endphp
@while($condition)
    
@php
    $i++
@endphp
@endwhile

--}}

{{--
@foreach($variable as $key => $value)
    {{$loop->iteration}}

    @if($loop->first)
       h2 Primeira interaçao /h2
    @endif
@endforeach
--}}