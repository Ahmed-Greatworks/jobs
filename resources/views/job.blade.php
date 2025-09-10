<x-layout>
    <x-slot:heading>Job Details</x-slot>
    <div style="max-width: 500px; margin: 2rem auto; background: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 2rem;">
        <h1 style="font-size: 2rem; margin-bottom: 1rem; color: #222;">{{ $job['title'] }}</h1>
        <p><strong>Company:</strong> {{ $job['company'] }}</p>
        <p><strong>Location:</strong> {{ $job['location'] }}</p>
        <p><strong>Description:</strong> {{ $job['description'] }}</p>
        <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
    </div>
</x-layout>
