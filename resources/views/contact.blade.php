<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto mt-36">
        @foreach ($contacts as $contact)
            <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
                <h3 class="font-semibold text-lg text-gray-900 mb-2">{{ $contact->full_name }}</h3>

                <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline text-sm block mb-3">
                    {{ $contact->email }}
                </a>

                <p class="text-gray-700 leading-relaxed">{{ $contact->message }}</p>
            </div>
        @endforeach
    </div>

</x-layout>
