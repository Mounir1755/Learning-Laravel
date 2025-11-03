<x-layout>
    <x-slot:heading>
       Job listings
    <x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        this job pays {{ $job->salary }} per year.
    </p>

    <a href="{{ $job->id }}/edit">edit job</a>
</x-layout>