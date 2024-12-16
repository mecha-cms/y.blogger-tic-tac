<aside>
  <?php if ($description = $page->description ?? $site->description): ?>
    <?php $author = $page->author; ?>
    <?php $author = $author instanceof User ? '<a href="' . eat($author->link ?? $author->url) . '" rel="author">' . $author . '</a>' : ""; ?>
    <?= self::widget([
        'content' => '<p>' . $description . '</p>' . ($author ? '<p>' . $author . '</p>' : ""),
        'title' => i('About')
    ]); ?>
  <?php endif; ?>
  <?= self::widget('form/search'); ?>
  <?php if ($site->is('home')): ?>
    <?= self::widget('page/random'); ?>
  <?php else: ?>
    <?= self::widget('page/recent'); ?>
    <?php if ($site->has('parent') && $site->is('page')): ?>
      <?= self::widget('page/relate'); ?>
    <?php endif; ?>
  <?php endif; ?>
  <?= self::widget('page/popular'); ?>
  <?= self::widget('tag'); ?>
  <?= self::widget('archive'); ?>
</aside>