<form role="search" method="get" id="searchform" class="searchform  form-inline" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group ">
        <input class="form-control" type="text" id="s" name="s" value="" />

        <?php $b_block = is_mobile()? "btn-block sp-top" : "" ?>
        <button class="btn btn-primary btn-sm <?php print $b_block;?>" type="submit" id="searchsubmit" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>