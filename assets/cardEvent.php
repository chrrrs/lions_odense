<div class="event-card">
  <img class="event-card-img" src="<?php echo $event['eImage']; ?>" alt="<?php echo $event['title']; ?>">
  <div class="event-card-content">
    <h3><?php echo $event['title']; ?></h3>
    <i><?php echo $event['time']; ?></i>
    <p><?php echo $event['content']; ?></p>
  </div>
  <button type="button" class="event-button">Tilmeld</button>
</div>
