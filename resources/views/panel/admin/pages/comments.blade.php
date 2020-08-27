@extends('panel.admin.inc.app',['activePage' => 'admin.clients'])

@section('content')
<section class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Observações</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- content --}}
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('panel.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Observações</h3>

                            <div class="card-tools">
                                <a href="#" data-toggle="modal" data-target="#comment" class="btn btn-primary"><i
                                        class="nav-icon fa fa-plus"></i> Novo</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Observação</th>
                                        <th>Arquivo</th>
                                        <th>Criado em</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($comments as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->comment}}</td>
                                        <td><a href="{{ url('upload/upload/', $item->file) }}" target="_blank">{{$item->file}}</a></td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($item->created_at))}}</td>
                                        <td>
                                            <a href="{{ route('admin.comments.delete', ['id'=>$item->id]) }}"
                                                title="Excluir">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Nenhuma Observação encontrada!!!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $comments->links() }}
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    {{-- end content --}}

    <!-- Modal agendar-->
    <div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="comment" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Novo
                        agendamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.comments.store') }}" class="navbar-form" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="modal-body">
                            <div class="text-center">
                                <h4>Adicionar Observação.</h4>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Arquivo') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}"
                                            name="file" type="file" placeholder="" value="{{old('file') }}" />
                                        @if ($errors->has('file'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Observação') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('comment') ? ' has-danger' : '' }}">
                                        <textarea name="comment"
                                            class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}">
                                        </textarea>
                                        @if ($errors->has('comment'))
                                        <span id="comment-error"
                                            class="error text-danger">{{ $errors->first('comment') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection