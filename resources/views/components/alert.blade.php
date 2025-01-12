@if (@session('error')
    
    <div class="alert alert-danger">
        {{seesion('error')}}
    </div>

@endsession)
    
@endif