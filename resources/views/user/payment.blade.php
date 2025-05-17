@extends('user.layouts.master')
@section('content')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Payment</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{route('userDashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Payment</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="card col-10 offset-1 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h5>Transfer to this Account</h5><br>
                                @foreach ($payment as $item)
                                    <div>{{ $item->type }} ( name: {{ $item-> account_name }})</div>
                                    Account: {{ $item-> account_number }}
                                    <hr>
                                @endforeach
                            </div>
                            <div class="col">
                                <div class="container">
                                    <form action="{{ route('orderProduct')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="name">Your Name</label>
                                        </div>
                                        <div class="col-75">
                                          <input type="text" class="payment-form" id="name" name="name">
                                          <br>
                                          @error('name')
                                              <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="phone">Phone</label>
                                        </div>
                                        <div class="col-75">
                                          <input type="text" class="payment-form" id="phone" name="phone" placeholder="09xxxxxxx">
                                          <br>
                                          @error('phone')
                                              <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="type">Payment</label>
                                        </div>
                                        <div class="col-75">
                                          <select id="type" name="paymentMethod" class="payment-form">
                                            <option value="">Choose Payment Method...</option>
                                            @foreach ($payment as $item)
                                                <option value="{{$item->id}}">{{$item->type}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                          @error('paymentMethod')
                                              <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="slip">Attach Pay Slip</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="file" class="payment-form" id="phone" name="paySlipImage">
                                            <br>
                                          @error('paySlipImage')
                                              <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="orderNo">Order No.</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="hidden" name="orderCode" value="{{ $orderProduct[0]['order_code']}}">
                                            <label for="orderNo">{{ $orderProduct[0]['order_code']}}</label>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-25">
                                          <label for="total">Total:</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="hidden" name="totalAmount" value="{{ $total + 100}}">
                                            <label for="total">{{ $total + 100}} tk</label>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <input type="submit" value="Submit">
                                      </div>
                                    </form>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
@endsection
