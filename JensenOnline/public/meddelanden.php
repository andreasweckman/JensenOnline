<?php
require_once("../includes/functions.php");	
confirm_logged_in();
?>

<?php
$pageTitle = "Meddelanden";
$section = "meddelanden";
include("layout/header.php"); 
?>

<link rel="stylesheet" href="css/stylemail.css">
    <main class="jumbotron">
        
<!-- Following is copyied code to mail example -->        
   
<nav class="navbar navbar-default navbar-static-top mailnav" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="btn-compose pull-left">
                <a type="button" class="btn btn-danger navbar-btn" href="#compose" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-pencil"></span> Compose</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="#inbox" role="tab" data-toggle="tab">
                        Inbox <span class="label label-success">10</span>
                    </a>
                </li>
                <li><a href="#sent-mail" role="tab" data-toggle="tab">Sent mail</a>

                </li>
                <li><a href="#draft" role="tab" data-toggle="tab">Draft</a>

                </li>
                <li><a href="#trash" role="tab" data-toggle="tab">Trash</a>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a>

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>




<div class="tab-content">
  <div class="tab-pane active" id="inbox">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Inbox</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="compose">
      
      <div class="container">
    <div class="content-container clearfix">
        <h1 class="content-title">Compose</h1>
        <div class="col-md-12">
            <div class="form-group">
                <input id="tokenfield" type="text" class="form-control" placeholder="To" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cc" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Bcc" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" />
            </div>
            <textarea class="form-control" placeholder="message"></textarea>
            <div class="btn-send">
            <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send"></span> Send</button>
            </div>
        </div>
    </div>
</div>
      
  </div>
  <div class="tab-pane" id="sent-mail">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Sent Mail</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="draft">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Draft</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
  <div class="tab-pane" id="trash">
      
      <div class="container">
           <div class="content-container clearfix">
               <div class="col-md-12">
                   <h1 class="content-title">Trash</h1>
                   
                   <input type="search" placeholder="Search Mail" class="form-control mail-search" />
                   
                   <ul class="mail-list">
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="mail-sender">You Tube</span>
                               <span class="mail-subject">New subscribers!</span>
                               <span class="mail-message-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil eveniet ipsum nisi? Eaque odio quae debitis saepe explicabo alias sit tenetur animi...</span>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
      
  </div>
</div>
        
        <!-- STOP Following is copyied code to mail example -->       
        
<script src="js/app.js"></script>
</main>

<?php
include("layout/footer.php");  
?>
