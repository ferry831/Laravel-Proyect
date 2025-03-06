<x-layout heading="Create Job">


    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
                <h2 class="font-semibold text-gray-900 text-base/7">Create a new Job</h2>
                <p class="mt-1 text-gray-600 text-sm/6">We just need a handful of details from you.</p>

                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-field-form>
                        <x-label-form for="title">Title</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="title" id="title" placeholder="Management"
                                required></x-input-form>
                        </div>
                        <x-error-form name="title" />
                    </x-field-form>


                    <x-field-form>
                        <x-label-form for="salary">Salary</x-label-form>
                        <div class="mt-2">
                            <x-input-form name="salary" id="salary" placeholder="40,000€" required></x-input-form>
                        </div>
                        <x-error-form name="salary" />
                    </x-field-form>


                </div>
            </div>


        </div>

        <div class="flex items-center justify-end mt-6 gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <x-button-form>Save</x-button-form>
        </div>
    </form>


</x-layout>
