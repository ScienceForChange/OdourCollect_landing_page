@props([
    'icon' => '',
    'data' => '',
    'title' => '',
])
<div>
    <div class="slide"> 
        <img src="assets/img/home/{{$icon}}">
        <h6>{{$data}}</h6>
        <p>{{$title}}</p>
    </div>
</div>