@extends('layouts.app')

@section('content')


     <div class="wrapper-page">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Login del sistema de<strong> Titulación</strong> </h3>
                </div> 

                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder="Username" name="email"  value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             </div>
                        </div>
              
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label class="cr-styled">
                                    <input type="checkbox" checked>
                                    <i class="fa"></i> 
                                    Remember me
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group text-right">
                            <div class="col-xs-12">
                                <button class="btn btn-success w-md" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-t-30">
                            <div class="col-sm-7">
                                <a href="{{ url('/password/reset') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="pages-register.html">Create an account</a>
                            </div>
                        </div>

                       
                    </form>
                    <form class="form-horizontal m-t-10 p-20 p-b-0" action="index.html">
                                            
                       
                      

                        
                    </form>
                </div>

            </div>
        </div>


@endsection
