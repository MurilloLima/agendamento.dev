@extends('home.inc.app')

@section('content')
<div class="hero-area hero-6 owl-carousel hero-7">
   <div class="single-slider slider-bg-1">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-11 text-center wow fadeInUp" data-wow-delay="0.2s">
               <h1>Abra sua conta na Exôdo.</h1>
               <h4>Veja quanto os seus investimentos podem render com a Exôdo.</h4>
               <p class="play-button">
                  <a href="{{ route('register') }}" class="button">ABRA SUA CONTA</a>
                  <a href="#" class="play-btn"><span class="mdi mdi-play"></span>
                  </a>
                  <span>COMO ISSO FUNCIONA?</span>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="single-slider slider-bg-1">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-11 text-center wow fadeInUp" data-wow-delay="0.2s">
               <h1>Um recomeço na sua vida financeira.</h1>
               <h4>A Êxodo Technology é um projeto
                  focado em novas tendências
                  tecnológicas para o mercado
                  financeiro, especializada em
                  locação de robôs traders.</h4>
               <p class="play-button hidden-xs"><a href="{{ route('register') }}" class="button">ABRA SUA CONTA</a> <a
                     href="https://www.youtube.com/watch?v=8BAhwgjMvnM" class="play-btn" data-lity=""><span
                        class="mdi mdi-play"></span></a><span>COMO ISSO FUNCIONA?</span></p>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- Simulado --}}

<div class="video-7-area pb-80">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-11">
            <div class="video-7-all">
               <div class="video-bg">
                  <img src="assets/home/image/video-7.png" alt="">
                  <a href="https://www.youtube.com/watch?v=8BAhwgjMvnM" class="vd-btn" data-lity="">
                     <span class="mdi mdi-play"></span>
                  </a>
               </div>
               <div class="video-ad">
                  <span class="mdi mdi-drag ad-icon"></span>
                  <span class="mdi mdi-drag ad-icon-2"></span>
                  <img src="assets/home/image/v-7-1.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="features-7-area">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10 text-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="f-7-content">
               <div class="title">
                  <h2>Abra sua conta agora e não perca mais tempo.</h2>
               </div>
               <ul>
                  <li>Crie a sua conta</li>
                  <li>Escolha um plano</li>
                  <li>Começe e investir</li>
               </ul>
               <p>Nossos assessores podem ajudar
                  você a alcançar seus objetivos.</p>
               <a href="" class="button">DESCUBRA COMO FUNCIONA</a>
            </div>
         </div>
      </div>
   </div>
   <div class="f-7-image">
      <img src="assets/home/image/f-7-image-1.png" alt="">
      <img src="Our Project & Researchimage/f-7-image-2.png" alt="" class="f-7-image-2">
   </div>
</div>

<div class="r-area pd-80">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
               <h2>Conteúdo EXÔDO.</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="r-single-7">
               <div class="r-heading dfx aic">
                  <div class="r-icon">
                     <span class="icon mdi mdi-cards"></span>
                  </div>
                  <div class="r-text">
                     <h4>Como começar a investir</h4>
                  </div>
               </div>
               <p>Investir em uma das maiores instituições financeiras do país é muito simples. Em poucos passos,
                  você
                  já estará pronto para começar.
               </p>
               <a href="">Saiba mais</a>

            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="r-single-7">
               <div class="r-heading dfx aic">
                  <div class="r-icon">
                     <span class="icon mdi mdi-shield-outline"></span>
                  </div>
                  <div class="r-text">
                     <h4>Exôdo Educação</h4>
                  </div>
               </div>
               <p>Aprenda mais sobre os diversos tipos de investimentos e entenda como o seu dinheiro pode render de
                  verdade.
               </p>
               <a href="">Saiba mais</a>

            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="r-single-7">
               <div class="r-heading dfx aic">
                  <div class="r-icon">
                     <span class="icon mdi mdi-google-nearby"></span>
                  </div>
                  <div class="r-text">
                     <h4>Análise e recomendações</h4>
                  </div>
               </div>
               <p>Fique por dentro dos melhores conteúdos de investimentos, seja você iniciante ou especialista.
               </p>
               <a href="">Saiba mais</a>
            </div>
         </div>

      </div>
   </div>
</div>

@endsection