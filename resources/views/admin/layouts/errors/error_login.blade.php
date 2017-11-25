@if(count($errors) >0)
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">Email i šifra nisu validne. Pokušajte ponovo.</p>
    @endforeach
@endif