<x-layout header="Gaming DataBase">

<nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
    <div class="container-fluid">
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">@if(session('gameCreated'))
<div class="alert alert-success text-center">
    {{ session('gameCreated') }}
</div>
@endif
    </div>
    </div>
</div>
<div class="container my-5 shadow">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            <img class="img-fluid py-4 imgCustom" src="/media/server.jpg" alt="...">
        </div>
    </div>
</div>


</x-layout>
