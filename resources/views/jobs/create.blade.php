<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Create new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Give us all of your information to begin with.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" type="text" name="title" placeholder="Engineer" required/>
                           
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" type="text" name="salary" placeholder="$120,000 /year" required/>
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
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

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-b-link isCancel href="/jobs">Cancel</x-b-link>
            <x-form-button>Create Job</x-form-button>
        </div>
    </form>

</x-layout>