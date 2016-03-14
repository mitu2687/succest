<?php
App::uses('VideosController','Controller');

class VideosShell extends AppShell{
	function startup(){
		parent::startup();
		$this->VideosController=new VideosController();
	}

	public function getVideos(){
		$text=$this->VideosController->getVideos();
	}

}
