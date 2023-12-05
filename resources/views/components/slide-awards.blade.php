@props([
    'year' => '',
    'text' => '',
])
<div class="custom-container">
    <img src="assets/img/home/award.svg">
    <span>{{$year}}</span>
    <span>{!!$text!!}</span>
</div>