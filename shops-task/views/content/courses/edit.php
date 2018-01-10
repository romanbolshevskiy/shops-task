<?php include ROOT . '/views/layout/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-5 col-sm-offset-4 padding-right">
                
                <?php if (isset($errors) && is_array($errors)){ ?>
                    <ul>
                        <?php foreach ($errors as $error){ ?>
                            <li> - <?php echo $error; ?></li>
                        <?php }  ?>
                    </ul>
                <?php }      ?>
                <div class="signup-form"><!--sign up form-->
                    <?php// if( $type !="bad"){ ?>
                        <h2>Edit course <b><?php echo $course[0]['name']; ?></b></h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <p>Name:</p>
                            <input type="text" disabled="" name="name" placeholder="Имя" value="<?php echo $course[0]['name']; ?>"/>
                            <div>
                                <p>Budni dni:</p>
                                <input type="text" name="start_h_b" placeholder="Start Hour" value="<?php echo $course[0]['hour_start_b']; ?>"/>
                                <input type="text" name="end_h_b" placeholder="Start Hour" value="<?php echo $course[0]['hour_end_b']; ?>"/>
                            </div>
                            <div>
                                <p>Saturday:</p>
                                <input type="text" name="start_h_sat" placeholder="Start Hour" value="<?php echo $course[0]['hour_start_sat']; ?>"/>
                                <input type="text" name="end_h_sat" placeholder="Start Hour" value="<?php echo $course[0]['hour_end_sat']; ?>"/>
                            </div>
                            <div>
                                <p>Sunday:</p>
                                <input type="text" name="start_h_sun" placeholder="Start Hour" value="<?php echo $course[0]['hour_start_sunday']; ?>"/>
                                <input type="text" name="end_h_sun" placeholder="Start Hour" value="<?php echo $course[0]['hour_end_sunday']; ?>"/>
                            </div>
                            <input type="submit" name="submit" class="btn btn-default" value="Edit" />
                        </form>
                    <?php /*} else {
                        echo "<h1>There is no such course!!!</h1>";  
                    }*/?>
                </div><!--/sign up form-->
               
             
                <br/>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layout/footer.php'; ?>