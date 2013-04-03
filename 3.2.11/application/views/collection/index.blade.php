@layout('layouts.master')
@section('content')
トップページです
{{-- 全ページリンクの表示 --}}
{{ $collections->links() }}
{{-- 前後ページリンクの表示 --}}
<div class="pagination"><ul>
{{ $collections->previous() }}
{{ $collections->next() }}
</ul></div>
<table class="table table-striped table-bordered">
 <tr>
 <th>id</th>
 <th>タイトル</th>
 <th>作成日</th>
 <th>更新日</th>
 <th>保管場所</th>
 </tr>
@foreach($collections->results as $row)
 <tr>
 <td>{{ $row->id }}</td>
 <td>{{ $row->title }}</td>
 <td>{{ $row->created }}</td>
 <td>{{ $row->modified }}</td>
 <td>{{ $row->save_space }}</td>
 </tr>
@endforeach
</table>
@endsection