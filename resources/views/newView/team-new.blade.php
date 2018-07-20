@extends('layouts.app')

@section('content')
    <div class="" style="background-image: url('../img/fondo-negro.jpg'); padding-top: 21px">
        <div class="row" style="margin-left: 0px; margin-right: 0px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div id="titulo-settings" class="panel-heading text-center" style="font-family: 'Pacifico', cursive;
                           color: #4b4342;">
                        <b>
                    Teams - Manuel
                        </b>
                    </div>

                    <div class="panel-body">
                        <h4 class="text-center">Manuel's Teams</h4>
                        <p class="text-center">OrgManager v3 introduces Teams, a new function that allows you to specify
                            a team your invited users will go into. Please note that this feature is still in a beta
                            version, so use the report widget if you find any bugs.</p>
                        <div class="row">
                            <div class="col-md-4 text-center espacio-config">
                                <p>Step 1:<br>Sync organization teams</p>
                                <form id="sync-teams" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="octicon octicon-sync"></i>
                                        Sync Teams
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4 text-center espacio-config">
                                <p>Step 2:<br>Select the team users will go into</p>
                                <form id="select-team" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <select id="team_id" type="teams" class="form-control" name="team_id">
                                            <option value="">Select a team</option>
                        
                                                <option value="[1,2,3,4]"
                                                        selected="selected">Team Manuel</option>
                                
                                        </select>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Select Team</button>
                                </form>
                            </div>
                            <div class="col-md-4 text-center" style="margin-left: 33%">
                                <p>Status:</p>
                                    <div class="flash" >
                                        <p>Your organization is not currently adding users to any team.</p>
                                    </div>
                            </div>
                        </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>Don't like it?</p>
                                    <form method="POST" id="delete-teams">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete Teams</button>
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
