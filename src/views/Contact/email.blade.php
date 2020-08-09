@component('mail::message')
# Introduction

There is new query from {{$name}}
<br>
Message : 
{{$message}}

@component('mail::button', ['url' => 'https://skundu.in'])
Welcome Laravel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
