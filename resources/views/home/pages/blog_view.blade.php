@extends('home.inc.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row bg-white aic">
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-left">
                    <h2>Blog</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-right">
                    <nav aria-label="breadcrumb">
                        <ol class="">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area pd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog">
                    <div class="blog-content dfx">
                        <div class="auhtor-blog">
                            <img src="{{ asset('assets/home/image/blog/team-4.jpg') }}" alt="">
                            <h4>{{$data->user->name}}</h4>
                        </div>
                        <div class="content-blog">
                            <p class="blog-meta"><a href="#">{{date('d/m/Y H:i:s', strtotime($data->created_at))}}</a></p>
                            <h3><a href="#">{{$data->title}}</a></h3>
                        </div>
                    </div>
                    <img src="{{ asset('upload', $data->img) }}" alt="{{$data->title}}">
                    <div class="single-post-content">
                        {!! $data->content !!}
                        {{-- <div class="post-share">
                            <strong>Compartilhar:</strong>
                            <ul>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="left"
                                        data-original-title="Facebook"><span class="mdi mdi-facebook"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="top"
                                        data-original-title="Twitter"><span class="mdi mdi-twitter"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="bottom"
                                        data-original-title="Camera"><span class="mdi mdi-camera"></span></a></li>
                                <li><a href="#" data-toggle="tooltip" title="" data-placement="right"
                                        data-original-title="Google"><span class="mdi mdi-google"></span></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="about-author dfx aic">
                    <div class="about-author-img">
                        <img src="{{ asset('assets/home/image/team-1.jpg') }}" alt="">
                    </div>
                    <div class="about-author-text">
                        <h4>Sobre o autor , <span>Lucas</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloremque, inventore
                            aliquid quisquam sint laboriosam qui nulla et, temporibus veniam distinctio odio, ex ratione
                            minus. Nulla modi iure repellat placeat.</p>
                    </div>
                </div> --}}
                <div class="comment-list">
                    <h4 class="comment-title">Comentários</h4>
                    <ul class="comments">
                        {{-- <li>
                            <div class="comment-author-area dfx">
                                <div class="comment-author-img">
                                    <img src="{{ asset('assets/home/image/team-2.jpg') }}" alt="">
                                </div>
                                <div class="comment-meta">
                                    <h6>Niaz Mahmud <span>20 horas</span></h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cum reiciendis
                                        consequuntur odio optio, qui facilis eligendi mollitia a aperiam dolores iste
                                        voluptates suscipit vero nostrum maxime at expedita! Pariatur!.</p>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                    <div class="contact-form post-form">
                        <h4 class="comment-title">Publique seus comentários</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="mane">Nome</label>
                                        <input id="mane" type="text" class="form-control" placeholder="Seu nome... ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail...">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Conteúdo</label>
                                        <textarea class="form-control" id="message" rows="5"
                                            placeholder="Digite seu comentário..."></textarea>
                                    </div>
                                    <button type="submit" class="button">Comentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('home.includes.sidebar')
            </div>
        </div>
    </div>
</div>

@endsection