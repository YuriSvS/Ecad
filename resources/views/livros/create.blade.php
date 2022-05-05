<div>
    <form method="POST" action="{{route('livros.store')}}">

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Titulo <input type="text" name="titulo" id="titulo" placeholder="Digite o texto" value="{{old('titulo')}}"></p>
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite o Ano" value="{{old('ano')}}"></p>
        <p>Idioma <input type="text" name="idioma" id="idioma"></p>
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite o ISBN" value="{{old('isbn')}}"></p>
        <p><button type="submit">Enviar</button></p>

    </form>
</div>
