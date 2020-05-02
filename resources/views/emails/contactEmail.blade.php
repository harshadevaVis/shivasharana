@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
Contact Us
@endcomponent
@endslot

{{-- Body --}}

<h4>Name : {{ $data{'name'}  }}</h4>
<h4>Email : {{ $data{'email'}  }}</h4>
<h3>Subject : {{ $data{'email'}  }}</h3>
<h3>Message : </h3>
<p>{{ $data{'email'}  }}</p>

<!-- Body here -->

{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy here -->
@endcomponent
@endslot


{{-- Footer --}}
@slot('footer')
@component('mail::footer')
<!-- footer here -->
@endcomponent
@endslot
@endcomponent
