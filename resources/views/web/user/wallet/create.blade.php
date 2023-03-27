@extends('layouts.user')
@section('title','Recharge wallet')

@section('content')
<section id="ApiKeyPage" data-select2-id="ApiKeyPage">
    <!-- create API key -->
    <div class="card" data-select2-id="9">
        <div class="card-header pb-0">
            <h4 class="card-title">Recharge Wallet</h4>
        </div>
        <div class="row" data-select2-id="8">
            <div class="col-md-5 order-md-0 order-1" data-select2-id="7">
                <div class="card-body" data-select2-id="6">
                    <!-- form -->
                    <form method="post" action="{{route('user.wallet.store')}}">
                        @csrf
                        <div class="mb-2">
                            <label for="amount" class="form-label">Amount</label>
                            <input class="form-control" id="amount" required min="1" step=".01" type="number" name="amount" placeholder="20LE." data-msg="Please enter the amount">
                        </div>

                        <button type="submit" class="btn btn-primary w-50 mx-auto d-block waves-effect waves-float waves-light">Recharge</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7 order-md-1 order-0">
                <div class="text-center">
                    <img class="img-fluid text-center" src="{{asset('dashboard/images/illustration/pricing-Illustration.svg')}}" alt="illustration" width="310">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection