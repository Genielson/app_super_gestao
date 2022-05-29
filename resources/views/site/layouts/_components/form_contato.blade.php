<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    {{$motivo_contatos}}
    <select name="motivo_reclamacao" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$key}}" {{old('motivo_contato') != $key ? 'selected' : ''}}> {{$motivo_contato}}</option>
        @endforeach

    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">
        @if(old('mensagem') != '')
            {{old('mensagem')}}
        @else
            Preencha a mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>