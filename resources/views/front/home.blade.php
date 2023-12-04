@extends('layouts.app')
@section('content')
    <section id="main-home" class="row">
        <div class="custom-container d-flex flex-column justify-content-md-between flex-sm-row">
            <div class="text d-flex flex-column">
                <h1 class="title-xl">
                    Ponemos tu sentido del olfato al servicio de la ciencia ciudadana.
                </h1>
                <p class="color-gray-dark mt-md-4">
                    Mide el olor y genera datos científicos para mejorar la calidad de vida de tu comunidad.
                    ¡Descárgate la App y siente el poder de la ciencia colaborativa!
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
            Sobre OdourCollect
        </h1>           
        <div class="custom-container content d-flex flex-column justify-content-between flex-lg-row"> 
            <div class="text d-flex flex-column justify-content-center align-items-center align-items-md-start">
                <p>                
                    OdourCollect permite mapear, valorar y compartir observaciones de olor en cualquier momento y lugar a través de la ciencia ciudadana.
                </p>
                <p>
                    Colaborando con la comunidad, generamos datos científicos precisos y válidos que nos permiten visibilizar los olores que nos rodean.
                </p>
                <p>                
                    Integramos los datos obtenidos en un mapa colaborativo que nos indica la situación odorífera de cada región en tiempo real
                </p>            
                <a href="/" class="know-more text-center text-md-start mt-4 mt-md-5">Saber más<img src="/assets/img/arrow-right.svg"></a>
            </div>
            <div class="row photo"></div>
        </div>
    </section>
    
    <section id="services-home" class="row d-flex flex-column justify-content-center align-items-center">
        <h1 class="title-xl text-center">
            ¿Cuáles son nuestros servicios?
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
            <a href="/" class="know-more text-center text-lg-start mt-4">Saber más<img src="/assets/img/arrow-right.svg"></a>
        </div>
    </section>

    <section class="user-reviews row">
        <div class="user-reviews-gallery d-flex">
            <div class="custom-container"> 
                <h4 class="title-xl">
                    Con OdourCollect puedo ver en el mapa y en tiempo 
                    real cuántas personas están registrando olores. Es
                    importante como ciudadanos poder tener acceso a
                    esa información”.
                </h4>
                <h6>Josep Carro</h6>
                <p>Usuario de OdourCollect</p>
            </div>
            <div class="custom-container">
                <h4 class="title-xl">
                    Con OdourCollect puedo ver en el mapa y en tiempo 
                    real cuántas personas están registrando olores. Es
                    importante como ciudadanos poder tener acceso a
                    esa información”.
                </h4>
                <h6>Josep Carro</h6>
                <p>Usuario de OdourCollect</p>
            </div>
            <div class="custom-container">                    
                <h4 class="title-xl">
                    Con OdourCollect puedo ver en el mapa y en tiempo 
                    real cuántas personas están registrando olores. Es
                    importante como ciudadanos poder tener acceso a
                    esa información”.
                </h4>
                <h6>Josep Carro</h6>
                <p>Usuario de OdourCollect</p>
            </div>
        </div>
    </section>
    
    <section class="world custom-container d-flex flex-column flex-md-row-reverse align-items-center justify-content-center justify-content-md-between">

        <img id="img-world" src="/assets/img/home/planet.svg"/>
        
        <div class="text d-flex flex-column align-items-center align-items-md-start justify-content-center justify-content-md-between">
            <p>
                OdourCollect está impulsado en Barcelona pero se desarrolla en colaboración con agentes locales de todo el mundo.
            </p>
            <a href="/" class="know-more text-center text-md-start mt-4">Ir al mapa<img src="/assets/img/arrow-right.svg"></a>
        </div>
        
    </section>

    <section class="app-stats row">
        <div class="app-stats-container">
            <div class="app-stats-gallery d-flex">

                <div>
                    <div class="slide"> 
                        <img src="assets/img/home/location.svg">
                        <h6>Josep Carro</h6>
                        <p>Usuario de OdourCollect</p>
                    </div>
                </div>
                
                <div>
                    <div class="slide"> 
                        <img src="assets/img/home/user.svg">
                        <h6>Josep Carro</h6>
                        <p>Usuario de OdourCollect</p>
                    </div>
                </div>
                
                <div>
                    <div class="slide"> 
                        <img src="assets/img/home/chat.svg">
                        <h6>Josep Carro</h6>
                        <p>Usuario de OdourCollect</p>
                    </div>
                </div>
                
            </div> 
        </div> 
    </section>
    
    <section class="awards row">
        <div class="awards-gallery d-flex">

            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2018-2021</span>
                <span>El proyecto D-NOSES cuenta con la mayor financiación en Europa para abordar el tema de la contaminación odorífera.</span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2021</span>
                <span>Premio Prisma Proyecto Singular: <a href="#">OdourCollect galardonado como mejor proyecto singular</a>.</span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2022</span>
                <span>El proyecto <a href="#">“OdourCollect, codiseño de nuevas tecnologías para la monitorización en tiempo real de la contaminación odorífera mediante ciencia ciudadana”</a>, recibe subvención por el CDTI, apoyado por el Ministerio de Ciencia e Innovación. </span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2023</span>
                <span><a href="#">Seleccionado para el catálogo de Prácticas Innovadoras en Cultura Científica por la Fundación Española para la Ciencia y la Tecnología (FECYT).</a></span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2023</span>
                <span>OdourCollect cumple con los requisitos establecidos en el Estándar Español PNE 772700 “CONSTRUCCIÓN DE MAPAS DE OLOR COLABORATIVOS MEDIANTE CIENCIA CIUDADANA”.</span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2018-2021</span>
                <span>El proyecto D-NOSES cuenta con la mayor financiación en Europa para abordar el tema de la contaminación odorífera.</span>
            </div>
            
            <div class="custom-container">
                <img src="assets/img/home/award.svg">
                <span>2018-2021</span>
                <span>El proyecto D-NOSES cuenta con la mayor financiación en Europa para abordar el tema de la contaminación odorífera.</span>
            </div>
            
        </div> 
    </section>

    <section class="contact row">
        <div class="custom-container">
            <div class="content d-flex flex-column justify-content-center align-items-center text-center gap-3">
                <img src="/assets/img/home/contact-avatars.png">
                <h2>¿Tienes alguna pregunta?</h2>     
                <p>Contactáctanos y te informaremos de cómo OdourCollect puede ayudarte a combatir la contaminación por olor.</p>
                <a href="#" class="btn">
                    Enviar mensaje
                </a>
            </div>
        </div>
    </section>

    <x-download-app></x-download-app>

@endsection