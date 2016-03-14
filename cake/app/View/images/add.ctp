    <h1>画像新規登録</h1>  
    <?php echo $this->Form->create('Image', array('type' => 'file')); ?>  
    <table>  
    <tr>  
    <th>TITLE</th><td><?php echo $this->Form->text('Image.title'); ?></td>  
    </tr>  
    <tr>  
    <th>IMAGE</th>  
    <td>  
    <?php echo $this->Form->file('Image.img');?>  
    <?php echo $this->Form->error('Image.img');?></td>  
    </tr>  
    <tr>  
    <th></th>  
    <td>  
    <?php echo $this->Form->end('新規登録');?></td>  
    </tr>  
    </table>  
