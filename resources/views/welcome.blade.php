<x-layout header="Gaming Blog">

@if(session('gameCreated'))
<div class="alert alert-success">
    {{ session('gameCreated') }}
</div>
@endif



</x-layout>
