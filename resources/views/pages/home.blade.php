@extends('layouts.templates')

@section('title')
Accueil｜ESCA MBA
@endsection

@section('content')

<section class="banner v2">
    <div class="banner-content v2">
        <div class="swiper swiper-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-img"
                        style="background-image: url('{{ asset('assets/img/banner/v2/audace1.jpg')}}');">
                        <div class="banner-data">
                            <div class="container"style="padding-bottom: 130px">
                                <div class="section-title">
                                    <div class="w-v3 mt-5">
                                        <h4 class="big-title s-color-white animate__animated animate__fadeInUp" style="animation-duration: 1s;">L’audace de réinventer votre carrière</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img"
                        style="background-image: url('{{ asset('assets/img/banner/v2/audace2.jpg')}}');">
                        <div class="banner-data">
                            <div class="container"style="padding-bottom: 130px">
                                <div class="section-title">
                                    <div class="w-v3 mt-5">
                                        <h4 class="big-title s-color-white animate__animated animate__fadeInUp" style="animation-duration: 1s;">L’audace de transformer l’ambition en leadership</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img"
                        style="background-image: url('{{ asset('assets/img/banner/v2/audace3.jpg')}}');">
                        <div class="banner-data">
                            <div class="container"style="padding-bottom: 130px">
                                <div class="section-title">
                                    <div class="w-v3 mt-5">
                                        <h4 class="big-title s-color-white animate__animated animate__fadeInUp" style="animation-duration: 1s;">Pour ceux qui osent diriger autrement</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-img"
                        style="background-image: url('{{ asset('assets/img/banner/v2/audace4.jpg')}}');">
                        <div class="banner-data">
                            <div class="container"  style="padding-bottom: 130px">
                                <div class="section-title">
                                    <div class="w-v3 mt-5">
                                        <h4 class="big-title s-color-white animate__animated animate__fadeInUp" style="animation-duration: 1s;">Pour ceux qui osent façonner le futur</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="py-120 @ color-section">
    <div class="container-xl">
        <div class="about-us-content v3">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <div class="section-title-inner">
                            <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Présentation Générale</h4>
                            <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Osez rêver grand !</h2>
                            <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L'ESCA EXECUTIVE MBA est un programme de formation avancée destiné aux cadres supérieurs et professionnels aguerris, conçu pour répondre aux besoins des dirigeants et futurs leaders d'entreprise. Cet Executive MBA généraliste offre un aperçu exhaustif des principales disciplines de la gestion d’entreprise au plus haut niveau, intégrant les dernières innovations en management, stratégie, finance, marketing, et développement durable. Accessible aux candidats issus de divers horizons professionnels et académiques, ce programme valorise l'expérience en renforçant les compétences stratégiques et décisionnelles nécessaires pour transformer les organisations.</p>
                        </div>
                    </div>
                    <p class="para" data-aos="fade-up" data-aos-duration="1000">Il est important de souligner que cet Executive MBA est le seul programme 100% local, sans aucun partenariat avec une Business School étrangère. La notoriété de l'ESCA est suffisamment établie pour garantir la qualité de l'enseignement dispensé, et nous devons être fiers de promouvoir cette spécificité africaine de notre Executive MBA. Ce programme est lancé par la Senior ESCA, l'association des diplômés de l'ESCA, qui incarne la force et le dynamisme de notre communauté. La Senior ESCA s'engage à rassembler pour favoriser le partage d'expériences, la création de réseaux et l'accompagnement des nouveaux diplômés, renforçant ainsi notre position en tant que leader dans le domaine de la formation supérieure en management en Afrique.</p>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1500">
                    <div class="about-us-left-content">
                        <img src="{{ asset('assets/img/about-us/v3/reve.webp')}}" alt="right-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-work v1 @ py-120">
    <div class="container-lg">
        <div class="section-title center">
            <div class="section-title-inner center w-v2">
                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Modules de Formation</h4>
                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Devenez l'architecte de votre avenir</h2>
            </div>
        </div>
        <div class="row">
            <p class="para" data-aos="fade-up" data-aos-duration="1000">Le programme <strong>ESCA EXECUTIVE MBA</strong> repose sur un ensemble de 9 modules principaux, conçus pour développer les compétences clés en gestion stratégique et répondre aux enjeux actuels des entreprises. Ces modules couvrent des disciplines essentielles telles que la Stratégie, le Leadership, la Finance, le Marketing et la Responsabilité Sociétale des Entreprises (RSE). À travers un contenu enrichi et des approches diversifiées, chaque module vise à renforcer l'expertise des participants et à les préparer à prendre des décisions stratégiques dans un contexte de plus en plus globalisé et complexe.</p>
            <div class="col-md-4">
                <ul class="choose-us-accordion" id="accordionExample">
                    <li class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOn" aria-expanded="false" aria-controls="collapseOn">
                        Entrepreneuriat et Innovation
                        </button>
                      </h2>
                      <div id="collapseOn" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Ce module proposé en option, s’adresse aux participants souhaitant orienter leur carrière vers l'entrepreneuriat. Conçu pour stimuler l’esprit entrepreneurial et encourager la créativité, ce module offre un apprentissage pratique avec des études de cas, des ateliers interactifs et des défis d'innovation. Les participants y apprennent à repérer des opportunités, gérer les risques et élaborer des stratégies de croissance. Ce parcours facultatif permet aux candidats de développer une solide compétence en création d'entreprise et en innovation, cultivant un état d’esprit agile et résilient pour faire face aux évolutions rapides du marché actuel.
                        </div>
                      </div>
                    </li>

                    <li class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwos" aria-expanded="false" aria-controls="collapseTwos">
                          Stratégie et Leadership
                        </button>
                      </h2>
                      <div id="collapseTwos" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Ce module se concentre sur les techniques de prise de décision stratégique, la gestion du changement, et le développement des compétences en leadership. Les participants apprennent à élaborer des visions claires et à guider leurs équipes à travers des périodes de transition, en intégrant des concepts de management moderne et d’agilité organisationnelle.
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThrees" aria-expanded="false" aria-controls="collapseThrees">
                          Finance et Comptabilité Avancée
                        </button>
                      </h2>
                      <div id="collapseThrees" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Les participants approfondissent leurs connaissances en analyse financière, en fiscalité, et en gestion de trésorerie. Ce module leur permet de maîtriser les outils financiers essentiels pour une gestion efficace des ressources, en tenant compte des enjeux économiques globaux.
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Marketing Stratégique
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Ce module explore le marketing digital, le comportement des consommateurs, et la stratégie de marque. Les participants acquièrent des compétences pour élaborer des campagnes marketing innovantes et pour comprendre les dynamiques du marché contemporain.
                          </div>
                        </div>
                      </li>
                  </ul>
            </div>
            <div class="col-md-4">
                <ul class="choose-us-accordion" id="accordionExample">

                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOness1" aria-expanded="false" aria-controls="collapseOness1">
                          Gestion des Ressources Humaines
                          </button>
                        </h2>
                        <div id="collapseOness1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Ce module aborde le management d’équipe, le leadership, et la culture organisationnelle. Les participants apprennent à développer un environnement de travail positif et productif, en favorisant la diversité et l'inclusion au sein des équipes.
                          </div>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Séminaires et Ateliers
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              Ces sessions pratiques incluent des interventions de professionnels et des simulations de cas réels, permettant aux participants d’appliquer leurs connaissances à des situations concrètes. Ces expériences interactives enrichissent l’apprentissage et favorisent le développement de compétences pratiques essentielles pour leur future carrière.
                          </div>
                        </div>
                      </li>

                    <li class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                          Technologies et Innovation
                        </button>
                      </h2>
                      <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Ce module met l'accent sur la transformation digitale, le business intelligence, l'analyse de big data et l’intelligence artificielle. Les participants découvrent comment les nouvelles technologies peuvent transformer les modèles d'affaires et améliorer l'efficacité opérationnelle.
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFours4" aria-expanded="false" aria-controls="collapseFours4">
                            Gestion de Projet et Logistique
                          </button>
                        </h2>
                        <div id="collapseFours4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Ce module traite des techniques avancées de gestion de projet et de la chaîne logistique. Les participants acquièrent des compétences pratiques pour planifier, exécuter, et évaluer des projets complexes tout en optimisant les ressources logistiques.
                          </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="choose-us-accordion" id="accordionExample">

                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOnes1" aria-expanded="false" aria-controls="collapseOnes1">
                          Entreprenariat et Innovation
                          </button>
                        </h2>
                        <div id="collapseOnes1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Ce module est conçu pour stimuler l’esprit entrepreneurial et la créativité des participants. À travers des études de cas, des ateliers interactifs, et des défis d'innovation, ils sont encouragés à développer des idées novatrices et à les transformer en projets viables. L'accent est mis sur l'identification des opportunités, la gestion des risques, et le développement de stratégies de croissance. Ces activités permettent aux participants de renforcer leurs compétences en création d'entreprise et en innovation, tout en cultivant un état d’esprit agile, indispensable pour relever les défis du marché moderne.
                          </div>
                        </div>
                    </li>

                    <li class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Gestion des Risques et de la Conformité
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Ce module vise à former les participants aux meilleures pratiques de gestion des risques et de conformité au sein d’une organisation. Il couvre les méthodologies et les outils pour identifier, évaluer et atténuer les risques, tout en assurant la conformité aux réglementations en vigueur. Ce programme s’adresse aux professionnels souhaitant renforcer la résilience de leur entreprise face aux risques internes et externes.
                        </div>
                      </div>
                    </li>

                    <li class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                            Développement Durable et Responsabilité Sociétale
                          </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                          Les principes de la responsabilité sociétale des entreprises (RSE) et les enjeux de durabilité sont au cœur de ce module. Les participants explorent comment intégrer des pratiques durables dans la stratégie d’entreprise, contribuant ainsi à un développement économique responsable.
                          </div>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="make-an-appointment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="appointment-left-content" data-aos="zoom-in-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/make-an-appointment/inscription.jpg')}}" alt="big-img">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="appointment-right-content">
                    <div class="section-title">
                        <div class="section-title-inner">
                            <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Passer à l'action</h4>
                            <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1000">Inscrivez-vous et explorez notre programme dès maintenant ici !</h2>
                        </div>
                    </div>
                       <div class="contact-info v2 gap-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="all-btn ">
                            <a href="{{route('register')}}" class="btn-p v1 btn-blue2 icon-v1 rounded">Inscrivez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-120 @">
    <div class="container">
        <div class="section-title v2">
            <div class="section-title-inner">
                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Nos animateurs</h4>
                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Apprenez auprès des meilleurs</h2>
            </div>
            <div class="all-btn mt-15" data-aos="fade-up" data-aos-duration="1000">
                <a href="contact.html" class="btn-p v1 rounded btn-blue icon-v1">Contactez-nous</a>
            </div>
        </div>
        <div class="our-best-team-content v2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="team-data">
                        <div class="data-img">
                            <img src="{{ asset('assets/img/our-best-team/v2/team-member-1.png')}}" alt="team-member-img">
                            <div class="team-share-box">
                                <div class="share">
                                    <a href="#">
                                        <i class="my-icon icon-share"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="title"><a href="team-details.html">Tracy d.wright</a></h4>
                        <p class="para">Head of Chemistry</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="team-data">
                        <div class="data-img">
                            <img src="{{ asset('assets/img/our-best-team/v2/team-member-2.png')}}" alt="team-member-img">
                            <div class="team-share-box">
                                <div class="share">
                                    <a href="#">
                                        <i class="my-icon icon-share"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="title"><a href="team-details.html">Dr.Christophert</a></h4>
                        <p class="para">Head of Chemistry</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="team-data">
                        <div class="data-img">
                            <img src="{{ asset('assets/img/our-best-team/v2/team-member-3.png')}}" alt="team-member-img">
                            <div class="team-share-box">
                                <div class="share">
                                    <a href="#">
                                        <i class="my-icon icon-share"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social">
                                            <i class="my-icon icon-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="title"><a href="team-details.html">Emma Olivia</a></h4>
                        <p class="para">Head of Chemistry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skill-section @ py-100">
    <div class="container">
        <ul class="skill-items">
            <li class="skill-item">
                <div class="item-icon">
                    <i class="my-icon icon-courses-completed"></i>
                </div>
                <div class="item-content">
                    <h5 class="title"><span class="counter">4.8</span>K</h5>
                    <p class="para">courses COMPLETED</p>
                </div>
            </li>
            <li class="skill-item">
                <div class="item-icon">
                    <i class="my-icon icon-media-activities"></i>
                </div>
                <div class="item-content">
                    <h5 class="title"><span class="counter">325</span></h5>
                    <p class="para">MEDIA ACTIVITIES</p>
                </div>
            </li>
            <li class="skill-item">
                <div class="item-icon">
                    <i class="my-icon icon-skill-expert"></i>
                </div>
                <div class="item-content">
                    <h5 class="title"><span class="counter">598</span></h5>
                    <p class="para">SKILLED EXPERTS</p>
                </div>
            </li>
            <li class="skill-item">
                <div class="item-icon">
                    <i class="my-icon icon-happy-students"></i>
                </div>
                <div class="item-content">
                    <h5 class="title"><span class="counter">36</span>K</h5>
                    <p class="para">HAPPY Students</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="skill-left-img">
        <img src="{{ asset('assets/img/skill-section/skill-left-img.png')}}" alt="skill-left-img">
    </div>
    <div class="skill-right-img">
        <img src="{{ asset('assets/img/skill-section/skill-right-img.png')}}" alt="skill-right-img">
    </div>
