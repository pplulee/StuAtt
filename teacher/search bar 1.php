<?php
//include ("../include/common.php");//单独测试页面时开启
    echo'
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
       '
 ?>