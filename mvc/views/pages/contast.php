<div class="row">
    <?php 
        $i = json_decode($data["sv"]);
        //var_dump($i);
        foreach ($i as $key) { 
            ?>
        <div class="col-lg-3 mt-md-3">
            <img src="<?php echo $key->img; ?>">
            <a href="#"> <?php echo $key->name; ?> </a>
        </div>
        <?php } ?>
</div>