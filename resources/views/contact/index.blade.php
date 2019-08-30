{{-- @extends('frontend.lienhe')

@section('content-1')
<h1>Contact</h1>
@if(count($contacts)>0)
@foreach($contacts as $contact)
  <div class="card bg-light">
    <div class="card-body">
    <h3><a href="todo/{{$contact->id}}">{{$contact->name}}</a></h3>
    <span class="lable label-danger">{{$contact->tieude}}</span>
    <p>{{$contact->noidung}}</p>
    <span class="lable label-danger">{{$contact->email}}</span>
    </div>
</div>

@endforeach
@endif
@endsection --}}