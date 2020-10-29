<?php

//default time zone of UTC
date_default_timezone_set('UTC');

// Time zone of New-Zealand
date_default_timezone_set('NZ');
    echo "<b>The time of Newzealand is:  </b>" . date("<b>d-m-Y h:i:sa</b>"). "<hr/>";

// Time zone of Australia
date_default_timezone_set("Australia/Sydney");
    echo "</br><b>The time of Australia is: </b> " . date("<b>d-m-Y h:i:sa</b>"). "<hr/>";

// Time zone of Germany
date_default_timezone_set("Europe/Berlin");
    echo "</br><b>The time of Germany is: </b> " .date("<b>d-m-Y h:i:sa</b>"). "<hr/>";

// Time zone of India
date_default_timezone_set("Asia/Kolkata");
    echo "</br><b>The time of India is: </b>" . date("<b>d-m-Y h:i:sa</b>"). "<hr/>";

// Time zone of America    
date_default_timezone_set("America/St_Johns");
    echo "</br><b>The time of Us IS: </b> " . date("<b>d-m-Y h:i:sa</b>"). "<hr/>";

?>