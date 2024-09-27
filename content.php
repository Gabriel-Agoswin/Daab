<?php


    
    function Event($Event_Name, $Event_Location, $Event_Day, $Event_Month, $Event_Time){
        
       $element= " 
                    <div class=\"event\">
                       <div class=\"left-event\">
                           <h5>$Event_Day</h5>
                           <span>$Event_Month</span>
                       </div>
                       <div class=\"right-event\">
                           <h6>$Event_Name</h6>
                           <p><i class=\"fas fa-map-marker-alt\"></i>$Event_Location<span style=\"font-size:10px;\">  $Event_Time</span></p>
                           <a href=\"#\">More Info</a>
                       </div>
                    </div>
                ";

    echo $element;
    
    }
    



    
   
?>






