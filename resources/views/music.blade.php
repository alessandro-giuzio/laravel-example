<x-layout>
    <x-slot:heading>
        Artist Page
        <h1>Welcome to the Artist Page</h1>
    </x-slot:heading>
    <div>
        <p>Here you can find all the latest music news and updates.</p>
        <ul>
            @if(isset($song))
                <li>
                    <strong>Title:</strong> {{ $song->title }}<br>
                    <strong>Artist:</strong> {{ $song->artist }}<br>
                    <strong>Album:</strong> {{ $song->album }}
                </li>
            @else
                <li>No song found.</li>
            @endif
        </ul>
    </div>
</x-layout>
