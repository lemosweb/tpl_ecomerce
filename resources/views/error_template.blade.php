@if($errors->any())

    @foreach($errors->all() as $error)
        <div class="alert alert-warning">
            <b>Atenção:</b> {{ $error }}
        </div>
    @endforeach

@endif