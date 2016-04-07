<?php

App::uses( 'CakeEmail', 'Network/Email');
class InformationController extends AppController{
	public $components = array('Email');


	function links(){

		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('splinks');
		}
		//使用したいタイトル
		$title = '<title>よくある質問集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function splinks(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('links');
		}
		$this->layout = 'sp';
		//使用したいタイトル
		$title = '<title>よくある質問集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function topics(){
		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('sptopics');
		}
		//使用したいタイトル
		$title = '<title>最新トピック｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function sptopics(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('topics');
		}
		//使用したいタイトル
		$title = '<title>最新トピック｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
		$this->layout = 'sp';
	}

	function privacy(){
		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('spprivacy');
		}
		//使用したいタイトル
		$title = '<title>プライバシーポリシー｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function spprivacy(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('privacy');
		}
		$this->layout = 'sp';
		//使用したいタイトル
		$title = '<title>プライバシーポリシー｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function question(){
		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('spquestion');
		}
		//使用したいタイトル
		$title = '<title>よくある質問集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function spquestion(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('question');
		}
		$this->layout = 'sp';
		//使用したいタイトル
		$title = '<title>よくある質問集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function contact(){
		if($this->Cookie->check('post')){
			C::write('post', $this->Cookie->read('post'));
		}

		if(!C::read('post.contact_first')){
			$date = date('m月d日');
			C::write('post.contact_first',$date);
		}

		if($this->Cookie->check('error')){
			$this->set('error',$this->Cookie->read('error'));
		}

		if($this->RequestHandler->isSmartPhone()){
			$this->redirect('spcontact');
		}
		//使用したいタイトル
		$title = '<title>問合せフォーム｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function spcontact(){
		if(!$this->RequestHandler->isSmartPhone()){
			$this->redirect('contact');
		}
		if($this->Cookie->check('post')){
			C::write('post', $this->Cookie->read('post'));
		}

		if(!C::read('post.contact_first')){
			$date = date('m月d日');
			C::write('post.contact_first',$date);
		}

		if($this->Cookie->check('error')){
			$this->set('error',$this->Cookie->read('error'));
		}

		$this->layout = 'sp';
		//使用したいタイトル
		$title = '<title>問合せフォーム｜任意売却・住宅ローンでお悩みならサクセスト</title>';

		//メタデータとタイトルをセット
		$this->set(compact('meta', 'title'));
	}

	function check(){
		$this->autoRender = false;
		if( !$this->request->is('post') ){
			$this->redirect($this->referer());
		}

		$data = $this->request->data;
		if( $data['mail'] != $data['mail_check']){

			$this->Cookie->write('error','メールアドレスを確認してください。');
			$this->Cookie->write('post', $data);
			$this->redirect($this->referer());

		}

		if(@!$data['check_content1'] && @!$data['check_content2'] && @!$data['check_content3'] && @!$data['check_content4']){
			$this->Cookie->write('error', 'ご相談内容は必須です。');
			$this->Cookie->write('post', $data);
			$this->redirect($this->referer());
		}

/*
		$this->Email->smtpOptions = array(
			'timeout' => 30,
			'host' => 'ssl://smtp.gmail.com',
			'port' => 465,
			'username' => 'mitu2687sp@gmail.com',
			'password' => 'mitu2687',
		);
		*/

		$this->Email->smtpOptions = array(
			'timeout' => 30,
			'host' => 'jimma01.xsrv.jp',
			'port' => 587,
			'username' => 'info@succest.jp',
			'password' => '4XiBRua2',
		);

		$this->set(compact('data'));
		$this->Email->language ='Japanese';
		$this->Email->sendAs = 'text' ;
		$this->Email->from = 'info@succest.jp';
		$this->Email->to = 'info@succest.jp';
		$this->Email->subject = 'お問い合わせがありました';
		$this->Email->template = 'contact';
		$this->Email->send();

		$this->Email->to = 'succest.ad@gmail.com';
		$this->Email->send();

		$this->Email->to = $data['mail'];
		$this->Email->subject = '【お問い合わせ完了】弁護士法人サクセスト ※返信不可';
		$this->Email->template = 'thanks';
		$this->Email->send();
 
		$this->redirect('/information/thanks');

	}

	function thanks(){
		$this->Cookie->delete('post');
		if($this->Cookie->check('error')){
			$this->Cookie->delete('error');
		}
	}

	function error404(){


		if($this->RequestHandler->isSmartPhone()){
			$this->layout = 'sp';
			$this->render('error404sp');
		}

	}

}
