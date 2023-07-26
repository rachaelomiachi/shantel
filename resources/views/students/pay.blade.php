

    <div class="pay-form">
    @extends('layouts.header')

    @section('content')
        <div class="container-fluid justify-content-center">
          <div class="row justify-content-center">
            {{-- <div class="col"> --}}
              <h1 class="text-center mt-5">Start Payment</h1>
        @if(session()->has('error')) {{ session()->get('error') }}
            
        @endif
        
    <form action="{{ route('make.payment') }}" method="POST">
        @csrf
        {{-- <label for="email">Email</label> --}}
        <div class="row mb-5 mt-0 justify-content-center">
            {{-- <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label> --}}

            <div class="col-md-3">
        <p class="text-dark text-center mt-"> School Fees Payment</p>
        <input type="hidden" name="metadata" value="{{ json_encode($array = ['invoiceId' => '$ref']) }}" >
        <input hidden type="text" name="email" value="rachel@mail.com" required><br> <br>

        {{-- <label for="amount" class="text-center">Amount</label> --}}
        <input type="number" name="amount" required class="text-center" placeholder="Pay Your Fees"> 
        <input type="hidden" name="currency" value="NGN">
        <input type="hidden" name="key" value="test">
        
        <input type="hidden" name="reference" value="{{ $ref }}"> 
        {{-- <button type="submit" class="justify-content-center">pay now</button> --}}
    </form> 


    <form method="POST" action="{{ route('make.payment') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
      <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
              <p>
                  <div>
                      {{-- Lagos Eyo Print Tee Shirt
                      ₦ 2,950 --}}
                     
                  </div>
                </div>
                </div>
              </p>
              <input type="hidden" name="email" value="omiachirachael@gmail.com"> {{-- required --}}
              <input type="hidden" name="orderID" value="345">
              <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
              <input type="hidden" name="quantity" value="3">
              <input type="hidden" name="currency" value="NGN">
              <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
              <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
              
              @csrf
  
  
              <p>
                  <button class="btn btn-outline-primary btn-lg btn-block ms-2" type="submit" >
                      {{-- <i class="fa fa-plus-circle fa-lg"></i>  --}}
                      Pay Now!                 
                     </button>
              </p>
          </div>
      </div>
  </form>
</div>

</div>

</div>
</div>
  @endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    
            