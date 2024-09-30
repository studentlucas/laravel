<x-layout>
    <x-slot:heading>
        jobs listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/">
                    <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per year
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
