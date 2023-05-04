<x-layout header="Chi siamo">
    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="container my-5 shadow">
        <div class="row justify-content-center">
            @foreach ($partners as $partner)
                    <div class="col-12 col-md-3 py-5">
                        <div class="card customCard shadow  ">
                            <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                            <div class="card-body shadow ">
                             <h5 class="card-title">Nome : {{ $partner->name }} {{ $partner->surname }}</h5>
                            <p class="small fst-italic text-muted">Età : {{ $partner->age }}</p>
                            <p class="card-text">{{ $partner->description }}</p>
                             <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container my-5 shadow citContainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="fst-italic">“Lavorare in team non solo aumenta la produttività e l’efficienza, ma rende anche il processo di sviluppo più divertente e gratificante. Insieme siamo più forti!”</h2>
            </div>
        </div>
    </div>
</x-layout>
