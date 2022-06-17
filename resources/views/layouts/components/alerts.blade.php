@if(session('success'))
<div class="card-panel green darken-2 white-text">
    {{session('success')}}
</div>
@elseif(session('danger'))
<div class="card-panel red darken-2 white-text">
    {{session('danger')}}

</div>
@elseif(session('warning'))
<div class="card-panel orange darken-4 white-text">
    {{session('warning')}}

</div>
@endif
