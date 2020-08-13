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
                @forelse ($data as $item)
                <div class="single-blog">
                    <a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}">
                        <img src="{{ asset('upload', $item->img) }}" alt="{{$item->title}}">
                    </a>
                    <div class="blog-content dfx">
                        <div class="auhtor-blog">
                            <img src="{{ asset('assets/home/image/blog/team-4.jpg') }}" alt="">
                            <h4>{{$item->user->name}}</h4>
                            <p><span class="fa fa-comment"></span> 0</p>
                        </div>
                        <div class="content-blog">
                            <p class="blog-meta"><a href="#">{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</a>
                            </p>
                            <h3><a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}">{{$item->title}}</a></h3>
                            {!! str_limit($item->content, 200) !!}
                            <a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}" class="blog-btn">Continue
                                lendo <span class="mdi mdi-play"></span></a>
                        </div>
                    </div>
                </div>
                @empty
                <span>Nenhum post cadastrado no momento!</span>
                @endforelse
                {{ $data->links() }}

                
            </div>
            <div class="col-lg-4">
                @include('home.includes.sidebar')
            </div>
        </div>
    </div>
</div>

@endsection