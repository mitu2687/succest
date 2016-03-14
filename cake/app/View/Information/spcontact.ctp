<div class="row">

    <div class="col-xs-12" >
         <p class="h2 text-blue sp-left">お問い合わせフォーム</p>
    </div>
        <form method="post"  action="/information/check" class="padding-sm">
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                <label class="control-label text-blue">
                    <span class="label label-danger">必須</span>
                     お名前
                </label>
            </div>
            <div class="col-xs-12  sp-bottom form-text-box padding">
               <input type="text" name="data[name]" class="form-control" required <?php echo C::read('post.name');?>>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12">
                <label class="control-label text-blue">
                    ふりがな
                </label>
            </div>
            <div class="col-xs-12 sp-bottom padding" >
                <input type="text" name="data[name_kana]" class="form-control"  <?php echo C::read('post.name_kana');?>>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                <label class="control-label text-blue">
                    <span class="label label-danger">必須</span>
                    電話番号
                </label>
            </div>
            <div class="col-xs-12 sp-bottom form-text-box padding">
                 <input type="text" name="data[tel]" class="form-control" required <?php echo C::read('post.tel');?>>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12">
                <label class="control-label text-blue">
                    <span class="label label-danger">必須</span>
                    メールアドレス
                </label>
            </div>
            <div class="col-xs-12 sp-bottom padding" >
                    <input type="text" name="data[mail]" class="form-control" required> <?php echo C::read('post.mail');?>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                <label class="control-label text-blue">
                    <span class="label label-danger">必須</span>
                    メールアドレス(確認)
                </label>
            </div>
            <div class="col-xs-12 sp-bottom form-text-box padding">
                    <input type="text" name="data[mail_check]" class="form-control" required> <?php echo C::read('post.mail_check');?>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12">
                <label class="control-label text-blue">
                    お住まい<br>
                    <span class="">(都道府県・市区町村まで)</span>
                </label>
            </div>
            <div class="col-xs-12 sp-bottom padding" >
                    <input type="text" name="data[address]" class="form-control"  > <?php echo C::read('post.address');?>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                    <label class="control-label text-blue">
                    借入の状況
                    （住宅ローン以外の借入含む）
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom form-text-box padding">
								<textarea class="form-control non" rows="3" name="data[loan]" placeholder="【記入例】
 ①借入先　○○銀行
 ②借入残高　○○万円
 ③担保物件所在地：東京都○○区○丁目○番○号○○マンション○号室"><?php echo C::read('post.loan');?></textarea>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12">
                    <label class="control-label text-blue">
                    債務状況
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom padding" >
                    <div class="checkbox">
                        <label>
                            <?php $check = C::read('post.check_loan1')? 'checked': '' ;?>
                            <input type="checkbox" value="1" name="data[check_loan1]" <?php echo $check;?>>
                            滞納なし
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = C::read('post.check_loan2')? 'checked': '' ;?>
                            <input type="checkbox" value="2" name="data[check_loan2]" <?php echo $check;?>>
                            滞納中(およそ<input style="width:50px;" class="form-control form-control-inline" type="text"  name="data[check_text]" value="<?php echo C::read('post.check_text');?>">ヶ月)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = C::read('post.check_loan3')? 'checked': '' ;?>
                            <input type="checkbox" value="3" name="data[check_loan3]" <?php echo $check;?>>
                            競売開始決定済み
                        </label>
                    </div>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                    <label class="control-label text-blue">
                    無料面談希望日<br>
                    <span class="">(9時～20時 土日除く)</span>
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom form-text-box padding">
                    <label class="control-label col-sm-4">
                    第一希望日
                    </label>
			<div class="clearfix"></div>
                        <input type="text" name="data[contact_first]" value="<?php echo Configure::read("post.contact_first"); ?>" class="form-control datepicker" style="width:95px; display:inline;" >
                        <input type="text" name="data[contact_first_time]" placeholder="15" value="<?php echo Configure::read("post.contact_first_time");?>" class="form-control non" style="width:60px; display:inline;"> 時 ～
                        <input type="text" name="data[contact_first_time2]" placeholder="18"  value="<?php echo Configure::read("post.contact_first_time2");?>" class="form-control non" style="width:60px; display:inline;"> 時

                    <label class="control-label col-sm-4">
                    第二希望日
                    </label>
                        <div class="clearfix"></div>
                        <input type="text" name="data[contact_second]" value="<?php echo Configure::read("post.contact_second"); ?>" class="form-control datepicker" style="width:95px; display:inline;" >
                        <input type="text" name="data[contact_second_time]" placeholder="15" value="<?php echo Configure::read("post.contact_second_time");?>" class="form-control non" style="width:60px; display:inline;"> 時 ～
                        <input type="text" name="data[contact_second_time2]" placeholder="18"  value="<?php echo Configure::read("post.contact_second_time2");?>" class="form-control non" style="width:60px; display:inline;"> 時

                    <label class="control-label col-sm-4">
                    第三希望日
                    </label>
                        <div class="clearfix"></div>
                        <input type="text" name="data[contact_third]" value="<?php echo Configure::read("post.contact_third"); ?>" class="form-control datepicker" style="width:95px; display:inline;" >
                        <input type="text" name="data[contact_third_time]" placeholder="15" value="<?php echo Configure::read("post.contact_third_time");?>" class="form-control non" style="width:60px; display:inline;"> 時 ～
                        <input type="text" name="data[contact_third_time2]" placeholder="18"  value="<?php echo Configure::read("post.contact_third_time2");?>" class="form-control non" style="width:60px; display:inline;"> 時

            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12">
                    <label class="control-label text-blue">
                    <span class="label label-danger">必須</span>
                    ご相談内容<br>
                    <span >(できるだけ具体的にご記載ください)</span>
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom padding" >
                    <div class="checkbox">
                        <label>
                            <?php $check = C::read('post.check_content1')? 'checked': '' ;?>
                            <input type="checkbox" value="1" name="data[check_content1]" <?php echo $check;?>>
                            支払いが困難になる
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = C::read('post.check_content2')? 'checked': '' ;?>
                            <input type="checkbox" value="2" name="data[check_content2]" <?php echo $check;?>>
                            延滞（1〜2ヶ月）
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = $this->Session->read('post.check_content3')? 'checked': '' ;?>
                            <input type="checkbox" value="3" name="data[check_content3]" <?php echo $check;?>>
                            競売通知
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = $this->Session->read('post.check_content4')? 'checked': '' ;?>
                            <input type="checkbox" value="4" name="data[check_content4]" <?php echo $check;?>>
                            その他 <input type="text" class="form-control form-control-inline" name="data[check_content5]" style="width:200px;"value="<?php echo C::read('post.check_content5');?>">
                        </label>
                    </div>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box">
                    <label class="control-label text-blue">
                    自由記入欄
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom form-text-box padding">
                <textarea class="form-control non" rows="3" name="data[free]" placeholder="ご質問があればご記入下さい。"><?php echo C::read('post.free');?></textarea>
            </div>
        </div>
        <div class="form-group padding">
            <div class="col-xs-12 form-text-box2">
                    <label class="control-label text-green">
                    <span class="label label-success">任意</span>
                    アンケート
                    </label>
            </div>
            <div class="col-xs-12 sp-bottom padding form-text-box2" >
                    <label>
                    <span>当サイトをどこでお知りになられましたか？</span>
                    </label>
                    <div class="checkbox">
                        <label>
                            <?php $check = $this->Session->read('post.check_anc1')? 'checked': '' ;?>
                            <input type="checkbox" value="1" name="data[check_anc1]" <?php echo $check;?>>
                            検索サイト(Yahoo.google)での検索
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <?php $check = $this->Session->read('post.check_anc2')? 'checked': '' ;?>
                            <input type="checkbox" value="2" name="data[check_anc2]" <?php echo $check;?>>
                            Youtubeの動画
                        </label>
                    </div>
                    <div class="checkbox sp-bottom">
                        <label>
                            <?php $check = $this->Session->read('post.check_anc3')? 'checked': '' ;?>
                            <input type="checkbox" value="3" name="data[check_anc3]" <?php echo $check;?>>
                            その他
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            「検索サイト(Yahoo.google)での検索」を<br>選択された方<br>検索入力したキーワードを教えてください。
                        <textarea name="data[anc]" class="form-control non" rows="3" placeholder="例：住宅ローン、滞納/任意売却など"><?php echo C::read('post.anc');?></textarea>
                        </label>
                    </div>
            </div>
        </div>
        <button class="btn btn-block btn-primary">送信</button>
        </form>
    <?php echo $this->element('sp-links');?>

</div>
<script>
$(function() {
  $('.datepicker').datepicker(
  {
    language: 'ja',
        format: 'mm月dd日',
  }
  );

});
</script>
