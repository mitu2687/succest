

【お名前】<?php echo $data['name'];?>様
【ふりがな】<?php echo $data['name_kana'] . "\n";?>
【電話番号】<?php echo $data['tel'] . "\n";?>
【メールアドレス】<?php echo $data['mail'] . "\n";?>
【住所】<?php echo $data['address'] . "\n";?>
【借入先および借入残高】<?php echo $data['loan'] . "\n";?>

【債務状況】
<?php if(@$data['check_loan1']):?>
    債務なし
<?php endif;?>
<?php if(@$data['check_loan2']):?>
    滞納中(およそ<?php echo $data['check_text'];?>ヶ月)
<?php endif;?>
<?php if(@$data['check_loan3']):?>
    競売開始決定済み
<?php endif;?>

【無料面談希望日】

第一希望 <?php echo @$data['contact_first'] . @$data['contact_first_time']. "時～". @$data['contact_first_time2'].'時'. "\n";?>
第二希望 <?php echo @$data['contact_second'] . @$data['contact_second_time']. "時～". @$data['contact_second_time2'].'時'. "\n";?>
第三希望 <?php echo @$data['contact_third'] . @$data['contact_third_time']. "時～". @$data['contact_third_time2'].'時'. "\n";?>

【ご相談内容】
<?php if(@$data['check_content1']):?>
    支払いが困難になる
<?php endif;?>
<?php if(@$data['check_content2']):?>
    延滞（1〜2ヶ月
<?php endif;?>
<?php if(@$data['check_content3']):?>
    競売通知
<?php endif;?>
<?php if(@$data['check_content4']):?>
    その他<?php echo @$data['check_content5']. "\n";?>
<?php endif;?>

【自由記入】
<?php echo @$data['free'] . "\n";?>

【アンケート】

<?php if(@$data['check_anc1']):?>
    検索サイト
<?php endif;?>
<?php if(@$data['check_anc2']):?>
    Youtuneの動画
<?php endif;?>
<?php if(@$data['check_anc3']):?>
    その他
<?php endif;?>

<?php echo @$data['anc'];?>
