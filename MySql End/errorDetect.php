<?php if(!empty($errors)) :?>
        <div class="alert alert-danger">
            <?php
            foreach($errors as $error): ?>
            <div><?php echo $error ?></div>
            <?php endforeach;?>
        </div>
            <?php endif ;?>
 