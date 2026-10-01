<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <nav class="flex gap-4">
                <a href="{{ url('/dashboard') }}"
                   class="text-gray-700 hover:text-blue-600">
                    Dashboard
                </a>

                <a href="{{ url('/mahasiswa') }}"
                   class="text-gray-700 hover:text-blue-600">
                    Mahasiswa
                </a>

                @if(auth()->user()->role === 'admin')
                    <a href="{{ url('/profile') }}"
                       class="text-gray-700 hover:text-blue-600">
                        Profile
                    </a>
                @endif
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Selamat datang di Dashboard!
                </div>
            </div>

        </div>
    </div>

</x-app-layout>