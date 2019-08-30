@extends('frontend.lienhe')

@section('content')
  <h1>Create Todo</h1>

   
  {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
{{Form::label('name')}}
  {{ Form::Text('name') }}
{{Form::label('email')}}
  {{ Form::Text('email') }}
{{Form::label('tieu', 'E-Mail Address')}}
  {{ Form::Text('tieude') }}
{{Form::label('email', 'E-Mail Address')}}
  {{ Form::TextArea('noidung') }}
  {{ Form::Submit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
