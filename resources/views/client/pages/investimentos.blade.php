@extends('client.inc.app', ['activePage' => 'investimentos', 'titlePage' => __('Investimentos')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Investimentos</h4>
                        <p class="card-category"> Histórico de investimentos</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Depósito
                                    </th>
                                    <th>
                                        Rendimento
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
                                            {{$item->nome}}
                                        </td>
                                        <td>
                                            {{$item->empresa->nome}}
                                        </td>
                                        <td>
                                            {{$item->empresa->cnpj}}
                                        </td>
                                        <td>
                                            {{date('d/m/Y', strtotime($item->created_at))}}
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