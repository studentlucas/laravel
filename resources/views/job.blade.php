<x-layout>
    <x-slot:heading>
        job
    </x-slot:heading>
    <h2 class="font-bold text-gl">{{$job['title']}}</h2>
    <p>
        this job pays{{$job['salary']}} per year.
    </p>
</x-layout>
