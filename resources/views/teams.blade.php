@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Teams - Manuel</div>

                    <div class="panel-body">
                        <h4 class="text-center">Manuel's Teams</h4>
                        <p class="text-center">OrgManager v3 introduces Teams, a new function that allows you to specify
                            a team your invited users will go into. Please note that this feature is still in a beta
                            version, so use the report widget if you find any bugs.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <p>Step 1:<br>Sync organization teams</p>
                                <form id="sync-teams" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary"><i class="octicon octicon-sync"></i>
                                        Sync Teams
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>Step 2:<br>Select the team users will go into</p>
                                <form id="select-team" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <select id="team_id" type="teams" class="form-control" name="team_id">
                                            <option value="">Select a team</option>
                                                <option value="[1,2,3,4,5]"
                                                        selected="selected">Team Manuel</option>
                                        </select>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Select Team</button>
                                </form>
                                @if (count($errors) > 0)
                                    <br>
                                    <div class="flash flash-error">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 text-center">
                                <p>Status:</p>
                                    <div class="flash">
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
                        <div class="flash">
                            <p class="text-center">TIP: Want a pretty URL for your users? Share <a
                                        href="" target="_blank" rel="noopener noreferrer">Manuel/csada</a>
                                !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
