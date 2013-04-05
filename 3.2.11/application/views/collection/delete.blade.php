@layout('layouts.master')
@section('navigation')
 <li>{{ HTML::link('collection/index','トップページ') }}</li>
 <li>{{ HTML::link('collection/create','新規作成') }}</li>
@endsection
@section('content')
<div class="row">
<div class="span12 alert alert-error">
下記のデータを削除します。よろしいですか。
</div>
</div>
<div class="row">
<div class="span6 offset2 hero-unit">
<table class="table">
 <tr>
 <th>id</th>
 <td>{{ $collections->id }}</td>
 </tr>
 <tr>
 <th>タイトル</th>
 <td>{{ $collections->title }}</td>
 </tr>
 <tr>
 <th>作成日</th>
 <td>{{ $collections->created }}</td>
 </tr>
 <tr>
 <th>更新日</th>
 <td>{{ $collections->modified }}</td>
 </tr>
 <tr>
 <th>保管場所</th>
 <td>{{ $collections->save_space }}</td>
 </tr>
 <tr>
</table>
{{ Form::open() }}
{{ Form::hidden('id',$collections->id) }}
{{ Form::submit('データ削除',array('class'=>'btn btn-danger')) }}
{{ Form::close() }}
</div>
</div>
@endsection