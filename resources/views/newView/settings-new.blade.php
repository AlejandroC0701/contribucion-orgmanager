@extends('layouts.app')

@section('content')
    <div class="" style="background-image: url('../img/fondo-negro.jpg'); padding-top: 21px">
        <div class="row" style="margin-left: 0px; margin-right: 0px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div id="titulo-settings" class="panel-heading text-center"
                    style="font-family: 'Pacifico', cursive;
                           color: #4b4342;"> 
                
                        <b> TrapsNote C.A. </b>
                <!-- Nombre de la empresa -->
                    </div>

                    <div class="panel-body form-group" >
                        <h4 class="text-center" style="margin-bottom: 5%">TrapsNote C.A. settings</h4>
                        <div class="row">
                            <div name="password" class="col-md-4 text-center espacio-config">
                        <!-- Parte secundaria de la ventana -->
                                <form id="password" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="org_passwd">Organization password</label>
                                        <input type="password" class="form-control" id="org_passwd" name="org_passwd"
                                               placeholder="@if(isset($org->password)) @lang('organizations.haspasswdtext') @else @lang('organizations.passwdtext') @endif">
                                        <br>
                                        <button type="submit"
                                                class="btn btn-primary">@lang('organizations.changepasswd')</button>
                                    </div>
                                </form>
                            </div>
                            <div name="sync" class="col-md-4 espacio-config">
                                <div id="title" class="text-center"> <b> Sync organization </b></div>
                                <div id="body" class="text-center">
                                    <br>
                                    <form id="sync" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <button type="submit" class="btn btn-primary"><i
                                                    class="octicon octicon-sync"></i> Sync
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div name="delete" class="col-md-4 espacio-config">
                                <div id="title" class="text-center" > <b>Delete organization </b></div>
                                <div id="body" class="text-center">
                                    <br>
                                    <form id="delete" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary"><i
                                                    class="octicon octicon-trashcan"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center espacio-config2">
                                <p> <b>Want to add users to a team? </b></p>
                                <form action="" method="GET">
                                    <button type="submit" class="btn btn-primary"><i
                                                class="octicon octicon-organization">
                                                    
                                                </i> Team settings
                                                
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-6 text-center espacio-config2">
                                <p> <b> Custom message </b></p>
                                <form action="" method="POST">
                                    {{ csrf_field() }}
                                    <textarea name="message" class="form-control"
                                              required="required">{{ old('message') }}</textarea>
                                    <small><a class="pull-left "
                                              href="https://guides.github.com/features/mastering-markdown/"
                                              target="_blank" rel="noopener noreferrer">
                                              <i class="octicon octicon-markdown" style="margin-top: 2%">

                                              </i>Styling with
                                            Markdown is supported</a></small>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save message</button>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="flash">
                            <p class="text-center">TIP: Want a pretty URL for your users? Share <a
                                        href="" target="_blank" rel="noopener noreferrer">{{ url('o/') }}</a>
                                !</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-arriba"> 
        <div class="section-b">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="row">
                        <div class="col-md-4 border-abajo">
                            <h5 class = "espacio-palabra-abajo"><b> ¡Follow us! </b></h5>
                            <p></p>
                            <a href="https://twitter.com/">
                                <i class="fa fa-twitter icono-social twiter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.facebook.com/">
                                <i class="fa fa-facebook-official icono-social facebok" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/">
                                <i class="fa fa-instagram icono-social instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/">
                                <i class="fa fa-youtube-play icono-social youtbe" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><img class="logo" src="{{asset('img/icono-empresa.png')}}" alt="Logotipo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        
        #titulo-settings{
               background: rgba(84,70,191,1);
background: -moz-linear-gradient(top, rgba(84,70,191,1) 0%, rgba(252,252,252,1) 4%, rgba(214,203,210,1) 96%, rgba(0,14,166,1) 100%);
background: -webkit-linear-gradient(top, rgba(84,70,191,1) 0%, rgba(252,252,252,1) 4%, rgba(214,203,210,1) 96%, rgba(0,14,166,1) 100%);
background: -o-linear-gradient(top, rgba(84,70,191,1) 0%, rgba(252,252,252,1) 4%, rgba(214,203,210,1) 96%, rgba(0,14,166,1) 100%);
background: -ms-linear-gradient(top, rgba(84,70,191,1) 0%, rgba(252,252,252,1) 4%, rgba(214,203,210,1) 96%, rgba(0,14,166,1) 100%);
background: linear-gradient(to bottom, rgba(84,70,191,1) 0%, rgba(252,252,252,1) 4%, rgba(214,203,210,1) 96%, rgba(0,14,166,1) 100%);
        }

        .espacio-config{
            background-color: #DAD2D1; 
            margin-top:10px; 
            margin-bottom:10px;
            margin-left:70px;
            margin-right:10px;
            padding: 10px;
            border-radius:.25rem;
        }

         .espacio-config2{
            background-color: #DAD2D1; 
            margin-top:10px; 
            margin-bottom:10px;
            margin-left:170px;
            margin-right:10px;
            padding: 10px;
            border-radius:.25rem;
        }

    </style>
@endsection
