<?php 
function component($productname, $productprice, $producttext, $productimg){
    $element= 
    "  <div class=\"col-md-3 col-md-6 my-3 md-0\">
        <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\"> </div>
             <div><img src=\"$productimg\" alt=\"phones\"> </div>
             <div class= \"card-body\"></div> 
        <h5 class=\"card-title\"> $productname </h5>
       <h6><i class=\"fas fa-star\"></i>
        <i class=\"fas fa-star\"></i>
        <i class=\"fas fa-star\"></i>
        <i class=\"fas fa-star\"></i>
        <i class=\"far fa-star\"></i></h6>
        <p Class=\"card-text\"> $producttext </p> 
        <h5> <small><s class=\"text-secondary\">$899</s></small> 
            <span class=\"price\">$$productprice</span> 
            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
        </h5>
        ";  
        echo $element;

       }
      
?>