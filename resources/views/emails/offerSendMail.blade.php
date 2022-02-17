@component('mail::message')
# Introduction

This is the Test Message.

@component('mail::button', ['url' => 'https://github.com/svrajput80'])
Button Text
@endcomponent

Thanks,<br>
<!-- {{ config('app.name') }} -->
@endcomponent
