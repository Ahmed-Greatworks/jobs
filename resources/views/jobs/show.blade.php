<x-layout>
    <x-slot:heading>Job Details</x-slot>
    <div style="max-width: 500px; margin: 2rem auto; background: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 2rem;">
        <h1 style="font-size: 2rem; margin-bottom: 1rem; color: #222;"><strong>Title:</strong> {{ $job->title }}</h1>
        <p><strong>Salary:</strong> {{ $job->salary }}</p>

        <x-b-link href="/jobs/{{ $job->id}}/edit" class="mt-4 inline-block">Edit Job</x-b-link>
    </div>

    
</x-layout>
