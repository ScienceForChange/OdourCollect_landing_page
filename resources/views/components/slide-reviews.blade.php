@props([
    'text' => '',
    'userName' => '',
    'userDescription' => '',
])
<div class="custom-container"> 
    <h4 class="title-xl">
        {{$text}}
    </h4>
    <h6>
        {{$userName}}
    </h6>
    <p>
        {{$userDescription}}
    </p>
</div>