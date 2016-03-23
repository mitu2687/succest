<?php foreach ($posts as $post): ?>

  <article>
    <header>
      <h2>
        <?php echo $this->Html->link(h($post['Post']['post_title']), array('action' => 'view', $post['Post']['ID'])); ?>
      </h2>
      <time><?php echo $this->Html->link(h($post['Post']['post_modified']), array('action' => 'view', $post['Post']['ID'])); ?></time>
    </header>
    <div class="main">
      <p>
        <?php echo nl2br(h($post['Post']['post_content'])); ?>
      </p>
    </div>
  </article>

<?php endforeach; ?>

<?php echo $this->Paginator->counter(array( 'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
<div class="paging">
  <?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
  <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
  <?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?>
</div>