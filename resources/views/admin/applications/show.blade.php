@extends('layouts.app')

@section('content')
    <div class="flex bg-grey-lightest">
        <div class="container mx-auto py-8">
            <div class="bg-white rounded p-4">
                <h1 class="font-thin tracking-wide mb-4">Application</h1>

                {!! Form::model($application) !!}

                @include('_includes.application-form')

                {!! Form::close() !!}

                <div class="flex flex-col md:flex-row mb-8 px-4 items-end justify-end">
                    {!! Form::open(['route' => ['admin.applications.update', $application]]) !!}
                    <button type="submit"
                            class="px-4 py-3 bg-brand-dark text-brand-lightest hover:bg-brand-lightest hover:text-brand-dark rounded mr-2">
                        Accept
                    </button>
                    {!! Form::close() !!}

                    {!! Form::open(['route' => ['admin.applications.destroy', $application]]) !!}
                    <button type="submit"
                            class="px-4 py-3 bg-red-dark text-brand-lightest hover:bg-brand-lightest hover:text-brand-dark rounded">
                        Reject
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
