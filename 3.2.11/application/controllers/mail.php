<?php
class Mail_Controller extends Base_Controller
{
    function __construct()
    {
        parent::__construct();
        //全てのアクションにauthフィルターを適用
        //$this->filter('before' , 'auth');
        //index , listアクションのみ適用
        //$this->filter('before' , 'auth')->only(array('index' , 'list'));

        //アセットを登録する
        Asset::add('bootstrap-css','bootstrap/css/bootstrap.min.css');
        Asset::add('resonsive','bootstrap/css/bootstrap-responsive.min.css');
        Asset::add('jquery','js/jquery-1.9.1.min.js');
        Asset::add('bootstrap-js','bootstrap/js/bootstrap.min.js','jquery');
    }

    public function action_index()
    {
        if($inputs = Input::all())
        {
            $rules = array(
                'name'          => 'required|max:100',
                'email'         => 'required|email',
                'subject'       => 'required',
                'body'          => 'required',
            );

        $val = Validator::make($inputs,$rules);

            if($val->fails())
            {
                return Rediret::back()->with_errors($val)->with_input();
            }
            else
            {
                $mailer = IoC::resolve('mailer');
                $message = Swift_Message::newInstance()
                ->setFrom(array(
                    'inaka@inaka.com' => 'inaka'
                ))->setTo(array(
                    Input::get('email') => Input::get('name')
                ))->setSubject(Input::get('body'), 'text/html');
                //メールの送信
                $mailer->send($message);
            }
        }
        return View::make('mail/sendmail');
    }
}