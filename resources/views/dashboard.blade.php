<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kenneth's Student Portal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">
                        Welcome, {{ auth()->user()->name }}!
                    </h3>

                    <p class="mb-2">
                        You are logged in to Kenneth's Student Portal.
                    </p>

                    <p class="mb-2">
                        <strong>Email:</strong>
                        {{ auth()->user()->email }}
                    </p>

                    <p class="mb-2">
                        <strong>Account Created:</strong>
                        {{ auth()->user()->created_at->format('F d, Y') }}
                    </p>

                    <p class="mb-2">
                        <strong>Course:</strong>
                        BSIT
                    </p>

                    <p class="mb-2">
                        <strong>Year Level:</strong>
                        2ND YEAR
                    </p>

                    <p class="mb-2">
                        <strong>Section:</strong>
                        SECTION IT9-3439
                    </p>

                    <div class="mt-6">
                        <a
                            href="{{ route('student.resources') }}"
                            class="inline-block rounded bg-indigo-600 px-4 py-2 text-white"
                        >
                            View Student Resources
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>