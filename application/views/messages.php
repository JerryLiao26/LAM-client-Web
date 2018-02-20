<div class="container">
  <?php foreach ($messages as $item):?>
    <div class="card message_card">
      <div class="card-header">
        <?php echo $item['tag'] ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p><?php echo $item['content'] ?></p>
          <footer class="blockquote-footer"><?php echo $item['timestamp'] ?></footer>
        </blockquote>
      </div>
    </div>
  <?php endforeach;?>
</div>
