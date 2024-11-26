@extends('layouts.templates')

@section('title')
Contact｜ESCA MBA
@endsection

@section('content')

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Contact</h2>
            <h4 class="para"><a href="{{route('home')}}">Accueil</a> / Contact</h4>
        </div>
    </div>
</section>

<section class="@ py-120 contact-bg-color">
    <div class="container-xxl">
      <div class="contact-us-content">
        <div class="contact-us-img">
          <img src="assets/img/contact-us/contact-img.jpg" alt="contact-img" />
        </div>
        <div class="contact-us-right-content">
          <div class="section-title">
            <div class="section-title-inner">
              <h2 class="big-title s-color-white">Envoyez-nous des messages</h2>
            </div>
          </div>
          <form class="get-free-form-content">
            <div class="group-form-box">
              <div class="form-box">
                <input type="text" placeholder="Nom et Prénom" />
              </div>
              <div class="form-box">
                <input type="email" placeholder="Email" />
              </div>
            </div>
            <div class="form-box">
              <input type="text" placeholder="Objet" />
            </div>
            <div class="form-box-last">
              <textarea
                cols="30"
                rows="10"
                placeholder="Contenu du message"
              ></textarea>
            </div>
            <div class="check-box">
              <div class="all-btn v3">
                <button class="btn-p v1 rounded btn-white" type="submit">
                  Envoyer
                </button>
              </div>
            </div>
          </form>
          <div class="bg-map-contact-us">
            <img src="assets/img/contact-us/bg-map-contact-us.png" alt="bg-map-contact-us">
          </div>
        </div>
      </div>
    </div>
  </section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59897494.177700765!2d69.14685737429741!3d23.609607369521136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1716991491110!5m2!1sen!2sbd" style="width: 100%; height:450px;border: 0;margin-bottom:-40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="bottom-to-top">
    <a href="#" class="to-top"><span class="fa-solid fa-arrow-up to-top-icon"></span></a>
    </div>
@endsection
