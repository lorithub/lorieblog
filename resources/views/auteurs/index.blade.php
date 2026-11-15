<x-layout titre="Nos auteurs">
    <h1>Nos auteurs</h1>

    <ul>
        @forelse ($auteurs as $id => $auteur)
            <li>
                <a href="{{ route('auteurs.show', $id) }}">{{ $auteur['nom'] }}</a>
            </li>
        @empty
            <li>Aucun auteur pour le moment.</li>
        @endforelse
    </ul>
</x-layout>