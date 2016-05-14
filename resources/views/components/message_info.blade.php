@if (Session::get('message'))
    <div class="alert alert-info" role="alert">
        {{Session::get('message')}}
    </div>
@endif