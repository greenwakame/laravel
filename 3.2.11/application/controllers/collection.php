<?php
class Collection_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        //アセットを登録する
        Asset::add('bootstrap-css','bootstrap/css/bootstrap.min.css');
        Asset::add('resonsive','bootstrap/css/bootstrap-responsive.min.css');
        Asset::add('jquery','js/jquery-1.9.1.min.js');
        Asset::add('bootstrap-js','bootstrap/js/bootstrap.min.js','jquery');
    }

    public function action_index()
    {
        //データを取得
        $data['collections'] = DB::table('collections')->order_by('created','desc')->paginate(10);

        return View::make('collection/index',$data);
    }

    public function action_create()
    {
        //データが送信されてきたら
        if($data = Input::all())
        {
            //バリデーションのルール定義
            $rules = array(
                'title'         => 'required|max:100',
                'col_code'      => 'required|alpha_dash',
                'save_space'    => 'required',
            );
            //バリデーションをインスタンス化
            $val = Validator::make($data,$rules);
            //バリデーションチェック
            if($val->fails())
            {
                //セッションに入力値を退避する
                Input::flash();
                return Redirect::to('collection/create')->with_errors($val);
            }
            else
            {
                //データ新規作成
                $create = DB::table('collections')->insert($data);
                //トップページへリダイレクト
                return Redirect::to('collection/index');
            }
        }

        //titleが送信されたら
        /*
        if(Input::get('title'))
        {
            $data['title']      = Input::get('title');
            $data['created']    = Input::get('created');
            $data['col_code']   = Input::get('col_code');
            $data['save_space'] = Input::get('save_space');
            $create = DB::table('collections')->insert($data);
        }
        */
        return View::make('collection.create');
    }

    public function action_edit($id = null)
    {
        if($input = Input::all())
        {
            $rules = array(
                'title'         => 'required|max:100',
                'col_code'      => 'required|alpha_dash',
                'save_space'    => 'required',
            );

            $val = Validator::make($input,$rules);

            if($val->fails())
            {
                return Redirect::to(URL::current())->with_errors($val);
            }
            else
            {
                $update = DB::table('collections')->where('id','=',Input::get('id'))->update($input);

                return Redirect::to('collection/index');
            }
        }

        $data['collections'] = DB::table('collections')->find($id);

        return View::make('collection/edit',$data);
    }

    public function action_detail($id)
    {
        $data['collection'] = DB::table('collections')->find($id);

        return View::make('collection/detail',$data);
    }

    public function action_delete($id)
    {
        if(Input::get('id') == $id)
        {
            $delete = DB::table('collections')->where('id' , '=' , $id)->delete();

            return Redirect::to('collection/index');
        }

        $data['collection'] = DB::table('collections')->find($id);

        return View::make('collection/delete',$data);
    }
}