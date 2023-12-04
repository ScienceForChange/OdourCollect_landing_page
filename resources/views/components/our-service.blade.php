@props([
    'img' => 'service-1.png',
    'heading' => 'Heading',
    'text' => 'Text',
])
<li class="service">
    <img src="/assets/img/home/{{$img}}">
    <h4>{{$heading}}</h4>
    <p>{{$text}}</p>
</li>