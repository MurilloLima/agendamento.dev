@extends('admin.inc.app', ['activePage' => 'depositos', 'titlePage' => __('Depósitos')])
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('includes.alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Solicitacões de depósito </h4>
                        <p class="card-category"> Listagem de depósitos realizado pelos clientes</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Cliente
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Comprovante
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Data
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
                                            {{$item->user->name}}
                                        </td>
                                        <td>
                                            R${{number_format($item->value, 2 ,',','')}}
                                        </td>
                                        <td>
                                            <a href="{{ url('upload/depositos', $item->file) }}"
                                                target="_blank">{{$item->file}}</a>
                                        </td>
                                        <td>
                                            {{$item->status}}
                                        </td>
                                        <td>
                                            {{date('d/m/Y', strtotime($item->created_at))}}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#deposit{{$item->id}}" title="Validar deposito">
                                                <i class="material-icons">cached</i>
                                                Validar
                                            </a>
                                           
                                            <!-- Modal validar-->
                                            <div class="modal fade" id="deposit{{$item->id}}" tabindex="-1"
                                                role="dialog" aria-labelledby="deposit{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h5 class="modal-title" id="exampleModalLabel">Validar
                                                                deposito</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.deposit.store', ['id'=>$item->id]) }}"
                                                                class="navbar-form" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('post')
                                                                {!! Form::hidden('user_id', $item->user_id) !!}
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">{{ __('Valor (R$)') }}</label>
                                                                        <div class="col-sm-9">
                                                                            <div
                                                                                class="form-group{{ $errors->has('value') ? ' has-danger' : '' }}">
                                                                                <input
                                                                                    class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                                                                    name="value" type="text"
                                                                                    placeholder="{{ __('0.00') }}"
                                                                                    value="{{$item->value, old('value') }}"
                                                                                    required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Validar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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