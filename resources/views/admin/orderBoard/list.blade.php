@extends('admin.layouts.master')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h6 class="m-0 font-weight-bold text-dark">Order board</h6>
                        </div>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center text-white">
                                    <th >Date</th>
                                    <th >Order Code</th>
                                    <th >Customer Name</th>
                                    <th class="text-center text-warning fw-bolder">Order State</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr class="text-center text-white">
                                <input type="hidden" class="orderCode text-center" value="{{ $item->order_code }}">
                                 <th >{{ $item->created_at->format('j-F-y') }}</th>
                                 <th><a href="{{route ('userOrderDetails', $item->order_code)}}">{{ $item->order_code }}</a></th>
                                 <th><a href="{{route ('accountProfile', $item->user_id)}}">{{ $item-> username }}</a></th>

                                    <th class="text-center">
                                        @if ($item->status == 0)
                                            Pending
                                        @elseif ($item->status == 1)
                                            Accept
                                        @elseif ($item->status == 2)
                                            Refund & Reject
                                        @endif
                                    </th>

                             </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <span class="d-flex justify-content-end">{{ $order->links()}}</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
@endsection
@section('js-section')
    <script>
        $(document).ready(function(){
            $('.statusChange').change(function(){
                $currentStatus = $(this).val();
                $orderCode = $(this).parents("tr").find('.orderCode').val();

                $data ={
                    'status' : $currentStatus,
                    'orderCode' : $orderCode
                }
                // console.log($data);
                $.ajax({
                    type : 'get',
                    url : 'change/status',
                    data  : $data,
                    dataType   : 'json'
                })

            })
        })
    </script>
@endsection
