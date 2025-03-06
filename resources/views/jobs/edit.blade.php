<x-layout heading="Edit Job: {{ $variableTrabajoParaJobBladePHP->title }}">


    <form method="POST" action="/jobs/{{ $variableTrabajoParaJobBladePHP->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">


                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Management" value="{{ $variableTrabajoParaJobBladePHP->title }}"
                                    required>
                            </div>
                        </div>
                        @error('title')
                            <p class="mt-1 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="sm:col-span-4">
                        <label for="salary" class="block font-medium text-gray-900 text-sm/6">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="50,000€" value="{{ $variableTrabajoParaJobBladePHP->salary }}"
                                    required>
                            </div>
                        </div>
                        @error('salary')
                            <p class="mt-1 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
            </div>


        </div>

        <div class="flex items-center justify-between mt-6 gap-x-6">
            <div>
                <button form="delete-form"
                    class="px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Delete
                </button>
            </div>
            <div>
                <a href="/jobs/{{ $variableTrabajoParaJobBladePHP->id }}" type="button"
                    class="mr-1 font-semibold text-gray-900 text-sm/6">Cancel</a>
                <button type="submit"
                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>

        </div>
    </form>

    <form method="POST" action="/jobs/{{ $variableTrabajoParaJobBladePHP->id }}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>


</x-layout>
