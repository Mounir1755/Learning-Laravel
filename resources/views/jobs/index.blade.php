<x-layout>
    <x-slot:heading>
       Job listings
    <x-slot:heading>
    
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-black-500 block px-4 py-5 border border-gray-200 rounded">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div class="">
                    <strong>{{ $job['title'] }}</strong> Pay: {{$job['salary']}} Per year
                </div>
            </a>
        @endforeach

        <div class="">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>