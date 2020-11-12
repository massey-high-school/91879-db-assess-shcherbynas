<?php include "topbit.php";
        
$showall_sql="SELECT *
FROM `2020_L1_SviShc_food`
ORDER BY `2020_L1_SviShc_food`.`Dish name` ASC
LIMIT 0 , 30";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);
    
?>     
        
<div class="box main">
            <h2>All Dishes</h2>
            
            <?php
            
            // check if there are any results
            
            if($count<1)
            {
            ?>
            
            <div class="error"> Sorry! There are no results that match your search. Please use the search box in the side bar to try again. </div>
            
            <?php
            
            }// end count 'if'
            
            // if there are no results, output an error
            
            else {
                
                do{
                ?>
            
                            <!-- Results -->
            <div class="results">
                
                <p>Dish name: <span class="sub_heading"><?php echo $showall_rs['Dish name']; ?></span></p>
                
                <p>Meal: <span class="sub_heading"><?php echo $showall_rs['Meal']; ?></span></p>
                
                <p>Place: <span class="sub_heading"><?php echo $showall_rs['Place']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                    
                    <?php 
                    for ($x=0; $x < $showall_rs['Rating']; $x++)
                    {
                        echo "&#9733";
                    }
                        
                     ?>
                    
                    </span></p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    <?php echo $showall_rs['Review']; ?>
                </p>
                
                <p>Vegetarian/ Non-vegetarian: <span class="sub_heading"><?php echo $showall_rs['Vegetarian']; ?></span></p>
                
            </div> <!-- end of results-->           
            
    <br/>
           
            
            <?php
                    
                }  // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($showall_query));
            } // end of 'else'
            
            // if there are results, display them
            
            ?>    

</div>       


<?php
    include "bottombit.php"
?>