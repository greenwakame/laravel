@layout('layouts.master')
@section('navigation')
 <li>{{ HTML::link('collection/index','トップページ') }}</li>
 <li>{{ HTML::link('collection/create','新規作成') }}</li>
@endsection
@section('content')
<table class="table table-bordered">
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
 <th>処理</th>
 <td>
 <i class="icon-pencil"></i>
 {{ HTML::link_to_action('collection@edit','編集',array($collections->id)) }}
 <i class="icon-remove"></i>
 {{ HTML::link_to_action('collection@delete','削除',array($collections->id)) }}
 </td>
 </tr>
</table>
@endsection