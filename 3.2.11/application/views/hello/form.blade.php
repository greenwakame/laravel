@layout('layouts.master')
@section('content')
 {{ Form::open('hello/form','POST',array('class'=>'form-horizontal')) }}
 <fieldset>
 <div class="control-group">
 {{ Form::label('username','ユーザー名',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('username') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('email','Eメール',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::text('email','inaka@inaka.jp') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('password','パスワード',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::password('password') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('sex','性別',array('class'=>'control-label')) }}
 <div class="controls">
 <div class="control-group form-inline">
 {{ Form::label('men','男性',array('class'=>'span1')) }}
 {{ Form::radio('men','1',true) }}
 </div>
 <div class="control-group form-inline">
 {{ Form::label('famale','女性',array('class'=>'span1')) }}
 {{ Form::radio('famale','2') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('native','出身地',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::select('native',array('1'=>'関東','2'=>'関西','3'=>'他'),'1') }}
 </div>
 </div>
 <div class="control-group">
 {{ Form::label('textarea','ご意見',array('class'=>'control-label')) }}
 <div class="controls">
 {{ Form::textarea('textarea','',array('rows'=>'3','class'=>'span6','placeholder'=>'ご意見をお聞かせ下さい')) }}
 </div>
 </div>
 </div>
 <div class="form-actions">
 {{ Form::submit('フォーム送信',array('class'=>'btn btn-primary')) }}
 </div>
 </fieldset>
 {{ Form::close() }}
 @endsection