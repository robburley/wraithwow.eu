@extends('layouts.app')

@section('content')
    <div class="w-full min-h-screen bg-cover py-16"
         style="background-image: url('https://stmed.net/sites/default/files/world-of-warcraft%3A-battle-for-azeroth-hd-wallpapers-33910-1964358.jpg') "
    >
        <div class="container mx-auto">
            <div class="bg-white rounded p-4">
                {!! Form::open(['url' => '/apply']) !!}
                <h4 class="mb-4 mt-4 text-2xl font-thin px-4">
                    Apply to Wraith
                </h4>

                @include('_includes.application-form')

                @captcha('en')

                <div class="flex flex-col md:flex-row mb-8 px-4 items-end justify-end">
                    <button type="submit"
                            class="px-4 py-3 bg-brand-dark text-brand-lightest hover:bg-brand-lightest hover:text-brand-dark rounded">
                        Apply
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
