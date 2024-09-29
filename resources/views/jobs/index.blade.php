<x-layout>
    <h1 class="text-2xl">Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a>
            </li>
        @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</x-layout>
