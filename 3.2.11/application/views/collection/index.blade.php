@layout('layouts.master')
@section('navigation')
<li>{{ HTML::link('collection/index','トップページ') }}</li>
<li>{{ HTML::link('collection/create','新規作成') }}</li>
@endsection
@section('content')
<table class="table table-striped table-bordered">
 <tr>
 <th>id</th>
 <th>タイトル</th>
 <th>作成日</th>
 <th>更新日</th>
 <th>保管場所</th>
 <th>処理</th>
 </tr>
@foreach($collections->results as $row)
 <tr>
 <td>{{ $row->id }}</td>
 <td>{{ $row->title }}</td>
 <td>{{ $row->created }}</td>
 <td>{{ $row->modified }}</td>
 <td>{{ $row->save_space }}</td>
 <td>{{ HTML::link_to_action('collection@edit','更新',array($row->id)) }}</td>
 </tr>
@endforeach
</table>
{{-- 全ページリンクの表示 --}}
{{ $collections->links() }}
@endsection