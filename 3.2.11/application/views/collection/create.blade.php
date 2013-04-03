@layout('layouts.master')
@section('content')
 {{ Form::open('collection/create','POST',array('class'=>'form-horizontal')) }}
 <fieldset>
 <div class="control-group">
 {{ Form::label('title','タイトル名',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('title') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('created_at','作成日',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('created',date("Y-m-d H:i:s")) }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('col_code','コード番号',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('col_code') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('save_space','保管場所',array('class'=>'control-label')) }}
 <div class="controls">
 <div class="control-group form-inline">
 {{ Form::text('save_space') }}
 </div>
 </div>
 <div class="form-actions">
 {{ Form::submit('新規登録',array('class'=>'btn btn-primary')) }}
 </div>
 </fieldset>
 {{ Form::close() }}
 @endsection