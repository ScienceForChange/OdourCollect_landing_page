@extends('layouts.app')
@section('content')

    <section id="main-about-us" class="row">
        <div class="custom-container d-flex flex-column justify-content-md-between flex-sm-row">
            <div class="text d-flex flex-column">
                <h2 class="title-xl text-center text-lg-start">
                    Sobre OdourCollect
                </h2>
                <p class="body-l mt-3">
                    OdourCollect permite <b>mapear, valorar y compartir</b> observaciones de <b>olor</b> en 
                    <b>cualquier momento y lugar</b> a través de la ciencia ciudadana. Colaborando con la comunidad, 
                    generamos datos científicos precisos y válidos que nos permiten visibilizar los olores que nos rodean.
                    <br/> 
                    <b>Integramos los datos</b> obtenidos en un <b>mapa colaborativo</b> que nos indica la situación 
                    odorífera de cada región en tiempo real. Este conocimiento olfativo contribuye en la toma de decisiones
                    informadas en evidencias, generando un impacto positivo en la comunidad.
                </p>
                <p class="body-l">    
                    En OdourCollect, damos soporte a la <b>gestión de episodios de contaminación odorífera</b>, 
                    desde el asesoramiento inicial hasta la redacción de planes de gestión de olor, proporcionando 
                    herramientas para identificar y controlar los olores en tiempo real. Además, desarrollamos 
                    <b>proyectos, talleres y actividades de educación científica</b> para todos los públicos, y creamos 
                    <b>experiencias artísticas</b> centradas en el olor como fuente de inspiración.
                </p>
            </div>
        </div>
    </section>
            
    <section id="cards" class="row">
        <div class="custom-container d-flex flex-column flex-lg-row align-items-center align-items-lg-stretch justify-content-between">
            <div class="card">
                <img src="/assets/img/about/mission.svg">
                <h6 class="card-title">Misión</h6>
                <p class="card-text">
                    Ayudamos en la gestión de la contaminación odorífera,
                    desarrollamos actividades de educación científica y 
                    creamos experiencias artísticas que tienen el olor 
                    como fuente de inspiración.
                </p>
            </div>
            
            <div class="card">
                <img src="/assets/img/about/vision.svg">
                <h6 class="card-title">Visión</h6>
                <p class="card-text">
                    Queremos <b>visibilizar el sentido del olfato en todas
                    sus facetas</b> para que el olor tenga un espacio en la
                    agenda pública, en el bienestar de la sociedad y
                        en la cultura científica.
                </p>
            </div>
        </div>
    </section>
            
    <section id="our-values" class="row d-flex flex-column">
        <div class="custom-container content d-flex flex-column justify-content-between"> 
            <h1 class="title-xl text-center text-lg-start">
                Nuestros valores
            </h1>           
            <ul class="text d-flex flex-column justify-content-center align-items-center align-items-md-start mt-4">
                <li>                
                    <p><b>Comunidad.</b> Fortalecemos vínculos entre la ciudadanía, fomentando el sentimiento de comunidad.</p>
                </li>
                <li>
                    <p><b>Innovación.</b> Impulsamos la innovación con el propósito de generar un impacto positivo en la sociedad.</p>
                </li>
                <li>                
                    <p><b>Escucha Activa.</b> Creemos que la escucha activa es la clave para entender y atender las necesidades de la ciudadanía. </p>
                </li> 
                <li>                
                    <p><b>Confianza.</b> Ofrecemos espacios de confianza donde la ciudadanía experimenta el poder de la ciencia.</p>
                </li> 
                <li>                
                    <p><b>Accesibilidad.</b> Garantizamos la fácil accesibilidad de nuestra app para todos los públicos. </p>
                </li>            
            </ul>
            <div class="row photo"></div>
        </div>
    </section>
@endsection