<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need some basic information to get started.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="title">Title</x-form-label>
                            <x-form-input id="title" name="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>


                    <x-form-field>
                        <div class="mt-2">
                            <x-form-label for="salary">Salary</x-form-label>
                            <x-form-input id="salary" name="salary" placeholder="$50,000 per Year" required />
                            <x-form-error name="salary" />
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
            <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
