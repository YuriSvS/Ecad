<h1>Detalhe do livro{{ $livro->titulo }}</h1>

<ul>
    <li>ISBN: {{ $livro->isbn }}</li>
    <li>Ano: {{ $livro->ano }}</li>
    <li>Idioma: {{ $livro->idioma }}</li>
</ul>

<form action="{{ route('livros.destroy', $livro->id) }}" method="POST"></form>
