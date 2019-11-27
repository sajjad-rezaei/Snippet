<?php
include_once "views/includes/head.php";      
include_once "views/includes/logo_header.php";
include_once "views/includes/navbar.php";
include_once "views/includes/sidebar.php";       
            
?>

   <div class="content">
            <div class="page-inner">      
                <div class="fixed-div">
                    <div class="absolute-top">
                        <input id="main-search" type="text" placeholder="Search..." autofocus/>
                        <div class="btn-group" id="btn-group" role="group" aria-label="Filters">
                            <button type="button" class="btn btn-success">All</button>
                            <button type="button" class="btn btn-light">Title</button>
                            <button type="button" class="btn btn-light">Code</button>
                            <button type="button" class="btn btn-light">Tag</button>
                            <button type="button" class="btn btn-light">Desc.</button>
                        </div>
                   </div>
              </div>
         </div>  
   </div>
        
    
<?php
  include_once "views/includes/footer.php";
?>
