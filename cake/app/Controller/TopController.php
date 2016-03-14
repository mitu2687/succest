<?php
class TopController extends AppController{


	function index(){

		//スマホ用にリダイレクト
		if($this->RequestHandler->isSmartPhone()){

			if($this->request->is('get')){
				$data = $this->request->query;

				//リクエスト付きでリダイレクト
				$this->redirect(array(
					'action' => 'sptop',
					'?' => $data
				)
			);
			}

			$this->redirect('sptop');
		}

		//使用したいタイトル
		$title = '<title>任意売却・住宅ローンでお悩みなら｜弁護士法人サクセスト</title>';

		//使用したいメタデータ '' の中なら複数入れてOK tag内の囲み文字はダブルクォーテーション
		//$meta = '<meta title="任意売却・住宅ローンでお悩みなら｜弁護士法人サクセスト" content="">';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));

	}

	function sptop(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('index');
		}
		$this->layout = 'sp';

		//使用したいタイトル
		$title = '<title>任意売却・住宅ローンでお悩みなら｜弁護士法人サクセスト</title>';

		//使用したいメタデータ
		//$meta = '<meta name="任意売却・住宅ローンでお悩みなら｜弁護士法人サクセスト" content="">';

		$this->set(compact('meta', 'title'));

	}

	function info(){
		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('spinfo');
		}
    //使用したいタイトル
		$title = '<title>弁護士法人概要｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		$this->set(compact( 'title'));
	}

	function spinfo(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('info');
		}
		$this->layout = 'sp';
		 //使用したいタイトル
		$title = '<title>弁護士法人概要｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		$this->set(compact( 'title'));
	}

	function recruit(){
		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('sprecruit');
		}
		//使用したいタイトル
		$title = '<title>弁護士法人概要｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		$this->set(compact( 'title'));
	}

	function sprecruit(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('recruit');
		}
		$this->layout = 'sp';
		 //使用したいタイトル
		$title = '<title>弁護士法人概要｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		$this->set(compact( 'title'));
	}

	function layoutTop(){
		$this->layout = 'default2';
	}

}
