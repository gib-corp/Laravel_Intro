<x-layout>
    <x-slot:heading>
        Jobs list
    </x-slot:heading>

    <ul>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">
            <li>{{ $job['title'] }} : {{ $job['salary'] }}</li>
        </a>
    @endforeach
    </ul>
</x-layout>
