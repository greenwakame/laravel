@layout('layouts.master')
@section('content')
{{ Form::open(URL::current(),'POST',array('class'=>'form-horizontal')) }}
<fieldset>
<div class="control-group">
{{ Form::label('name','送信先名',array('class'=>'control-label')) }}
<div class="controls">
 {{ Form::text('name',Input::old('name')) }}
 {{ $errors->has('name') ? $errors->first('name','<p><span class="label label-important">:message</span></p>') : '' }}
</div>
</div>
<div class="control-group">
{{ Form::label('email','送信先Eメール',array('class'=>'control-label')) }}
<div class="controls">
 {{ Form::text('email',Input::old('email')) }}
 {{ $errors->has('email') ? $errors->first('email','<p><span class="label label-important">:message</span></p>') : '' }}
</div>
</div>
<div class="control-group">
{{ Form::label('subject','件名',array('class'=>'control-label')) }}
<div class="controls">
 {{ Form::text('subject',Input::old('subject')) }}
 {{ $errors->has('subject') ? $errors->first('subject','<p><span class="label label-important">:message</span></p>') : '' }}
</div>
</div>
<div class="control-group">
{{ Form::label('body','本文',array('class'=>'control-label')) }}
<div class="controls">
{{ Form::textarea('body','',array('rows'=>'3','class'=>'span6','placeholder'=>'メール本文を記述して下さい')) }}
 {{ $errors->has('body') ? $errors->first('body','<p><span class="label label-important">:message</span></p>') : '' }}
</div>
</div>
<div class="form-actions">
{{ Form::submit('メール送信',array('class'=>'btn btn-primary')) }}
</div>
</fieldset>
{{ Form::close() }}
@endsection