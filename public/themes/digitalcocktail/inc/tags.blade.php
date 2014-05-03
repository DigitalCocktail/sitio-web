@foreach ($post->tags as $item)
	@if ($item->tag != "")
		<a href="{{ Wardrobe::route('posts.tags', $item->tag) }}" class="etiqueta">{{ $item->tag }}</a>
	@endif
@endforeach