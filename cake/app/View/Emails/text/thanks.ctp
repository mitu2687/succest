
<?php echo $data['name'];?>様

弊社、弁護士法人サクセストへのお問い合わせの
完了、また受け取りをご報告させて頂きます。

[お問い合わせ内容]

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
    毎月の返済を減らしたい
<?php endif;?>
<?php if(@$data['check_content2']):?>
    自宅は残したまま債務整理したい
<?php endif;?>
<?php if(@$data['check_content3']):?>
    借金の完済が最優先で自宅を売却してもよい
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

ご記入頂いた内容については弊社プライバシーポリシーに則り管理・保管させて頂きます。

あらためて弊社担当弁護士よりお電話、またはEmailにてご連絡させて頂きます。
何卒、宜しくお願い致します。

本メールへのお返事は不可となっております。

お手数おかけ致しますが、
ご質問・ご不明点等御座いましたら
下記、お問い合わせ窓口よりご連絡お願い致します。

▼サクセストお問い合わせ窓口
TEL: 0120-397-002 
Email:info@succest.jp

▼弁護士法人サクセスト
住所 〒104-0041 東京都中央区新富1-15-4 弁護士法人サクセストビル
公式HP: http://www.succest.jp/

▼youtube
https://www.youtube.com/watch?time_continue=57&v=e-yLWJ5hCYs

▼Facebook
https://www.facebook.com/succestsuccest/
