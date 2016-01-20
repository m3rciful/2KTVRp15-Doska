<!-- Заголовок title -->
<?php $title = ''; ?>

<?php ob_start() ?>

    <div class="container">
      <div class="row">
      	<?php foreach ($events as $event): ?>
        <div class="col-sm-6 col-md-4 text-center">
          <div class="thumbnail"><br>
            <img class="img-circle" src="public/images/<?php echo $event['image_logo']; ?>" alt="Event Logo" width="140" height="140">
            <div class="caption">
              <h3><?php echo $event['name_eventR']; ?></h3>
              <p><?php echo $event['short_desc_eventR']; ?></p>
              <p><a class="btn btn-default" href="event?show=<?php echo $event['id_event']; ?>" role="button">Читать больше &raquo;</a></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
       
      </div><!-- /.row -->

    </div><!-- /.container -->

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";