<x-mail::message>
    <style>

    </style>
    # Introduction
    {{$data->name}}
    The body of your message.

    {{$name}}
    <x-mail::button :url="''">
        Button Text

    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
