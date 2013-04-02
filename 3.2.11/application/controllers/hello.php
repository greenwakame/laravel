<?php
class Hello_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        //全てのアクションにauthフィルターを適用
        //$this->filter('before' , 'auth');
        //index , listアクションのみ適用
        //$this->filter('before' , 'auth')->only(array('index' , 'list'));
    }

    public function action_index()
    {
        //contentに渡すデータの作成
        $data = array(
            'name'          => 'inaka',
            'address'       => '埼玉県',
            'email'         => 'inaka@inaka.jp'
        );
        //headerに渡すデータの作成
        $header_data = array(
            'title'         => 'laravel',
            'description'   => 'laravelの動作確認をしています'
        );
        //レイアウトのheaderにデータを渡す
        $this->layout->nest('header','hello.header',$header_data);
        //レイアウトのコメントにデータを渡す
        $this->layout->nest('content','hello.index',$data);

    }

    public function action_profile()
    {
        //アセットを登録する
        Asset::add('bootstrap-css','bootstrap/css/bootstrap.min.css');
        Asset::add('resonsive','bootstrap/css/bootstrap-responsive.min.css');
        Asset::add('jquery','js/jquery-1.9.1.min.js');
        Asset::add('bootstrap-js','bootstrap/js/bootstrap.min.js','jquery');

        return View::make('hello/profile');
    }
/*    public function action_index()
    {
        echo 'index アクション';
    }

    public function action_list()
    {
        echo 'list アクション';
    }

    public function action_add()
    {
        echo 'add アクション';
    }

    public function action_posts()
    {
        echo 'posts アクション';
    }

    public function action_test()
    {
        echo 'test アクション';
    }
*/
}