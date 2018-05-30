@component('mail::message')
# You got new message {{ $user->name }}

@component('mail::panel')
    {{ $data->message }}
@endcomponent

this email is referring to {{ $data->server('HTTP_REFERER') }}

Thanks,<br>
{{ $data->name }}<br />
{{ $data->email }}
@endcomponent
