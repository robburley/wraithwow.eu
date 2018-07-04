@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="fixed pin-b w-full p-4 text-2xl font-thin bg-brand text-center text-brand-lightest"
    >
        {!! $message['message'] !!}
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
