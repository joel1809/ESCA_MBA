@extends('layouts.templates')

@section('title')
Témoignages et Réseaux｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Témoignages et Réseaux</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Témoignages et Réseaux</h4>
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
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Un Réseau Dynamique et Un Accompagnement Personnalisé.</h2>
                                <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">L’ESCA EXECUTIVE MBA se distingue non seulement par la qualité de son enseignement, mais également par le dynamisme de la Senior ESCA, l’association des diplômés de l’ESCA. En intégrant ce programme, vous rejoignez un réseau puissant de leaders et d’influenceurs qui partagent des valeurs communes et un engagement envers l’excellence. Les participants bénéficient d’un accompagnement personnalisé et d’échanges réguliers avec des mentors académiques et des experts de l’industrie. Cela permet de créer des synergies et des opportunités de collaboration, tout en favorisant l’échange d’idées et d’expériences enrichissantes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-img mt-3" data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/img/how-it-work/v2/accompagnement.jpg')}}" alt="right-img">
                        <div class="right-img-bg">
                            <img src="{{ asset('assets/img/how-it-work/v2/right-img-bg.png')}}" alt="right-img-bg">
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
                            <img src="{{ asset('assets/img/student-feedback/temoignage.jpg')}}" alt="feedback-big-img">
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
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Témoignages
                                </h4>
                                <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Ils nous font confiance</h2>
                            </div>
                        </div>
                        <div class="swiper my-swiper-student-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="student-feedback-info">
                                        <div class="student-profile">
                                            <div class="student-img">
                                                <img src="{{ asset('assets/img/student-feedback/student-img-1.jpg')}}"
                                                    alt="student-img">
                                            </div>
                                            <div class="student-content">
                                                <h4 class="content-title">By David Smith</h4>
                                                <p class="content-para">Chemistry Student</p>
                                            </div>
                                        </div>
                                        <p class="info-para">"I found the education website incredibly helpful and
                                            user-friendly. The content is well-organized, making it easy to navigate and
                                            locate relevant resources quickly. The interactive quizzes and video
                                            tutorials
                                            greatly enhanced my understanding of the subjects. Overall, it's a fantastic
                                            platform for enhancing my learning experience."</p>
                                        <ul class="star">
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                            <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="student-feedback-info">
                                        <div class="student-profile">
                                            <div class="student-img">
                                                <img src="{{ asset('assets/img/student-feedback/student-img-1.jpg')}}"
                                                    alt="student-img">
                                            </div>
                                            <div class="student-content">
                                                <h4 class="content-title">By David Smith</h4>
                                                <p class="content-para">Chemistry Student</p>
                                            </div>
                                        </div>
                                        <p class="info-para">"I found the education website incredibly helpful and
                                            user-friendly. The content is well-organized, making it easy to navigate and
                                            locate relevant resources quickly. The interactive quizzes and video
                                            tutorials
                                            greatly enhanced my understanding of the subjects. Overall, it's a fantastic
                                            platform for enhancing my learning experience."</p>
                                        <ul class="star">
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                            <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                            <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
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
