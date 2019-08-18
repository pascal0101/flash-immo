@component('mail::message')
# Bonjour
{{$nom}}
@component('mail::panel')
{{$msg}}
@endcomponent
-{{$nom}}<br>
-{{$email}}<br>
-{{$numero}}
Merci,<br>
{{ config('app.name') }}
@endcomponent
