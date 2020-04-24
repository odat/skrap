@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-category-tab" data-toggle="pill" href="#pills-category"
                           role="tab" aria-controls="pills-category" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-orders-tab" data-toggle="pill" href="#pills-orders" role="tab"
                           aria-controls="pills-orders" aria-selected="false">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-region-tab" data-toggle="pill" href="#pills-region" role="tab"
                           aria-controls="pills-region" aria-selected="false">Region</a>
                    </li>
                </ul>

                <div class="col-md-12 card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col">
                            <div class="form-check float-right">
                                <input type="checkbox" id="deleted" data-toggle="toggle"  data-onstyle="danger" data-offstyle="secondary">
                                <label for="stackedCheck1" class="form-check-label">Show deleted item</label>
                            </div>
                        </div>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-category" role="tabpanel"
                                 aria-labelledby="pills-category-tab">
                                <div class="row">
                                    <div class="col-md-12 text-center total-money">
                                        Total money spent
                                        <span>£{{$data['result']['total_cost']}}</span>
                                    </div>
                                </div>
                                <div class="row mx-auto text-center">
                                    @foreach($data['result']['data'] as $service)
                                        <div class="col-md-3 {{ $service['is_delete'] == 1 ? 'deleted' : '' }}">
                                            <p>{{$service['service_name']}}</p>
                                            <input type="text" class="dial" value="{{$service['percent_usage']}}"
                                                   data-width="90" data-height="90" data-fgColor="#0b91d2"
                                                   data-readonly="true">
                                        </div>
                                    @endforeach
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['result']['data'] as $service)
                                        <tr class="{{ $service['is_delete'] == 1 ? 'deleted bg-danger' : '' }}">
                                            <th scope="row"><img src="{{url($imagePath . $service['img_url'])}}" width="80" /></th>
                                            <td>{{$service['service_name']}} <small>{{$service['transactions']}} transactions</small></td>
                                            <td>£{{$service['cost']}} <small>{{$service['percent_usage']}}%</small></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div class="tab-pane fade" id="pills-orders" role="tabpanel"
                                 aria-labelledby="pills-orders-tab">...
                            </div>
                            <div class="tab-pane fade" id="pills-region" role="tabpanel"
                                 aria-labelledby="pills-region-tab">...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
