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

                                    <form action="/find/" method="post" id='check_form'>
                                        <span>Name<input type="checkbox" id="check1" name="check1" value="coding"></span>
                                        <span>Day<input type="checkbox" id="check2" name="check2" value="music"></span>
                                        <span>Hour<input type="checkbox" id="check3" name="check3" value="music"></span>
                                        
                                        <input  type="text"  name="name" id="search" placeholder="name of shop" >
                                        <input  type="text"  name="day" id="search2" placeholder="day">
                                        <input  type="text"  name="hour" id="search3" placeholder="hour">
                                        <input type="submit" value="Search">
                                    </form>

                                    <hr/>
                                    <h4>Sorting</h4>
                                    <form action="" method="post" >
                                        <select  name="sort">
                                            <option selected="">Simple sort</option>
                                            <option value="start_hour_sort">By start hour</option>
                                            <option value="end_hour_sort">By end hour</option>
                                        </select></p>
                                        <input type="submit" value="Sort">
                                    </form>
                                </div>
                           </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">

                        <hr/>

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">All shops</h2>

                            <div class="slider"   >
                                <?php foreach ($shopsAll as $course){
                                 
                                    $path = 'images/courses/course'.$course['id_c'].'.png';
                                    $file = "/".$path;
                                    if (file_exists($_SERVER['DOCUMENT_ROOT'].$file)) {
                                        $file1 = $file;
                                    }
                                    else {  
                                        $file1 = '/images/courses/none.png';
                                    }   
                                    ?>
                                    <div class="item">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="/images/courses/course9.png">
                                                    <h2><?php echo $course['name']; ?></h2>
                                                    
                                                    <p>Робота:</p>
                                                    <p><?php echo $course['budni'] ." : ". $course['hour_start_b']  .":00 -". $course['hour_end_b'] .":00 "; ?> </p>
                                                    <p><?php echo $course['saturday'] ." : ". $course['hour_start_sat']  ."::00 -". $course['hour_end_sat'].":00 "; ?> </p>
                                                    <p><?php echo $course['sunday'] ;
                                                        if($course['hour_start_sunday'] ==0 && $course['hour_end_sunday']==0) {
                                                            echo ": Не працює";
                                                        } else 
                                                        echo ": ".$course['hour_start_sunday']  .":00 -". $course['hour_end_sunday'] .":00 "; ?> </p>
                                                
                                                </div>
                                                
                                               
                                                <p class="edit_delete" style="text-align: center;">
                                                    <span><a href="/course/edit/<?php echo $course['id_shop']; ?>">Edit shop</a></span>
                                                </p>
                                              
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <a class="left recommended-item-control" id="prev"> < </a>
                            <a class="right recommended-item-control" id="next"> > </a>

                        </div><!--/recommended_items-->
                 
                        <hr/>

 
                    </div>
                </div>

            </div>
        </section>
        <script type="text/javascript">
                                
          

        </script>
       <?php  include ROOT. '/views/layout/footer.php'; // підключення моделі  ?>
    </body>
</html>