</section>

<section class="my-120 @">
    <div class="container-xl">
        <div class="section-title center">
            <div class="section-title-inner w-v2 center">
                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Nos articles</h4>
                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Nos derniers articles</h2>
            </div>
        </div>
        <div class="blog-cards v2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="blog-card">
                        <div class="card-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/our-blog/v2/blog-img-1.jpg')}}" alt="blog-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="title"><a href="blog-details.html">Financial Literacy Essential Concepts for Students</a></h3>
                            <p class="para">These specialized memberships are designed to make school accessible and
                                affordable for these specific man very positon</p>
                        </div>
                        <div class="card-footer">
                            <div class="all-btn">
                                <a href="#" class="btn-p icon-v2">Read More</a>
                            </div>
                            <div class="footer-comments">
                                <div class="comments-icon">
                                    <i class="my-icon icon-comments"></i>
                                </div>
                                <p class="para"><a href="#">Comments (05)</a></p>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date-icon">
                                <i class="my-icon icon-calander-2"></i>
                            </div>
                            <p class="para">October 19, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="blog-card">
                        <div class="card-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/our-blog/v2/blog-img-2.jpg')}}" alt="blog-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="title"><a href="blog-details.html">Mastering  Management Student's Ultimate</a></h3>
                            <p class="para">These specialized memberships are designed to make school accessible and
                                affordable for these specific man very positon</p>
                        </div>
                        <div class="card-footer">
                            <div class="all-btn">
                                <a href="#" class="btn-p icon-v2">Read More</a>
                            </div>
                            <div class="footer-comments">
                            <div class="comments-icon">
                                <i class="my-icon icon-comments"></i>
                            </div>
                                <p class="para"><a href="#">Comments (05)</a></p>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date-icon">
                                <i class="my-icon icon-calander-2"></i>
                            </div>
                            <p class="para">October 19, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="blog-card">
                        <div class="card-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/our-blog/v2/blog-img-3.jpg')}}" alt="blog-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="title"><a href="blog-details.html">Financial Literacy Essential Concepts for Students</a></h3>
                            <p class="para">These specialized memberships are designed to make school accessible and
                                affordable for these specific man very positon</p>
                        </div>
                        <div class="card-footer">
                            <div class="all-btn">
                                <a href="#" class="btn-p icon-v2">Read More</a>
                            </div>
                            <div class="footer-comments">
                                <div class="comments-icon">
                                    <i class="my-icon icon-comments"></i>
                                </div>
                                <p class="para"><a href="#">Comments (05)</a></p>
                            </div>
                        </div>
                        <div class="card-date">
                            <div class="date-icon">
                                <i class="my-icon icon-calander-2"></i>
                            </div>
                            <p class="para">October 19, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bottom-to-top">
<a href="#" class="to-top"><span class="fa-solid fa-arrow-up to-top-icon"></span></a>
</div>

@endsection
