@php
    use Illuminate\Support\Facades\Auth;
    $userId = Auth::id();
@endphp

<div class="min-h-screen flex">
    {{-- Sidebar --}}
    <x-sidebar />
    {{--main--}}
    <div class="py-4 px-8 w-full lg:w-3/4 bg-white">
        <h1 class="mb-4 py-3 text-3xl text-dark montserrat-bold">{{ $title }}</h1>
        {{ $slot }}
    </div>
</div>

