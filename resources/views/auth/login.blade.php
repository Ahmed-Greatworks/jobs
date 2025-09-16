<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" 
                                placeholder="john@example.com" :value="old('email')" required/>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" required/>
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div> 
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-b-link isCancel href="/jobs">Cancel</x-b-link>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>