@if (count($errors) > 0 )
    
      @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
           
@endif

@if(session('successMsg'))
             <div class="alert alert-success">
                <button type="button" arial-hidden="true" class='close' 
                onclick="this.parentElement.style.display='none'">x </button> <span>{{ session('successMsg')}}</span>
              </div>       
        @endif                   