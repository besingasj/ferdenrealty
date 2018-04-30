@component('mail::message')
# You got new message {{ $user->name }}

@component('mail::panel')
    {{ $data->message }}
@endcomponent

Thanks,<br>
{{ $data->name }}
@endcomponent
