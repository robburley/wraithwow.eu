@extends('layouts.app')

@section('content')
    <div class="flex bg-grey-lightest">
        <div class="container mx-auto py-8">
            <h1 class="font-thin tracking-wide mb-4">Applications</h1>

            <applications :applications="{{ $applications }}"></applications>
        </div>
    </div>
@endsection
