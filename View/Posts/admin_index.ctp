<div class="offset1 span10 margin-bottom">
  <table class="table table-striped table-hover table-bordered">
    <tr>
      <td>ID</td>
      <td>Title</td>
      <td>Status</td>
      <td>Preview</td>
      <td>Created</td>
    </tr>
    <?php foreach ($posts as $post):?>
      <tr>
        <td>
          <?php
            echo $this->Html->link($post['Post']['id'], array(
              'controller' => 'posts',
              'action' => 'edit',
              $post['Post']['id'],
              'admin' => true
            ));
          ?>
        </td>
        <td>
          <?php
            echo $this->Html->link($post['Post']['title'], array(
              'controller' => 'posts',
              'action' => 'edit',
              $post['Post']['id'],
              'admin' => true
            ));
          ?>
        </td>
        <td><?php echo ucfirst($post['Post']['status']);?></td>
        <td>
          <?php
            echo $this->Html->link($post['Post']['title'], array(
            'controller' => 'posts',
            'action' => 'view',
            'year' => $post['Post']['year'],
            'month' => $post['Post']['month'],
            'day' => $post['Post']['day'],
            'slug' => $post['Post']['slug']
          ));?>
        </td>
        <td>
          <?php
            echo $this->Html->link(date('F d, Y', strtotime($post['Post']['created'])), array(
              'controller' => 'posts',
              'action' => 'edit',
              $post['Post']['id'],
              'admin' => true
            ));
          ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <?php echo $this->element('blog/pagination');?>
</div>