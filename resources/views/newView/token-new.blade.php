@extends('layouts.new')

@section('content')
    <div>
        <div class="max-w-lg rounded overflow-hidden shadow-lg" style="background-color: white; margin-bottom: -10%; padding-top: 5%; padding-bottom: 5%">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">Your token</div>
                    <p class="text-dark text-base leading-tight mb-2">You'll find your token below. Remember to treat it like a password, as it gives anyone the ability to invite anyone to your organization. You can use the button below to reset it if you need to.</p>
                    <input class="appearance-none block w-full rounded py-3 px-4 mb-3 text-center" style="background-color: #DAD2D1; margin-bottom: -2%" id="token" value="sadoiasf23r2wkasdas" readonly>
                </div>
                <div class="px-6 py-4 text-center">
                    <form id="regenerate-token" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded focus:outline-none">Reset token</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
