@extends('layouts.templates')

@section('title')
Admission｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Admission</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Admission</h4>
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Profil des Candidats</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Pour ceux qui pensent que le ciel n'est plus la limite.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Imaginez un programme conçu pour les esprits audacieux et innovants, un espace où vous pouvez repousser les limites de votre potentiel et découvrir de nouvelles opportunités. L'ESCA Executive MBA est fait pour vous, qui aspirez à réaliser vos ambitions les plus élevées.
                                        Ce programme vous offre la chance de développer des compétences avancées dans des domaines clés de la gestion d’entreprise. Vous serez immergé dans une approche pratique qui vous permettra d'appliquer directement vos connaissances dans des situations réelles. Avec un encadrement personnalisé et l'accès à un réseau prestigieux, vous serez entouré de pairs partageant les mêmes aspirations, enrichissant ainsi vos expériences et vos perspectives.
                                        Rejoindre l'ESCA Executive MBA, c'est choisir d'évoluer dans un environnement dynamique où chaque expérience compte. Si vous êtes prêt à vous distinguer dans un monde concurrentiel et à transformer votre carrière, ce programme est votre tremplin vers le succès. N'attendez plus pour saisir cette opportunité !
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
                            <img src="{{ asset('assets/img/student-feedback/profil.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
                <p class="title-para sp-color-black  ms-4 mb-5" data-aos="fade-up" data-aos-duration="1000">Le programme est ouvert aux cadres et experts répondant aux critères suivants :<br>
                    <strong>Diplôme Minimum :</strong> Bac+5 avec au moins 10 ans d’expérience professionnelle, tous secteurs et toutes spécialités confondues, y compris les domaines techniques, commerciaux, informatiques, scientifiques, et administratifs.<br>
                    <strong>Expérience Professionnelle :</strong> Les titulaires de Bac+3 peuvent être admis sous réserve d’une expérience d’au moins 15 ans, avec des réussites professionnelles significatives.<br>
                    <strong>Diversité de Parcours :</strong> Accueil de candidats du secteur privé comme de l’administration publique, favorisant des échanges enrichissants.
                    </p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/candidater.jpg')}}" alt="feedback-big-img">
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Démarche d'Admission</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Osez candidater, osez exceller.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Inscription en Ligne :</strong> Les candidats commencent le processus d’admission en remplissant un formulaire en ligne disponible sur le site de l’ESCA. Cette étape permet de recueillir les informations de base et d’ouvrir un dossier pour chaque candidat. <br><br>
                                        <strong>Soumission du Dossier de Candidature :</strong> Après l’inscription en ligne, les candidats soumettent un dossier complet comprenant : <br>
                                       <strong>- Un CV détaillé,</strong>  mettant en avant leur expérience professionnelle, leurs responsabilités passées, et leurs réalisations clés. <br>
                                       <strong>- Lettres de recommandation</strong> de supérieurs hiérarchiques ou de collaborateurs, attestant de leur compétence, de leur engagement et de leur potentiel de progression. <br>
                                      <strong>-	Une lettre de motivation</strong> expliquant les raisons de l'intérêt pour l'ESCA EXECUTIVE MBA, les objectifs personnels et professionnels du candidat, ainsi que la manière dont le programme s’intègre dans son projet de carrière. <br>
                                      <strong>- Les copies de leurs diplômes et certifications</strong> académiques, attestant d’un niveau Bac+5 ou, pour les candidats avec Bac+3, d’une expérience professionnelle significative.
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
                <p class="title-para sp-color-black  ms-4 mb-5" data-aos="fade-up" data-aos-duration="1000"><strong>Évaluation des Compétences :</strong> Les candidats passent une série de tests de sélection visant à évaluer leurs aptitudes analytiques, leur capacité de raisonnement et leurs compétences managériales. Ces tests permettent de confirmer leur niveau de préparation pour suivre un programme de haut niveau et de sélectionner les candidats ayant un potentiel de réussite dans le programme.
                    </p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Entretien d’Admission avec un Jury :</strong> Chaque candidat est invité à un entretien approfondi avec un jury d'admission, composé de professeurs de l’ESCA et de professionnels du monde de l'entreprise. Cet entretien permet d'évaluer : <br>
                                        <strong>- La motivation et les ambitions</strong> du candidat.<br>
                                        <strong>- La pertinence de son parcours</strong> professionnel en lien avec les objectifs du programme.<br>
                                       <strong>- Son projet de carrière</strong> et la manière dont l'ESCA EXECUTIVE MBA pourrait contribuer à sa réalisation.<br>
                                       <strong>- Sa capacité à contribuer et à s’intégrer</strong> dans une promotion de haut niveau, en apportant une richesse d’expériences et de perspectives. <br><br>
                                       <strong>Décision et Notification d’Admission :</strong> Après la délibération du jury, les candidats sélectionnés sont notifiés de leur admission et reçoivent un pack de bienvenue détaillant les étapes à suivre pour leur intégration. Ce pack inclut des informations pratiques sur le programme, les dates de début des cours, ainsi que les instructions pour finaliser leur inscription. <br><br>
                                       <strong>Session de Pré-intégration :</strong> Pour faciliter l’entrée dans le programme, une session de<br>pré-intégration est organisée pour les nouveaux admis, leur permettant de se familiariser avec le contenu, les exigences et le calendrier de l’Executive MBA, ainsi que de rencontrer les autres membres de leur promotion.
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
                            <img src="{{ asset('assets/img/student-feedback/candidater1.jpg')}}" alt="feedback-big-img">
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
