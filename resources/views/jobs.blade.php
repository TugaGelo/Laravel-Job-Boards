<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li><strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per day.</li>
    @endforeach
</x-layout>
