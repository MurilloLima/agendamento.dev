@extends('admin.inc.app', ['activePage' => 'blog', 'titlePage' => __('Blog')])
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('admin.pages.blog.includes.arlets')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title ">Blog </h4>
                                <p class="card-category"> Listagem de posts no blog</p>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown float-right">
                                    <form class="navbar-form">
                                        <div class="input-group no-border">
                                            <input type="text" value="" class="form-control" placeholder="Buscar...">
                                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                                <i class="material-icons">search</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary float-right">Novo</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Titúlo
                                    </th>
                                    <th>
                                        Descrição
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Autor
                                    </th>
                                    <th>
                                        #
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            {{$item->title}}
                                        </td>
                                        <td>
                                            {{$item->desc}}
                                        </td>
                                        <td>
                                            {{date('d/m/Y', strtotime($item->created_at))}}
                                        </td>
                                        <td>
                                            {{$item->user->name}}
                                         </td>
                                        
                                        <td>
                                            <a href="{{ route('admin.blog.edit', ['id'=>$item->id]) }}"><i
                                                    class="material-icons">edit</i></a>
                                            <a href="{{ route('admin.blog.delete', ['id'=>$item->id]) }}"><i
                                                    class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr style="text-align: center">
                                        <td colspan="6">Nenhuma encontrada no momento!</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection