<?php
class LoanController extends AppController{

    function index(){
        if($this->RequestHandler->isSmartPhone()){
            $this->redirect('sptop');
        }

        //使用したいタイトル
        $title = '<title>住宅ローンについて｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }



    function sptop(){
        if(!$this->RequestHandler->isSmartPhone()){
            $this->redirect('index');
        }
        $this->layout = 'sp';

                //使用したいタイトル
        $title = '<title>住宅ローンについて｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }

    function answer(){
        if($this->RequestHandler->isSmartPhone()){
            $this->redirect('spanswer');
        }

                //使用したいタイトル
        $title = '<title>解決方法｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }

    function spanswer(){
        if(!$this->RequestHandler->isSmartPhone()){
            $this->redirect('answer');
        }
        $this->layout = 'sp';

                //使用したいタイトル
        $title = '<title>解決方法｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }

    function appeal(){
        if($this->RequestHandler->isSmartPhone()){
            $this->redirect('spappeal');
        }
                //使用したいタイトル
        $title = '<title>当社の強み｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }

    function spappeal(){
        if(!$this->RequestHandler->isSmartPhone()){
            $this->redirect('appeal');
        }
        $this->layout = 'sp';
                //使用したいタイトル
        $title = '<title>当社の強み｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

    }

    function test(){
        if($this->RequestHandler->isSmartPhone()){
            $this->redirect('spappeal');
                    //使用したいタイトル
        $title = '<title>当社の強み｜任意売却・住宅ローンでお悩みならサクセスト</title>';

        //メタデータとタイトルをセット
        $this->set(compact('meta', 'title'));

        }
    }

}
