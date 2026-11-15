<x-layout titre="Tous les articles de DevBlog">

    <h1>Tous les articles</h1>

    <ul>
        @forelse ($articles as $article)
            <li>
                <strong>{{ $article->titre }}</strong>
                @if ($article->auteur)
                    — par {{ $article->auteur }}
                @endif
            </li>
        @empty
            <li>Aucun article pour le moment.</li>
        @endforelse
    </ul>

</x-layout>