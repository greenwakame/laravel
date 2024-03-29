@layout('layouts.master')
@section('content')
 {{ Form::open('collection/create','POST',array('class'=>'form-horizontal')) }}
 <fieldset>
 <div class="control-group {{ $errors->has('title') ? 'error' : '' }}">
 {{ Form::label('title','タイトル名',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('title',Input::old('title')) }}
 {{ $errors->has('title') ? $errors->first('title','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('col_code','コード番号',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('col_code',Input::old('col_code')) }}
 {{ $errors->has('col_code') ? $errors->first('col_code','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('save_space','保管場所',array('class'=>'control-label')) }}
 <div class="controls">
 <div class="control-group form-inline">
 {{ Form::text('save_space',Input::old('save_space')) }}
 {{ $errors->has('save_space') ? $errors->first('save_space','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="form-actions">
 {{ Form::submit('新規登録',array('class'=>'btn btn-primary')) }}
 </div>
 </fieldset>
 {{ Form::close() }}
@endsection