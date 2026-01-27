<x-layout>
    <x-slot:heading>
        Music Page
        <h1>Welcome to the Music Page</h1>

    </x-slot:heading>
    <div>
        <p>Here you can find all the latest music news and updates.</p>
        <ul>
            @foreach ($songs as $song)
                <a href="/music/{{ $song['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">{{ $song['title'] }}</div>
                    <strong>by {{ $song['artist'] }} - Album {{ $song['album'] }}</strong>
                </a>
            @endforeach
        </ul>
    </div>


</x-layout>
