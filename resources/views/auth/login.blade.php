@extends('layouts.app')

@section('content')
    <div class="flex w-100 h-screen justify-center items-center">
        <div class="w-full max-w-sm">
            <h1 class="font-medium tracking-wide text-center mb-4 text-brand-lightest">
                Heil Fuhrer 👋
            </h1>

            {!! Form::open(['url' => '/login', 'class' => 'px-8 pt-6 pb-8 mb-4']) !!}

            <div class="mb-6">
                <label for="email" class="hidden block text-grey-darker text-sm font-bold mb-2">
                    Email Address
                </label>

                <input id="email"
                       name="email"
                       type="text"
                       value=""
                       placeholder="Email Address"
                       required="required" autofocus="autofocus"
                       class="shadow appearance-none border rounded w-full py-3 px-3 text-grey-darker leading-tight"
                >

                @if ($errors->has('email'))
                    <small class="text-red pt-4">
                        <i class="fa fa-times-circle"></i> {{ $errors->first('email') }}
                    </small>
                @endif
            </div>

            <div class="mb-6">
                <label for="password" class="hidden block text-grey-darker text-sm font-bold mb-2">
                    Password
                </label>

                <input id="password"
                       name="password"
                       type="password"
                       placeholder="Password"
                       required="required"
                       class="shadow appearance-none border rounded w-full py-3 px-3 text-grey-darker leading-tight"
                >

                @if ($errors->has('password'))
                    <small class="text-red pt-4">
                        <i class="fa fa-times-circle"></i> {{ $errors->first('password') }}
                    </small>
                @endif
            </div>

            <button type="submit" class="w-full bg-brand hover:bg-blue-dark text-white font-light py-4 rounded">
                Log In
            </button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
