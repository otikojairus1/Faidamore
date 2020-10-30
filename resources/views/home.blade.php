@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary">Account Settings</li>
          
            
            <li class="list-group-item list-group-item"><a href="/accountActivation"><i class="fas fa-skating"></i>Account Activation</a></li>
            <li class="list-group-item list-group-item"><a href="#"><i class="fas fa-handshake"></i>Managing Referals</a></li>
            <li class="list-group-item list-group-item"><a href="#"><i class="fas fa-clipboard"></i>Investing History</a></li>
            
          </ul>
      </div>
      <div class="col-md-9">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Welcome again!!<p class="lead"> Here are the available services</p></h1>
              <div class="row">
                  <div class="col-md">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header"> YOUR CURRENT BALANCE</div>
                        <div class="card-body">
                          <h5 class="card-title">Kshs.</h5>
                          <p class="card-text">0.00</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">YOUR WITHDRAWALS</div>
                        <div class="card-body">
                          <h5 class="card-title">Kshs</h5>
                          <p class="card-text">0.00</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">ACCUMILATED AMOUNT</div>
                        <div class="card-body">
                          <h5 class="card-title">Kshs</h5>
                          <p class="card-text">0.00.</p>
                        </div>
                      </div>
                  </div>
                  
              </div>


              <div class="card-body">
                <form method="POST" action="/verifyPhone">
                    @csrf
                  <P class="alert alert-warning">We would want you to verify your MPESA number for security issues.
                    We will send you a ONE TIME PASSWORD to your phone to verify your phone, youll only need to enter it here, before 
                    the system can activate it as a valid transaction line. You wont need to verify it everytime, but the system wont 
                    allow transaction beforehand. IGNORE IF YOU HAVE ACTIVATED ANYWAY.
                  </P>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">PAYMENT MPESA NO: </label>

                        <div class="col-md-6">
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                  

                    

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                VERIFY
                            </button>

                    
                        </div>
                    </div>
                </form>
            </div>


            </div>
          </div>
      </div>
      
    </div>
  </div>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">FAIDAMORE&trade; LTD</h5>
          <p class="grey-text text-lighten-4">We are a team of esteemed investors with a  frontier to youth empowerment
            ,register with us today and we will not fail you. EARN MONEY!!!!</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">MyProfile</a></li>
            <li><a class="white-text" href="#!">Subscriptions</a></li>
            <li><a class="white-text" href="#!">Purchases</a></li>
            <li><a class="white-text" href="#!">Reports</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect with us</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">LinkedIn</a></li>
            <li><a class="white-text" href="#!">Youtube</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      powered by <a class="brown-text text-lighten-3" href="http://materializecss.com">&copy; 2020 OTIKOINC&TRADE;</a>
      </div>
    </div>
  </footer>

@endsection
