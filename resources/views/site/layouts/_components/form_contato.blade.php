<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    @if($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    @if($errors->has('telefone'))
        {{$errors->first('telefone')}}
    @endif
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    @if($errors->has('email'))
        {{$errors->first('email')}}
    @endif
    {{$motivo_contatos}}
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') != $motivo_contato->id ? 'selected' : ''}}> {{$motivo_contato->motivo_contato}}</option>
        @endforeach

    </select>
    <br>

    @if($errors->has('motivo_contatos_id'))
        {{$errors->first('motivo_contatos_id')}}
    @endif

    <textarea name="mensagem" class="{{$classe}}">
        @if(old('mensagem') != '')
            {{old('mensagem')}}
        @else
            Preencha a mensagem
        @endif
    </textarea>
    <br>
    @if($errors->has('mensagem'))
        {{$errors->first('mensagem')}}
    @endif
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

@if ($errors->any())
   
   @foreach($errors->all() as $erro)
       {{$erro}} <br>
   @endforeach

@endif