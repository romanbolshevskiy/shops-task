        <?php include ROOT . '/views/layout/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                           <div class="panel-group category-products">
                                <div class="search">
                                    <h4>Find what you need here</h4>

                                    <form action="/find/" method="post" >
                                        Name<input type="checkbox" id="check1" name="check1" value="coding">
                                        Day<input type="checkbox" id="check2" name="check2" value="music">
                                        Hour<input type="checkbox" id="check3" name="check3" value="music">
                                        
                                        <input  type="text"  name="name" id="search" placeholder="name of shop" >
                                        <input  type="text"  name="day" id="search2" placeholder="day">
                                        <input  type="text"  name="hour" id="search3" placeholder="hour">
                                        <datalist id="courses">
                                            <?php  foreach ($coursesAll as  $value) {?>
                                                <option value="<?php echo $value['name']; ?>">
                                            <?php }  ?>
                                        </datalist>
                                        <input type="submit" value="Search">
                                    </form>
                                </div>
                           </div>

                            <div class="panel-group category-products">
                                <h2>Reccomends courses:</h2>
                                <?php foreach ($coursesList as $course): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/courses/<?php echo $course['url'];?>">
                                                    <?php echo $course['name'];?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>



                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        
                        <?php if( $data['name']) { ?>
                            <h3>You searched this name *<?php echo  $data['name']; ?>* </h3>
                        <?php } ?>
                        
                        <?php if( $data['day']) { ?>
                            <h3>You searched this day *<?php echo  $data['day']; ?>* </h3>
                        <?php } ?>

                        <?php if( $data['hour']) { ?>
                            <h3>You searched this  hour *<?php echo  $data['hour']; ?>* </h3>
                        <?php } ?>

                     
                        <?php if($found){ 
                            foreach ($found as $course) { 
                                $path = 'images/courses/course'.$course['id_c'].'.png';
                                $file = "/".$path;
                                if (file_exists($_SERVER['DOCUMENT_ROOT'].$file)) {
                                    $file1 = $file;
                                }
                                else {  
                                    $file1 = '/images/courses/none.png';
                                }
                            ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="/courses/<?php echo $course['url'];?>"><img src="<?=$file1;?>" alt="" /></a>
                                                <h2><?php echo $course['name'] . $course['id_shop']; ?></h2>
                                                    
                                                <p>Робота:</p>
                                                <p><?php echo $course['budni'] ." : ". $course['hour_start_b']  ."-". $course['hour_end_b']; ?> </p>
                                                <p><?php echo $course['saturday'] ." : ". $course['hour_start_sat']  ."-". $course['hour_end_sat']; ?> </p>
                                                <p><?php echo $course['sunday'] ;
                                                    if($course['hour_start_sunday'] ==0 && $course['hour_end_sunday']==0) {
                                                        echo ": Не працює";
                                                    } else 
                                                    echo ": ".$course['hour_start_sunday']  ."-". $course['hour_end_sunday']; ?> </p>
                                             
                                            </div>
                                           <!--  <img src="/assets/images/home/new.png" class="new" alt="" /> -->

                                        </div>
                                    </div>
                                </div>
                            <?php }
                            }else {
                                echo "<h4>There isnt one courses which you want.</h4>"; 
                            }  ?>

                    </div>
                </div>

            </div>
        </section>
        <script type="text/javascript">
                                
          

        </script>
       <?php  include ROOT. '/views/layout/footer.php'; // підключення моделі  ?>
    </body>
</html>