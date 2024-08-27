<?php
session_start();
 if ($_SESSION['id'] && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>

    <title>LOGIN</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style5new.css">

</head>

<body>

<nav>
        <ul>
                    <li>                                         
               <a <a href="home.php"><img src="user.png">Home</a>   
                   
                   </li> 
             
             <li> 
                <a <a href="logout.php"><img src="lock.png" alt="" width="31px" height="31px">Logout</a>
              </li>
                      
              
                       
              
              
         </ul>	  
     </nav>	
     



        <h1>Hello, <?php echo $_SESSION['user_name']?></h1>
        <h1>Welcome<h1>


        <div class="img-wrapper"> 
           
           <div class="gallery">
             <a href="IP Project/index.php"> 
                
              <img src="images/timetable2.png">
             </a>
             <div class="desc">View TimeTable.</div>
         </div>
           
 
         
           
             <div class="gallery">
               <a href="AbsentTeachers.php"> 
                  
                <img src="images/teacher1.png">
               </a>
               <div class="desc">Absent Teachers</div>
           </div>
           
           
           
           
         
   <div class="gallery">                                        
             <a href="http://localhost/data/ExamTest.php"> 
                 
                 <img src="images/test2.png" alt=""/>
             </a>
             <div class="desc">Eaxm and Test.</div>
         </div> 
           
           
         
    
  <div class="gallery">
           <a href="Support.php">
                 <img src="images/support2.png">
             </a>
             <div class="desc">Support Tables.</div>
         </div>
           
           
           
           
         
    <div class="gallery">
        <a href="Note.php">
                 <img src="images/Note1.png">
             </a>
             <div class="desc">Notes</div>
         </div>          
         
 
      <div class="gallery">
         <a href="http://localhost/data/Calendar.php">
          <img src="images/Notice3.png">
             </a>
             <div class="desc">Notice Board</div>
     </div>
 
 
 </div>



      
 </body>
 </html>


 <?php



 }

 

 ?>




