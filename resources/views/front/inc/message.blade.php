
{{-- error message --}}

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" p-1 my-1>{{$error}}
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

</div>
@endforeach
@endif

{{-- add success message --}}

@if(session('success')!=null)
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert"
aria-hidden="true">X</button>
    {{ session('success') }}
</div>
@endif

{{-- delete success message --}}
@if(session('deleted')!=null)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">X</button>
                    {{ session('deleted') }}
                </div>
                @endif

{{-- borrow book not avalible message --}}

                @if(session('borrowMessage')!=null)
                <div class="alert alert-danger">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                    {{ session('borrowMessage') }}
                </div>
                @endif

{{-- borrow book waiting message --}}

@if(session('borrowWaiting')!=null)
<div class="alert alert-success">
{{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button> --}}

    {{ session('borrowWaiting') }}
</div>
@endif

{{-- cancel borrow message --}}

@if(session('cancelBorrow')!=null)
<div class="alert alert-success">
    {{ session('cancelBorrow') }}
</div>
@endif


{{--  --}}

@if(session('notVerifyLogin')!=null)
<div class="alert alert-danger">
    {{ session('notVerifyLogin') }}
</div>
@endif

