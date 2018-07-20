@extends('layouts.new')

@section('content')
    <div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg" style="background-color: white; margin-bottom: -10%; padding-top: 5%; padding-bottom: 5%">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center" style="margin-bottom: 5%">Want to integrate your application with OrgManager? Now you can!</div>
                <p class="text-dark text-base leading-tight">Introducing the Orgmanager API, that allows you to retrieve details about organizations, your OrgManager installation or even invite users!</p>
            </div>
            <div class="px-6 py-4 text-center">
                @auth
                    <a href="" class="no-underline bg-brand hover:bg-brand-dark text-white font-bold py-2 px-4 rounded">Get your API token</a>
                @else
                    <a href="" class="no-underline bg-brand hover:bg-brand-dark text-white font-bold py-2 px-4 rounded">Login and get your API token</a>
                @endif
            </div>
        </div>
    </div>
@endsection
