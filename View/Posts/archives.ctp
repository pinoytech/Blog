<div class="offset1 span10 margin-bottom">
    <ul>
        <?php foreach ($posts as $post):?>
        <li><?php
            echo $this->Html->link($post['Post']['title'], array(
                'controller' => 'posts',
                'action' => 'view',
                'year' => $post['Post']['year'],
                'month' => $post['Post']['month'],
                'day' => $post['Post']['day'],
                'slug' => $post['Post']['slug']
            ));?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>