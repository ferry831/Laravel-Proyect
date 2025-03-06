<x-layout heading="Log In">


    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">


                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



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


                </div>
            </div>


        </div>

        <div class="flex items-center justify-end mt-6 gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <x-button-form>Log In</x-button-form>
        </div>
    </form>


</x-layout>
