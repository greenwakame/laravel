@layout('layouts.master')
@section('navigation')
 <li>{{ HTML::link('collection/index','トップページ') }}</li>
 <li>{{ HTML::link('collection/create','新規作成') }}</li>
@endsection
@section('content')
 {{ Form::open(URL::current(),'POST',array('class'=>'form-horizontal')) }}
 <fieldset>
 <div class="control-group {{ $errors->has('title') ? 'error' : '' }}">
 {{ Form::label('title','タイトル名',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('title',$collections->title) }}
 {{ $errors->has('title') ? $errors->first('title','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('col_code','コード番号',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('col_code',$collections->col_code) }}
 {{ $errors->has('col_code') ? $errors->first('col_code','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('save_space','保管場所',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('save_space',$collections->save_space) }}
 {{ $errors->has('save_space') ? $errors->first('save_space','<p><span class="label label-important">:message</span></p>') : '' }}
 </div>
 </div>
 <div class="form-actions">
 {{ Form::hidden('id',$collections->id) }}
 {{ Form::submit('データ更新',array('class'=>'btn btn-primary')) }}
 </div>
 </fieldset>
 {{ Form::close() }}
@endsection