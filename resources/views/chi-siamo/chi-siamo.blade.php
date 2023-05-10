<x-layout header="Chi siamo">
    <x-header header="Chi Siamo"></x-header>
    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="container my-5 shadow">
        <div class="row justify-content-center">
            @foreach ($partners as $partner)
                    <div class="col-12 col-md-3 py-5 text-center ">
                        <div class="card customCard shadow  ">
                            <div class="d-flex justify-content-center py-2">
                                <img src="https://picsum.photos/300" class="card-img-top chi-siamoImg " alt="...">
                            </div>
                            <div class="card-body shadow ">
                             <h5 class="card-title">{{ $partner->name }} {{ $partner->surname }}</h5>
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
