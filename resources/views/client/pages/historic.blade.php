@extends('client.inc.app', ['activePage' => 'historic', 'titlePage' => __('Histórico')])

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('includes.alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title ">Histórico </h4>
                                <p class="card-category">Histórico de todas as transações</p>
                            </div>
                            {{-- <div class="col-md-6">
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
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tipo
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Saldo anterior
                                    </th>
                                    <th>
                                        Saldo atual
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr {{ $item->type == 'O' ? "style=color:brown" : ''}}>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            @if ($item->type == 'I')
                                            Depósito
                                            @endif
                                            @if ($item->type == 'O')
                                            Retirada
                                            @endif
                                        </td>
                                        <td>
                                            R${{number_format($item->amount, 2 ,',','')}}
                                        </td>
                                        <td>
                                            R${{number_format($item->total_before, 2 ,',','')}}
                                        </td>
                                        <td>
                                            R${{number_format($item->total_after, 2 ,',','')}}
                                        </td>
                                        <td>
                                            {{date('d/m/Y H:i:s', strtotime($item->created_at))}}
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
<!-- Modal add-->
<div class="modal fade" id="novo" tabindex="-1" role="dialog" aria-labelledby="novo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Novo plano</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.planos.store') }}" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Tipo') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}"
                                        name="tipo" type="text" placeholder="{{ __('Nome do plano') }}"
                                        value="{{ old('tipo') }}" required />
                                    @if ($errors->has('tipo'))
                                    <span id="email-error" class="error text-danger">{{ $errors->first('tipo') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Período') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('periodo') ? ' has-danger' : '' }}">
                                    <select name="periodo"
                                        class="form-control {{ $errors->has('periodo') ? ' is-invalid' : '' }}"
                                        required>
                                        <option value="">Escolha</option>
                                        <option value="3 Mêses">3 Mêses</option>
                                        <option value="3 Mêses">6 Mêses</option>
                                        <option value="3 Mêses">12 Mêses</option>
                                        <option value="2 Anos">2 Anos</option>
                                        <option value="3 Anos">3 Anos</option>
                                    </select>
                                    @if ($errors->has('periodo'))
                                    <span id="email-error"
                                        class="error text-danger">{{ $errors->first('periodo') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Margem de lucro') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('porcentagem') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}"
                                        name="porcentagem" type="text"
                                        placeholder="{{ __('Informe a porcentagem (%) de lucro') }}"
                                        value="{{ old('porcentagem') }}" required />
                                    @if ($errors->has('porcentagem'))
                                    <span id="email-error"
                                        class="error text-danger">{{ $errors->first('porcentagem') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection