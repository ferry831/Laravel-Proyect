<x-layout heading="Jobs Page">

<div class = "space-y-4">
    @foreach ($trabajos as $trabajo)
        
        <div>
            <a href="/jobs/{{$trabajo['id']}}" class="block px-4 py-6 border border-neutral-500 rounded-2xl">
                <div class = "font-bold text-blue-600">
                    {{$trabajo->employer->name}}
                </div>
                
                <div>
                    <strong>{{ $trabajo['title'] }}:</strong> Salary of {{ $trabajo['salary'] }} per year
                </div>
            </a> 
        </div>
    @endforeach

    <div>
        {{$trabajos->links()}}
    </div>
    </div>


</x-layout>