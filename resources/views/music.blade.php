<x-layout>
    <x-slot:heading>
        Music Page
        <h1>Welcome to the Music Page</h1>

    </x-slot:heading>
    <div>
        <p>Here you can find all the latest music news and updates.</p>
        <ul>
            @foreach ($songs as $song)
                <li>
                    <strong>{{ $song['title'] }}</strong> by {{ $song['artist'] }} - Album {{ $song['album'] }}
                </li>
            @endforeach
        </ul>
    </div>


</x-layout>
