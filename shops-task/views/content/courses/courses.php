<?php   //include_once ROOT. '/components/Cart.php'; // підключення моделі 
        include ROOT . '/views/layout/header.php'; ?>
        
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 padding-right">
                        <div class="features_items"><!--features_items-->
                            <div class="courses">
                                    <?php 
                                  
                                    echo "<h2 class='title text-center'>All Shops</h2>";
                                if($type == "non_information"){
                                     
                                }
                                 //PaGINATIoN
                                if(!$courses_list_all){ echo "<h4>There are no information in this page</h4>";}
                                else { 
                                    foreach ($courses_list_all as  $course){  ?>
                                   
                                        <div class="course">  
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

                                    <?php } 
                                }  
                                echo "<div class='clear'>";
                                echo $pagination->get();
                                ?>
                                
                            </div>
                        </div><!--features_items-->

                    </div>
                </div>
            </div>
        </section>

       <?php  include ROOT. '/views/layout/footer.php'; // підключення моделі  ?>
    </body>
</html>