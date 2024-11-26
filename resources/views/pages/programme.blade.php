@extends('layouts.templates')

@section('title')
Programme｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Avantages du Programme ESCA Executive MBA</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Programme</h4>
        </div>
    </div>
</section>

<section class="how-it-work v2 @ py-120">
    <div class="container">
        <div class="how-it-work-content v2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="how-it-work-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Apprendre, Réseauter, Performer.</h2>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Acquisition de Compétences de Haut Niveau :</strong> L'ESCA EXECUTIVE MBA offre une formation exhaustive couvrant les disciplines essentielles de la gestion d’entreprise, incluant la stratégie, la finance avancée, le leadership et la gestion de projets. Les participants acquièrent des compétences analytiques, décisionnelles et opérationnelles leur permettant de relever les défis complexes du monde des affaires et de diriger avec succès dans des environnements concurrentiels.</p>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Approche Pratique et Immersive :</strong> Le programme repose sur une méthode d'apprentissage par l'action, intégrant des études de cas, des projets pratiques et des ateliers interactifs animés par des experts renommés de l'industrie. Cette approche immersive permet aux participants de mettre en application les concepts théoriques dans des situations réelles, renforçant ainsi leur capacité à innover et à résoudre des problèmes concrets.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="how-it-work-right-content">
                        <div class="right-img" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/how-it-work/v2/apprendre.jpg')}}" alt="right-img">
                            <div class="right-img-bg">
                                <img src="{{ asset('assets/img/how-it-work/v2/right-img-bg.png')}}" alt="right-img-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="how-it-work-right-content">
                        <div class="left-img" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/how-it-work/v2/reseauter.jpg')}}" alt="left-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="how-it-work-ri-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">
                                    <strong>Développement de Réseaux et d’Opportunités :</strong> À travers les modules, séminaires, voyages d’étude et activités de groupe, les participants sont intégrés au réseau ESCA, l’un des plus dynamiques de la sous-région ouest-africaine, et bénéficient de connexions solides dans le monde entier. Ce réseau prestigieux comprend des diplômés occupant des postes stratégiques dans de grandes multinationales, des institutions internationales de premier plan telles que le FMI, la Banque Mondiale et la BAD, ainsi que des fonctions de haut niveau dans le gouvernement ivoirien, avec une dizaine de ministres issus de l’ESCA au cours des 15 dernières années. Cette dimension de networking facilite le partage d’expériences, la collaboration interdisciplinaire et la création de relations professionnelles durables, ouvrant des perspectives d'affaires et de partenariat à un niveau local et international.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="how-it-work-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Accès à un Réseau Global :</strong> Grâce au module international d'une semaine à Shanghai, les participants découvrent un environnement économique dynamique et en pleine croissance. Ce voyage d’étude inclut des visites d’entreprises, des rencontres avec des dirigeants locaux et des conférences sur les pratiques commerciales internationales, permettant ainsi aux participants de s’ouvrir aux meilleures pratiques mondiales et d'acquérir une perspective stratégique globale.</p>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Valorisation Professionnelle et Reconnaissance :</strong> Le diplôme d’ESCA EXECUTIVE MBA est reconnu comme un gage de compétence et d'expertise en gestion, augmentant ainsi la visibilité et la crédibilité des diplômés sur le marché du travail. Il permet aux participants de se positionner comme des leaders influents dans leurs organisations, et de saisir des opportunités d'avancement ou de repositionnement professionnel, tant au niveau national qu’international.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-it-work-right-content">
                        <div class="right-img" data-aos="zoom-in-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/img/how-it-work/v2/performer.jpg')}}" alt="right-img">
                            <div class="right-img-bg">
                                <img src="{{ asset('assets/img/how-it-work/v2/right-img-bg.png')}}" alt="right-img-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="how-it-work-right-content">
                    <div class="section-title">
                        <div class="section-title-inner">
                            <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Flexibilité et Adaptation aux Contraintes Professionnelles :</strong> Conçu pour des professionnels actifs, le programme est structuré de manière modulaire, permettant aux participants de suivre les cours tout en continuant leurs activités professionnelles. Cette flexibilité est un atout majeur pour les cadres souhaitant évoluer sans interrompre leur carrière.</p>
                            <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Encadrement Personnalisé :</strong> Chaque participant bénéficie d’un accompagnement de proximité tout au long du programme, notamment avec un mentorat personnalisé et des sessions de coaching pour orienter et optimiser leur parcours. Ce soutien individuel contribue à renforcer leur développement personnel et professionnel.</p>
                            <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000"><strong>Impact Direct sur la Performance et les Résultats :</strong> En encourageant les participants à appliquer les compétences acquises à leurs projets professionnels, le programme permet d'observer des résultats concrets et d’apporter une réelle valeur ajoutée à leurs organisations respectives, faisant ainsi de chaque diplômé un acteur de changement et d'innovation.</p>
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
            <div class="row  mb-5">
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Conduite d'un Projet sous la Supervision d’un Mentor Académique</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Passez de la vision à la réalité avec notre accompagnement personnalisé</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
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
                            <img src="{{ asset('assets/img/student-feedback/projet.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
                <p class="title-para sp-color-black ms-4" data-aos="fade-up" data-aos-duration="1000">Chaque participant à l’ESCA EXECUTIVE MBA est amené à conduire un projet stratégique en lien direct avec ses objectifs professionnels. Ce projet, conçu comme un exercice de synthèse, permet aux participants de mobiliser les connaissances et compétences acquises tout au long du programme. Il s’agit pour eux d’explorer en profondeur une problématique réelle de leur entreprise ou de leur secteur d’activité, et de développer des solutions concrètes et innovantes qui démontrent leur capacité à analyser et à résoudre des défis complexes.<br><br>
                    Le projet est réalisé sous la <strong>supervision d’un Mentor Académique ou d’un Directeur de Projet</strong>. Ce mentor, sélectionné en fonction de son expertise en rapport avec le sujet choisi, joue un rôle essentiel d'accompagnement en guidant le participant dans chaque étape du projet, de la phase de recherche et de planification à la mise en œuvre des recommandations. Grâce à cet encadrement personnalisé, les participants bénéficient de conseils stratégiques et méthodologiques précieux, favorisant l'approfondissement de leurs analyses et l’élaboration de solutions concrètes et adaptées.<br><br>
                    Ce projet est l'occasion pour chaque participant de renforcer ses compétences en gestion de projet, en leadership et en innovation. Il s'achève par la présentation des conclusions devant un <strong>jury composé de professeurs et de professionnels</strong>, permettant ainsi de démontrer la pertinence et la qualité des recommandations formulées. Ce processus valorise les compétences pratiques des participants et constitue un atout majeur pour leur progression professionnelle, renforçant leur crédibilité en tant qu’experts dans leur domaine.
                </p>
            </div>
            <div class="row mb-3">
                <div class="col-lg-5">
                    <div class="feedback-left-content">
                        <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                            <img src="{{ asset('assets/img/student-feedback/investissement.jpg')}}" alt="feedback-big-img">
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Coût du Programme</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">L'investissement qui change tout.</h2>
                            </div>
                        </div>
                        <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L'ESCA EXECUTIVE MBA est proposé au tarif de 16,8 millions de francs CFA, un investissement qui couvre l'ensemble des frais de formation, y compris les ressources pédagogiques, les séminaires, et les ateliers pratiques.
                        </p>
                        <div class="feedback-right-bg">
                            <img src="{{ asset('assets/img/student-feedback/feedback-right-bg.png')}}" alt="feedback-right-img">
                        </div>
                        <div class="quat-big-icon">
                            <i class="my-icon icon-quote"></i>
                        </div>
                    </div>
                </div>
                <div class="how-it-work-right-content">
                    <div class="section-title">
                        <div class="section-title-inner">
                 <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Ce montant reflète la valeur ajoutée d'une formation de haut niveau, dispensée par des experts reconnus, et l'accès à un réseau professionnel dynamique. Ce coût permet aux participants de bénéficier d'une expérience d'apprentissage enrichissante et complète, adaptée aux défis contemporains du monde des affaires.
                                Une flexibilité est proposée avec la possibilité de payer en 6 mensualités de 2,8 millions de francs CFA, à compter de la date de validation du dossier par le jury, et ce, sans frais supplémentaires.
                                En ce qui concerne le voyage d’étude à Shanghai, les participants sont responsables des frais associés. Cependant, des efforts seront faits pour négocier des tarifs avantageux avec des compagnies de voyage renommées ainsi qu'avec un hôtel 5 étoiles de Shanghai, afin de garantir une expérience de qualité tout en minimisant les coûts. Ce voyage représente une opportunité précieuse d’immersion dans un écosystème d’affaires international, ajoutant une dimension pratique et enrichissante au programme, tout en élargissant les horizons professionnels des participants.
                    </p>
                </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="feedback-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Durée et Organisation du Programme</h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Transformez votre avenir<br>en 2 ans.</h2>
                            </div>
                        </div>
                        <div class="how-it-work-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L'ESCA EXECUTIVE MBA se déroule sur <strong>72 jours</strong>, totalisant <strong>512 heures</strong> d'enseignement, sur une période de <strong>24 mois</strong>, garantissant ainsi une expérience d'apprentissage approfondie et ciblée. Le programme commencera en <strong>septembre 2025</strong> et se poursuivra jusqu'en <strong>août 2027</strong>. Les inscriptions resteront ouvertes jusqu’au <strong>jeudi 31 juillet 2025</strong>, offrant aux candidats l'opportunité de préparer minutieusement leur dossier de candidature.
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
                            <img src="{{ asset('assets/img/student-feedback/transformer.jpg')}}" alt="feedback-big-img">
                        </div>
                        <div class="feedback-right-bg-img">
                            <img src="{{ asset('assets/img/student-feedback/feedback-left-bg.png')}}" alt="feedback-left-bg-img">
                        </div>
                    </div>
                </div>
                     <p class="title-para sp-color-black ms-4" data-aos="fade-up" data-aos-duration="1000"><strong>Format et Planification </strong> : Les sessions de cours auront lieu <strong>3 jours par mois</strong> (vendredi, samedi et dimanche), permettant aux participants de concilier leurs obligations professionnelles avec leurs études. En parallèle de ces sessions mensuelles, deux séminaires seront organisés, portant sur des thématiques telles que <strong>"Business et Responsabilité Sociétale des Entreprises (RSE)"</strong> à Yamoussoukro, en Côte d'Ivoire pendant 2 jours, et <strong>"Intelligence Artificielle et Business International"</strong> à Shanghai, en Chine pendant une semaine. Cette méthode modulaire et immersive vise à doter les participants de compétences pratiques et stratégiques adaptées aux défis actuels, tout en leur permettant de tisser des liens avec un réseau professionnel international.
                    </p>
                </div>
            </div>
        </div>
</section>

@endsection
