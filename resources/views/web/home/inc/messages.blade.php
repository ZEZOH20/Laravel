@if (session('success'))
<div class="alert alert-danger" role="alert">
  {{session('success')}};
</div>
@elseif ($errors->any())
<div class="alert alert-danger" role="alert">
  @foreach ($errors->all() as $errorName)
     <p>{{$errorName}}</p>
  @endforeach
</div>
@endif
