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
        //titleが送信されたら
        if(Input::get('title'))
        {
            $data['title']      = Input::get('title');
            $data['created']    = Input::get('created');
            $data['col_code']   = Input::get('col_code');
            $data['save_space'] = Input::get('save_space');
            $create = DB::table('collections')->insert($data);
        }
        return View::make('collection.create');
    }
}