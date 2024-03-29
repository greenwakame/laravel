@layout('layouts.master')
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
 <td>{{ $row->created_at }}</td>
 <td>{{ $row->updated_at }}</td>
 <td>{{ $row->save_space }}</td>
 <td><i class="icon-pencil"></i>
 {{ HTML::link_to_action('collection@edit','更新',array($row->id)) }}
 <i class="icon-hand-right"></i>
 {{ HTML::link_to_action('collection@detail','詳細',array($row->id)) }}</td>
 </tr>
@endforeach
</table>
{{-- 全ページリンクの表示 --}}
{{ $collections->links() }}
@endsection