<?php

class CaseController extends AppController{


	function index(){

		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('sptop');
		}

			//使用したいタイトル
			$title = '<title>相談手続き・費用｜任意売却・住宅ローンでお悩みならサクセスト</title>';
			//メタデータとタイトルをセット
			$this->set(compact('meta', 'title'));
	}

	function sptop(){

		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('index');
		}
		
		$this->layout = 'sp';
		//使用したいタイトル
		$title = '<title>相談手続き・費用｜任意売却・住宅ローンでお悩みならサクセスト</title>';
		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

}
