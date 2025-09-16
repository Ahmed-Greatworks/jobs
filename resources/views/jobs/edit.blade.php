<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Edit Job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Give us all of your information to begin with.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-black">title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 border border-gray-300 outline-1 pl-3 -outline-offset-1 outline-gray/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-gray-500">
                                <input id="title" type="text" name="title" placeholder="Engineer" class="block min-w-0 grow bg-transparent py-1.5 pr-3  text-base text-gray-500 placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                    value="{{ $job->title }}" required/>
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-black">salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 border border-gray-300 outline-1 pl-3 -outline-offset-1 outline-gray/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input id="salary" type="text" name="salary" placeholder="$120,000 /year" class="block min-w-0 grow bg-transparent py-1.5 pr-3 text-base text-gray-500 placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                    value="{{ $job->salary }}" required/>
                            </div>
                            @error('salary')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div>
            @if ($errors->any())
                <div class="mt-6">
                    <ul class="list-disc space-y-1 text-sm/6 text-red-500">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button type="submit" form="delete-job-form" formaction="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-red-500">
                    Delete Job
                </button>
            </div>
            <div class="flex items-center gap-x-4">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-grey">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
            </div>
        </div>
    </form>

    <form id="delete-job-form" method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('DELETE')
    </form>

</x-layout>