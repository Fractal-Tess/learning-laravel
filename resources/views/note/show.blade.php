<x-layout>
    <h1>show</h1>
    @foreach ($notes as $note)
        <h2>{{ $note->id }}</h2>
    @endforeach
</x-layout>
