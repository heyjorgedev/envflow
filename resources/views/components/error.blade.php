@props(['error' => []])
@php($error = is_string($error) ? [$error] : $error)
@if($error)
    <p class="mt-2 text-sm text-red-600" id="email-error">
        @foreach($error as $error)
            {{ $error }}<br>
        @endforeach
    </p>
