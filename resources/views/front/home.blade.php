@extends('layouts.app')
@section('content')
    <section id="main-home" class="row">
        <div class="custom-container d-flex flex-column justify-content-md-between flex-sm-row">
            <div class="text d-flex flex-column">
                <h1 class="title-xl">
                    @lang('home.title')
                </h1>
                <p class="color-gray-dark mt-md-4">
                    @lang('home.subtitle')
                </p>
                <div class="d-flex flex-column flex-md-row mt-md-5">
                    <a href='https://play.google.com/store/apps/details?id=es.nobone.manchesterwebapp&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img id="android-app" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
                    <a href="https://apps.apple.com/us/app/odourcollect/id1457119732?itsct=apps_box_badge&amp;itscg=30200" style="display: inline-block; overflow: hidden; border-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1555459200" alt="Download on the App Store" style="border-radius: 13px; width: 250px; height: 83px;"></a>
                </div>
            </div>
            <div class="app d-flex">
            </div>
        </div>
    </section>
    
    <section id="about-home" class="row d-flex flex-column">
        <h1 class="custom-container title-xl text-center">
            @lang('home.about-title')
        </h1>           
        <div class="custom-container content d-flex flex-column justify-content-between flex-lg-row"> 
            <div class="text d-flex flex-column justify-content-center align-items-center align-items-md-start">
                @lang('home.about-text')          
                <a href="/" class="know-more text-center text-md-start mt-4 mt-md-5">@lang('common.know-more')<img src="/assets/img/arrow-right.svg"></a>
            </div>
            <div class="row photo"></div>
        </div>
    </section>
    
    <section id="services-home" class="row d-flex flex-column justify-content-center align-items-center">
        <h1 class="title-xl text-center">
            @lang('home.services-title')
        </h1>     
        <div class="custom-container d-flex flex-column justify-content-center">       
            <ul class="services d-flex justify-content-center flex-wrap gap-3 gap-md-5">
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
                <x-our-service :img="$service['img']" :heading="$service['title']" :text="$service['text']"></x-our-service>
            </ul>   
            <a href="/" class="know-more text-center text-lg-start mt-4">@lang('common.know-more')<img src="/assets/img/arrow-right.svg"></a>
        </div>
    </section>

    <section class="user-reviews row">
        <div class="user-reviews-gallery d-flex">

            @foreach ($userPreviewGallery as $slide)
                
                <x-slide-reviews :text="$slide['text']" :userName="$slide['user-name']" :userDescription="$slide['user-description']"></x-slide-reviews>
                
            @endforeach
            
        </div>
    </section>
    
    <section class="world custom-container d-flex flex-column flex-md-row-reverse align-items-center justify-content-center justify-content-md-between">

        <img id="img-world" src="/assets/img/home/planet.svg"/>
        
        <div class="text d-flex flex-column align-items-center align-items-md-start justify-content-center justify-content-md-between">
            <p>
                OdourCollect está impulsado en Barcelona pero se desarrolla en colaboración con agentes locales de todo el mundo.
            </p>
            <a href="/" class="know-more text-center text-md-start mt-4">@lang('common.go-map')<img src="/assets/img/arrow-right.svg"></a>
        </div>
        
    </section>

    <section class="app-stats row">
        <div class="app-stats-container">
            <div class="app-stats-gallery d-flex">

                @foreach ($statsGallery as $slide)
                    <x-slide-stats :icon="$slide['icon']" :data="$slide['data']" :title="$slide['title']"></x-slide-stats>
                @endforeach
             
            </div> 
        </div> 
    </section>
    
    <section class="awards row">
        <div class="awards-gallery d-flex">

            @foreach ($awardsGallery as $slide)
                <x-slide-awards :year="$slide['year']" :text="$slide['text']"></x-slide-awards>
            @endforeach
            
        </div> 
    </section>

    <section class="contact row">
        <div class="custom-container">
            <div class="content d-flex flex-column justify-content-center align-items-center text-center gap-3">
                <img src="/assets/img/home/contact-avatars.png">
                <h2>@lang('home.contact-title')</h2>     
                <p>@lang('home.contact-text')</p>
                <a href="#" class="btn">
                    @lang('common.send-message')
                </a>
            </div>
        </div>
    </section>

    <x-download-app></x-download-app>

@endsection