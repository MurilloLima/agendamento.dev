<div class="sidebar-widgets">
    <div class="widgets search-form">
        <h4>Pesquisar</h4>
        <div class="search-input">
            <form action="{{ route('home.blog.search') }}" method="get">
                <input type="search" name="value" placeholder="O que procura?">
                <button type="submit"><i class="far fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="widgets single-post">
        <h4>Outros posts</h4>
        <div class="single-post-area">
            @foreach ($sidebar as $item)
            <div class="post-content">
                <a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}">
                    <img src="{{ asset('upload', $item->img) }}" alt="{{$item->title}}">
                </a>
                <a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}"
                    class="data">{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</a>
                <h5>
                    <a href="{{ route('home.blog.view', ['slug'=>$item->slug]) }}">{{$item->title}}</a>
                </h5>
            </div>
            @endforeach

        </div>
    </div>
</div>