<x-layout header="Gaming Blog">
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




</x-layout>
