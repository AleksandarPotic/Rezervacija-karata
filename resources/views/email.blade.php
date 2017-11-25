@component('mail::message')
# <h2>Dragi,</h2>

{!!  htmlspecialchars_decode($msg) !!}

S Poštovanjem,<br>
    FK Pobeda
@endcomponent
