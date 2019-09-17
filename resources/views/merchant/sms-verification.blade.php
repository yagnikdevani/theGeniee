
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

{!! Form::open(['route' => 'check_verification_code','enctype'=>"multipart/form-data"]) !!}
<h3>Please Enter Otp Hear</h3>
<div class="form-group">
    {!! Form::label('otp', 'Enter Otp Hear') !!}
    {!! Form::text('otp_code', null, ['class' => 'form-control']) !!}
    {!! Form::hidden('merchant_id', $id) !!}
</div>


{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}