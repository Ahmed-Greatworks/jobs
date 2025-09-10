<x-layout>
    <x-slot:heading>Job Listing</x-slot>
    
    @foreach ($jobs as $job)
        <div class="mb-4 p-4 border border-gray-300 rounded-lg shadow-sm bg-white">
            <h2 class="text-xxl text-blue-600 mb-2">{{ $job->employer->name }}</h2>
            <h3 class="text-xl font-semibold text-gray-800">{{ $job['title'] }}</h3>
            <p class="text-gray-400">This position offers a salary of {{ $job['salary'] }}</p>
            <a href="/jobs/{{ $job['id'] }}" class="text-indigo-600 hover:underline">View Details</a>
        </div>
    @endforeach

    {{ $jobs->links() }}
</x-layout>
