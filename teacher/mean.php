<?php
include("header.php");
echo '
</html><body>
       <ul class="nav nav-tabs">
         <li role="presentation" class="active"><a href="mean.php">Home</a></li>
         <li role="presentation"><a href="stuprofile.php">Profile</a></li>
         <li role="presentation"><a href="https://www.google.com">Messages</a></li>
       </ul>

      <!-- <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">search</span>
         <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
       </div>
       
       <div class="input-group">
         <input type="text" class="form-control" placeholder="enter number here" aria-describedby="basic-addon2">
         <span class="input-group-addon" id="basic-addon2">studentnumber</span>
       </div>
       <div class="input-group">
         <span class="input-group-addon">$</span>
         <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
         <span class="input-group-addon">.00</span>
       </div>
       -->
       <nav class="navbar navbar-default">
         <div class="" ss="container-fluid">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">student information</a>
           </div>
       
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
               <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
               <li><a href="#">search</a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">daily particepation <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="#">on time</a></li>
                   <li><a href="#">try bestn</a></li>
                   <li><a href="#">uniform</a></li>
                  <!-- <li role="separator" class="divider"></li>
                   <li><a href="#">Separated link</a></li>
                   <li role="separator" class="divider"></li>
                   <li><a href="#">One more separated link</a></li>-->
                 </ul>
               </li>
             </ul>
             <form class="navbar-form navbar-left">	
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-default">run search</button>
             </form>
             <ul class="nav navbar-nav navbar-right">
               <li><a href="#">help</a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">number <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li role="separator" class="divider"></li>
                   <li><a href="#">Separated link</a></li>
                 </ul>
               </li>
             </ul>
           </div>
         </div>
       </nav>
       <div class="center">	
       	<p style=" " >daily particepation</p>
       	<a href="https://www.baidu.com"><input type=button  style="width:200px;height:50px;" value="daily particepation"></a>
       	<p style=" ">user management </p>
       	<a href="https://www.w3schools.com"><input type=button style="width:200px;height:50px;" value="user management"></a>
       	<p style=" ">dash board </p>
       	<a href="https://www.google.com"><input type=button style="width:200px;height:50px;"	 value="jump to dashboard "></a>  	
       </div>
       <nav aria-label="...">
         <ul class="pager">
           <li><a href="#">Previous</a></li>
           <li><a href="#">Next</a></li>
         </ul>
       </nav>
       
       </body>'
  ?>