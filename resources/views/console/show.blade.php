<x-layout>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
        <img src="{{ Storage::url($console->logo) }}" alt="Logo di{{ $console->name }}" class="img-fluid">
        <p>{{ $console->brand }}</p>
        <p>{{ $console->description }}</p>
        <hr>
        <a href="{{ route('console.index') }}">Torna indietro</a>
        </div>
    </div>
</div>




</x-layout>
