<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <ul>
        <li>{{ $job['title'] }} : {{ $job['salary'] }}</li>
    </ul>
</x-layout>
