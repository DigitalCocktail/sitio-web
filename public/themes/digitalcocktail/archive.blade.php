@extends(theme_view('layout'))

@section('title')
  Archivo
@stop

@section('content')
  <section>

    {{-- Archive Heading --}}
    {{-- Notice the triple brackets to escape any xss for tags and search term. --}}
    @if (isset($tag))
      <h2 class="title">{{{ ucfirst($tag) }}} Archivo</h2>
    @elseif ($search)
      <h2 class="title">Resultados de tu búsqueda: "{{{ $search }}}"</h2>
    @else
      <h2 class="title">Archivo</h2>
    @endif
    @if (count($posts) > 0)
      @foreach ($posts as $post)
        @include(theme_view('inc.post'))
      @endforeach
    @else
      :( No hemos encontrado lo que buscas
    @endif
    {{ $posts->appends(array('q' => Input::get('q')))->links() }}

  </section>
@stop
