<div class="col-12">
    @if(session('error'))
      <div class="alert alert-danger" role="alert">
          {{session('error')}}
        </div>
    @else
        @if(session('msg'))
          <div class="alert alert-success" role="alert">
              {{session('msg')}}
          </div>
        @endif
    @endif
</div>



