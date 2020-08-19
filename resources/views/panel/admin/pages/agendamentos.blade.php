@extends('panel.admin.inc.app',['activePage' => 'admin.agendamentos'])

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
                        <li class="breadcrumb-item active">Agendamentos</li>
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
                            <h3 class="card-title">Lista de agendamentos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Data solicitação</th>
                                        <th>Status</th>
                                        <th>Data consulta</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr class="{{ $item->status == 'Aprovada' ? 'badge-info' : '' }}">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->user->fone}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            @if ($item->data_consulta == true)
                                            {{date('d/m/Y', strtotime($item->data_consulta))}} às {{$item->horario}}
                                            @else 
                                            Aguardando...
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->content == true)
                                            <a href="#" title="Observação" data-toggle="modal"
                                                data-target="#obs{{$item->id}}">
                                                <i class="far fa-comments" style="color: white;"></i>
                                            </a>
                                            <!-- Modal retirada-->
                                            <div class="modal fade" id="obs{{$item->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="obs{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h5 class="modal-title" id="exampleModalLabel"
                                                                style="color: #999999;">Observação
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-body">
                                                                <p style="color: #999999;">{{$item->content}}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @if ($item->status == 'Em analise')
                                            <a href="#" data-toggle="modal" data-target="#agendar{{$item->id}}"
                                                title="Agendar"><i class="nav-icon fa fa-calendar-check"></i>
                                            </a>
                                            <!-- Modal agendar-->
                                            <div class="modal fade" id="agendar{{$item->id}}" tabindex="-1"
                                                role="dialog" aria-labelledby="agendar{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h5 class="modal-title" id="exampleModalLabel">Novo
                                                                agendamento</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.agendamentos.update', ['id'=>$item->id]) }}"
                                                                class="navbar-form" method="post">
                                                                @csrf
                                                                @method('post')
                                                                <input type="hidden" name="status" value="Aprovada">
                                                                <div class="modal-body">
                                                                    <div class="text-center">
                                                                        <h4>Agendar consultar para o cliente.</h4>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                                    name="name" type="text"
                                                                                    placeholder="Seu nome"
                                                                                    value="{{$item->user->name, old('name') }}"
                                                                                    required />
                                                                                @if ($errors->has('name'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('name') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Data consulta') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('data_consulta') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control date{{ $errors->has('data_consulta') ? ' is-invalid' : '' }}"
                                                                                    name="data_consulta" type="date"
                                                                                    placeholder="00/00/0000"
                                                                                    value="{{old('data_consulta') }}"
                                                                                    required />
                                                                                @if ($errors->has('data_consulta'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('data_consulta') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Horário') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('data_consulta') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control date{{ $errors->has('horario') ? ' is-invalid' : '' }}"
                                                                                    name="horario" type="time"
                                                                                    placeholder="00:00"
                                                                                    value="{{old('horario') }}"
                                                                                    required />
                                                                                @if ($errors->has('horario'))
                                                                                <span id="email-error"
                                                                                    class="error text-danger">{{ $errors->first('horario') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Observação') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                                                                <textarea name="content"
                                                                                    class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">
                                                                                </textarea>
                                                                                @if ($errors->has('content'))
                                                                                <span id="content-error"
                                                                                    class="error text-danger">{{ $errors->first('content') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Agendar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Nenhum agendamento encontrado no momento!!!
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $data->links() }}
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


    <!-- Modal retirada-->
    <div class="modal fade" id="solicitar" tabindex="-1" role="dialog" aria-labelledby="solicitar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Nova solicitação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('client.agendamentos.store') }}" class="navbar-form" method="post">
                        @csrf
                        @method('post')
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="modal-body">
                            <div class="text-center">
                                <h4>Solicitar agendamento para consulta.</h4>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" type="text" placeholder="Seu nome"
                                            value="{{auth()->user()->name, old('name') }}" required />
                                        @if ($errors->has('name'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Tefone') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('fone') ? ' has-danger' : '' }}">
                                        <input
                                            class="form-control phone_with_ddd{{ $errors->has('fone') ? ' is-invalid' : '' }}"
                                            name="fone" type="text" placeholder="(00)0000-0000"
                                            value="{{auth()->user()->fone, old('fone') }}" required />
                                        @if ($errors->has('fone'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('fone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('E-mail') }}</label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" type="email" placeholder="(00)0000-0000"
                                            value="{{auth()->user()->email, old('email') }}" required />
                                        @if ($errors->has('email'))
                                        <span id="email-error"
                                            class="error text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection