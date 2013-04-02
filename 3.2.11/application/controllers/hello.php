<?php
class Hello_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        //全てのアクションにauthフィルターを適用
        //$this->filter('before' , 'auth');
        //index , listアクションのみ適用
        $this->filter('before' , 'auth')->only(array('index' , 'list'));
    }

    public function action_index()
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
}