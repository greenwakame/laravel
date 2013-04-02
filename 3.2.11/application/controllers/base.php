<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */

	//レイアウト設定
	public $layout = 'layouts.template';
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}