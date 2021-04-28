<?php
    // associative associative array
    $userData = [
        [
            'name' => 'ahmed hamdy',
            'job' => 'front-end',
            'experience' => 3
        ],

        [
            'name' => 'mohammed shaker',
            'job' => 'back-end',
            'experience' => 2
        ],

        [
            'name' => 'ali hasan',
            'job' => 'full-stack',
            'experience' => 4
        ],
    ];

?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <!-- loop for $userData and $arr values in this array -->
    <?php foreach ($userData as $arr) { ?>

        <!-- print the value of key name -->
        <h5 class="card-title"><?php echo $arr['name']; ?></h5>
        <!-- print the value of key job -->
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $arr['job']; ?></h6>
        <!-- print the value of key experience -->
        <p class="card-text"><?php echo $arr['experience']; ?></p>
         
    <?php } ?>
  </div>
</div>