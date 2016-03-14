<?php

class ConsultationController extends AppController{

    function index(){
        if($this->RequestHandler->isSmartPhone()){
            $this->redirect('sptop');
        }
              //使用したいタイトル
        $title = '<title>相談事例集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));
    }

    function sptop(){
        if(!$this->RequestHandler->isSmartPhone()){
            $this->redirect('index');
        }
        $this->layout = 'sp';
              //使用したいタイトル
        $title = '<title>相談事例集｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));
    }
}
