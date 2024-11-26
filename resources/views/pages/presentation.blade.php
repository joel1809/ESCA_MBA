@extends('layouts.templates')

@section('title')
Présentation｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Présentation</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Presentation</h4>
        </div>
    </div>
</section>

<section class="how-it-work v2 @ py-120">
    <div class="container">
        <div class="how-it-work-content v2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="how-it-work-left-content">
                        <div class="left-img" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/how-it-work/v2/vision.webp')}}" alt="left-img">
                        </div>
                        <br>
                       <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title mt-5" data-aos="fade-down" data-aos-duration="1000">Mission</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Apprendre à transformer son environnement.</h2>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">La mission du programme l'ESCA Executive MBA est de former des leaders responsables et visionnaires, prêts à transformer durablement leurs organisations et à influencer positivement leur environnement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-it-work-right-content">
                        <div class="section-title">
                            <div class="section-title-inner mb-5">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Vision</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Une Vision Africaine pour un Impact Global.</h2>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Fier de sa singularité, l’ESCA EXECUTIVE MBA se positionne comme le seul programme 100 % local, ancré dans le contexte africain, sans dépendre de partenariats avec des institutions universitaires étrangères. Cela renforce notre identité et notre volonté de former des leaders qui comprennent profondément les enjeux locaux tout en ayant une perspective globale. Avec l’ESCA, développez vos compétences, forgez votre avenir et devenez le leader capable de conduire le changement dans votre organisation et au-delà. Rejoignez-nous dès aujourd'hui pour faire partie d'une aventure exceptionnelle qui façonnera le futur du leadership en Afrique !</p>
                            </div>
                        </div>
                        <div class="right-img" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/how-it-work/v2/mission.jpg')}}" alt="right-img">
                            <div class="right-img-bg">
                                <img src="{{ asset('assets/img/how-it-work/v2/right-img-bg.png')}}" alt="right-img-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-vector-img">
        <img src="{{ asset('assets/img/how-it-work/v2/bg-vector-img.png')}}" alt="bg-vector-img">
    </div>
</section>

<section class="my-120 @">
    <div class="container">
        <div class="student-feedback-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/leader.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Une Formation de Haut Niveau pour les Leaders de Demain</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Dans un monde des affaires en constante évolution, la nécessité de leaders compétents et visionnaires n’a jamais été aussi cruciale. L’ESCA EXECUTIVE MBA répond à cette exigence en offrant un programme de formation avancée conçu pour transformer des professionnels talentueux en décideurs influents. Grâce à un contenu riche et diversifié, les participants acquièrent des compétences stratégiques, managériales et opérationnelles essentielles pour naviguer avec succès dans des environnements complexes. En choisissant l’ESCA, vous optez pour une formation locale d’excellence qui met l’accent sur les réalités et les défis spécifiques du marché africain.
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-right-bg">
                            <img src="{{ asset('assets/img/student-feedback/feedback-right-bg.png')}}" alt="feedback-right-img">
                        </div>
                        <div class="quat-big-icon">
                            <i class="my-icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
