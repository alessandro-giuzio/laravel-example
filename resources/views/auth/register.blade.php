<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="first_name">First Name</x-form-label>
                            <x-form-input id="first_name" name="first_name" placeholder="John" required />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="last_name">Last Name</x-form-label>
                            <x-form-input id="last_name" name="last_name" placeholder="Doe" required />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>


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

                <div class="sm:col-span-4">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="4" required placeholder="Job description..."
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
