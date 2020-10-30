@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary">Account Settings</li>
          
            
            <li class="list-group-item list-group-item-warning"><a href="/accountActivation"><i class="fas fa-skating"></i>Account Activation</a></li>
            <li class="list-group-item list-group-item"><a href="#"><i class="fas fa-handshake"></i>Managing Referals</a></li>
            <li class="list-group-item list-group-item"><a href="#"><i class="fas fa-clipboard"></i>Investing History</a></li>
            
          </ul>
      </div>
      <div class="col-md-9">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">ACTIVATE YOUR ACCOUNT!!<p class="lead"> Activate your account with this easy steps
                  
            </p></h1>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">ABOUT TO COMPLETE YOUR INVESTMENT!</h4>
                <p>Aww yeah, Considering our terms of business, your are requested to enter the username or email of the referee before you make payments.</p>
                <hr>
                <p class="mb-0">Whenever you are ready click the ACTIVATE button and check your Phone for a PROMPT from safaricom, enter the PIN and press OK,
                    please note that the system will automatically deduct the amount depending on the Packages you specified during registration.</p>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">ENTER YOUR ACTIVATION DETAILS</div>

                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif
        
                        <div class="card-body">
                            <form method="POST" action="/confirmActivation">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Referee Usename</label>
        
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
                                            ACTIVATE
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
