<x-layout>
    <x-slot:heading>
       Job listings
    <x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-black-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong> Pay: {{$job['salary']}} Per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>