@extends('layouts.templates')

@section('title')
Évènement｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Évènement</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Évènement</h4>
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Voyage d'Étude à Shanghai</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Plongez dans l'IA au cœur de Shanghai.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Ce voyage d'une semaine à Shanghai est une occasion unique pour les participants d'explorer en profondeur comment l'intelligence artificielle (IA) transforme divers secteurs d'activité au sein de l'un des plus grands centres d'affaires mondiaux. Au cœur de cette immersion, les participants auront l'opportunité de découvrir les pratiques de gestion et d'innovation spécifiques au marché asiatique, en mettant particulièrement l'accent sur l'intégration de l'IA dans les processus industriels, financiers, commerciaux et technologiques.
                                        À travers des visites d'entreprises leaders dans des secteurs clés tels que la technologie, l'industrie, la finance et le commerce de détail, les participants pourront constater directement comment l'IA révolutionne les modèles commerciaux et optimise les performances. Ce programme leur permettra d'enrichir leur vision stratégique tout en appréhendant les défis d'un environnement économique en constante évolution.
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
                            <img src="{{ asset('assets/img/student-feedback/ai.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
                <p class="title-para sp-color-black  ms-4 mb-5" data-aos="fade-up" data-aos-duration="1000">Le voyage inclut des échanges directs avec des dirigeants et des experts de l'industrie, ainsi que des conférences sur les spécificités du marché asiatique. Ces sessions visent à favoriser une compréhension approfondie des stratégies d'innovation et de management interculturel, tout en mettant en lumière les diverses applications de l'IA. Ces interactions avec des leaders du marché offriront des perspectives précieuses sur les tendances de globalisation et l'importance des réseaux d'affaires en Asie.
                    Ce voyage constitue également une occasion exceptionnelle de networking, permettant aux participants de tisser des liens professionnels durables avec des entrepreneurs, des investisseurs et des acteurs influents du marché asiatique, tout en renforçant leur capacité à évoluer dans des environnements globaux complexes.
                    </p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/soutenance.jpg')}}" alt="feedback-big-img">
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Soutenance du Projet devant un Jury</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Défendez votre vision, impressionnez le jury</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">À la fin du programme, chaque participant présente son projet devant un jury composé de professeurs et de professionnels afin de démontrer ses compétences en gestion stratégique et sa capacité à appliquer les enseignements acquis. Cette soutenance est une étape clé du programme, car elle offre aux participants l’occasion de défendre leurs choix, de mettre en avant leurs recommandations et de répondre aux questions du jury. En abordant des problématiques réelles, les participants doivent prouver leur aptitude à formuler des solutions novatrices et impactantes, témoignant ainsi de leur maîtrise des concepts et outils de l'Executive MBA. <br><br>
                                        La soutenance permet également de valoriser le travail rigoureux mené par chaque participant tout au long de son projet. En évaluant leur capacité à analyser et résoudre des défis professionnels, le jury évalue leur aptitude à traduire la théorie en pratique. Ce processus constitue un moment enrichissant, donnant aux participants un retour d’experts sur leur projet et renforçant leur confiance en leur capacité à assumer des responsabilités stratégiques de haut niveau dans leur parcours professionnel.
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
            <div class="row">
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Cérémonie Officielle de Remise des Diplômes</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Célébrez votre succès, honorez votre parcours</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L'ESCA EXECUTIVE MBA s'achève par une cérémonie prestigieuse de remise des diplômes, marquant un moment de célébration solennelle pour les diplômés. Cet événement rassemble les professeurs, mentors, familles, et amis des participants, créant une ambiance solennelle et mémorable. Cette cérémonie est l’occasion de reconnaître publiquement les efforts et la persévérance des participants, tout en soulignant l'excellence académique et professionnelle de ce programme.
                                        Au cours de la cérémonie, chaque diplômé se voit remettre son diplôme d'Executive MBA, symbolisant l’aboutissement de son parcours et de son engagement dans le développement de compétences avancées. Des discours inspirants de professeurs et de dirigeants de l'ESCA viennent ponctuer cet événement, rappelant les valeurs d'excellence et de leadership chères à l’institution. Cet instant prestigieux renforce le lien des diplômés avec le réseau ESCA et marque une nouvelle étape dans leur carrière, en tant qu’ambassadeurs de l’école dans le monde professionnel.
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
                            <img src="{{ asset('assets/img/student-feedback/diplôme.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
