    <h1>UploadPack</h1>  
    <p>This is UploadPack Test!</p>  
    <h2><?php echo $this->Html->link("Add New Image", "/images/add/"); ?></h2>  
        <table class="table table-bordered table-striped">  
    <tr>  
    <th>ID</th><th>TITLE</th><th>IMAGE</th><th>サムネイル</th>  <th>CREATED</th>  
    </tr>  
    <?php foreach($images as $image):?>  
    <?php  
    $type=str_replace('image/','',$image['Image']['type']);
    switch(true) {
        case $type=='jpeg':
        $type='jpg';
        break;
    }
    ?>
    <tr>  
    <td><?php echo $image['Image']['id'];?></td>
    <td><?php echo $image['Image']['title'];?></td>
    <td><?php echo $image['Image']['img_file_name'];?></td>
    <td class="bg-info"><img style="" src="<?php echo "upload/imagessmall{$image['Image']['id']}.{$type}" ;?>"></td>
    <td><?php echo $image['Image']['created'];?></td>  
    <tr>  
    <?php endforeach;?>  
    </table>  


