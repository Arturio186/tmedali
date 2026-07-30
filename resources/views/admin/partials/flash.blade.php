@if(session('success'))
    <div class="flash success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="flash error">
        {{ session('error') }}
    </div>
@endif