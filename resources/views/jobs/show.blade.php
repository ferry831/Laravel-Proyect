<x-layout heading="Job">

    <h2><strong> {{ $variableTrabajoParaJobBladePHP->title }} </strong></h2>
    <p>This job pays {{ $variableTrabajoParaJobBladePHP->salary }} per year</p>

    <p class="mt-7">
        <x-button href="/jobs/{{ $variableTrabajoParaJobBladePHP->id }}/edit">
            Edit Job
        </x-button>
    </p>

</x-layout>
