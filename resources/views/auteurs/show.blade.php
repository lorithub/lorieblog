<x-layout titre="{{ $auteur['nom'] }}">
    <h1>{{ $auteur['nom'] }}</h1>
    <p>{{ $auteur['bio'] }}</p>

    <a href="{{ route('auteurs.index') }}">← Retour à la liste</a>
</x-layout>