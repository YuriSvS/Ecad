<h1>Lista de Livros</h1>
@foreach ($livros as $livro)
<p> Titulo: {{$livro->titulo}}</p>
<p> Ano: {{$livro->ano}}</p>
<p> Idioma: {{$livro->idioma}}</p>
<p> ISBN: {{$livro->isbn}}</p>
<hr>
<p>
    {{ $livro->titulo }}
    <a href="{{ route('livros.show', $livro->id)}}">Ver detalhes</a>
</p>
@endforeach
