@extends('layouts.templates')

@section('title')
Pomoteurs et Animateurs｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Pomoteurs et Animateurs</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Pomoteurs et Animateurs</h4>
        </div>
    </div>
</section>

<section class="my-120 @">
    <div class="container">
        <div class="student-feedback-content">
            <div class="row">
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Vision de promoteurs de l’ESCA EXECUTIVE MBA</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Placer notre programme ESCA Executive MBA parmi les programmes MBA de renommée mondiale.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Les promoteurs de l'ESCA Executive MBA visent à faire de ce programme une référence en Afrique, formant des leaders globaux alliant expertise, innovation et éthique. Ils souhaitent offrir un parcours stratégique adapté aux enjeux mondiaux et locaux, en s’appuyant sur un réseau de partenaires de renom. Leur objectif est de créer des leaders capables de transformer durablement le monde des affaires et de contribuer activement à façonner l’avenir de l'Afrique.
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
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/programme.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/apprendre.jpg')}}" alt="feedback-big-img">
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Les Animateurs du Programme</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Apprenez des plus grands, excellez avec les meilleurs.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L’ESCA EXECUTIVE MBA est animé par une équipe prestigieuse composée de professeurs de renommée internationale et de praticiens du monde de l'entreprise, offrant un équilibre idéal entre théorie académique et application pratique.
                                        Les professeurs sont des experts académiques spécialisés dans leurs domaines, ayant acquis une reconnaissance mondiale pour leurs contributions à la recherche et à l'enseignement dans des disciplines variées telles que la stratégie, les finances, le marketing, et le management. Leur approche pédagogique, nourrie par les dernières avancées en matière de gestion, garantit aux participants des contenus actuels et enrichissants, favorisant une compréhension approfondie des défis contemporains des entreprises.
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
            <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">En parallèle, le programme accueille des professionnels de haut niveau, leaders et cadres dirigeants actifs dans de grandes entreprises internationales et locales. Ces intervenants apportent une perspective unique, en partageant des exemples concrets issus de leur expérience et en expliquant les approches et pratiques managériales efficaces dans un contexte d'affaires globalisé. Ils exposent les participants à des études de cas réelles, des solutions innovantes, et des stratégies opérationnelles, permettant ainsi aux étudiants de l’Executive MBA de se confronter aux réalités et aux enjeux du monde des affaires.
                Cette synergie entre le savoir académique et l’expérience du terrain crée une dynamique d’apprentissage interactive et motivante, où chaque session est enrichie par les échanges et les débats. Les animateurs encouragent également les participants à développer un esprit critique et à appliquer directement leurs nouvelles connaissances à leur propre parcours professionnel, renforçant ainsi la valeur pratique de l'Executive MBA et préparant les futurs leaders à exceller dans leurs rôles stratégiques.
            </p>
        </div>
    </div>
</section>

@endsection
