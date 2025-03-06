<x-layout heading="Register">


    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">


                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-field-form>
                        <x-label-form for="first_name">First Name</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="first_name" id="first_name" required></x-input-form>
                        </div>
                        <x-error-form name="first_name" />
                    </x-field-form>

                    <x-field-form>
                        <x-label-form for="last_name">Last Name</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="last_name" id="last_name" required></x-input-form>
                        </div>
                        <x-error-form name="last_name" />
                    </x-field-form>

                    <x-field-form>
                        <x-label-form for="email">Email</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="email" id="email" type="email" required></x-input-form>
                        </div>
                        <x-error-form name="email" />
                    </x-field-form>

                    <x-field-form>
                        <x-label-form for="password">Password</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="password" id="password" type="password" required></x-input-form>
                        </div>
                        <x-error-form name="password" />
                    </x-field-form>

                    <x-field-form>
                        <x-label-form for="password_confirmation">Confirm Password</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="password_confirmation" id="password_confirmation" type="password"
                                required></x-input-form>
                        </div>
                        <x-error-form name="password_confirmation" />
                    </x-field-form>

                </div>
            </div>


        </div>

        <div class="flex items-center justify-end mt-6 gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <x-button-form>Register</x-button-form>
        </div>
    </form>


</x-layout>
