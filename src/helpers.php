<?php


//Assembles templates

function build($body, $paths){

    /*Phase1 render the slot */
    ob_start();     // Output buffering-start catching output
    include $paths[$body];
    $Slot = ob_get_clean();

    /*Phase2 Render the layout, pass it to the $Slot */ 
    ob_start();
    include $paths['layout'];
    return ob_get_clean();  //Save everything we caught, clear buffer
}

/*echo build('home',$paths) ;*/



?>
