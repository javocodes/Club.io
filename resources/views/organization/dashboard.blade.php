<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Club.io') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome Student!
                </div>
            </div>
        </div>
    </div> --}}

    {{-- In this dashboard advisors should see stats for the clubs they manage. Advisors are required to approve of any events before they posted.
        In this dashboard they should see incoming event proposals --}}

    @livewire('navbar-component')
    @livewire('dashboard-component')
</x-app-layout>
