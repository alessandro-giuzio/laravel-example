<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="email" type="email">Email</x-form-label>
                            <x-form-input id="email" name="email" placeholder="john.doe@example.com" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="password" type="password">Password</x-form-label>
                            <x-form-input id="password" name="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="password_confirmation" type="password">Confirm Password</x-form-label>
                            <x-form-input id="password_confirmation" name="password_confirmation" required />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>

                </div>


            </div>
        </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>
