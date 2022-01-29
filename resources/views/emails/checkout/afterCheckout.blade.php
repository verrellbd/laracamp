@component('mail::message')
# Register Camp :{{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, Please see payment instruction by click the button below

@component('mail::button', ['url' => route('user.checkout.invoice',$checkout->id)])
My dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent