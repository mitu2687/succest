
<table class="table table-bordered table-striped">
<tr>
<th>
<?php
echo $this->paginator->sort(
  'Receive.receiver','ユーザー'
           );
?>
</th>
<th>金額</th>
<th>ステータス</th>
<th>作成日</th>
</tr>
<?php foreach($datas as $data):?>
<tr>
<td class="text-primary"><?php echo $data['Money']['receiver'] ;?></td>
<td ><?php echo $data['Money']['money'] ;?></td>
<td ><?php echo $data['Status']['name'] ;?></td>
<td ><?php echo $this->Time->format($data['Money']['created'], '%Y-%m-%d'); ;?></td>
</tr>
<?php endforeach;?>
</table>


