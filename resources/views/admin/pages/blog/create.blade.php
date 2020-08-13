@extends('admin.inc.app', ['activePage' => 'blog', 'titlePage' => __('Blog')])
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.pages.blog.includes.arlets')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Novo post </h4>
                        <p class="card-category"> Preencha todos os campos</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blog.store') }}" class="navbar-form" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            @include('admin.pages.blog.includes.form')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection