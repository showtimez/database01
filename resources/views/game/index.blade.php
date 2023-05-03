<x-layout header="Tutti i videogame inseriti">


<div class="container my-5">
    <div class="row justify-content-center">
        @foreach ($games as $game)
                <div class="col-12 col-md-4">
                    <div class="card" ">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                        <div class="card-body">
                         <h5 class="card-title">{{ $game->title }}</h5>
                        <p class="small fst-italic text-muted">{{ $game->producer }}</p>
                        <p class="card-text">{{ $game->description }}</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</x-layout>
