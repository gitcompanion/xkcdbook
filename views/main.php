<?php
require "includes/lib.php";
?>
<div class="clearfix">
    <div class="col-xs-5">
        <div class="well"> 
           <form class="form-horizontal" role="form">
            <h4>What's New</h4>
             <div class="form-group" style="padding:14px;">
              <textarea class="form-control" rows="11" placeholder="Update your status"></textarea>
            </div>
            <button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
          </form>
      </div>
    </div>
    <div class="col-xs-7">
        <div class="well"> 
           <form class="form">
            <h4>Sign-up</h4>
            <div class="input-group text-center">
            <input type="text" class="form-control input-lg" placeholder="Enter your email address">
              <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
            </div>
          </form>
        </div>
        <br style="clear:both;float:none">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>What is this thing?</h4></div>
            <div class="panel-body">
                This is the new facebook. It's great and it's based on the assumption that all you need is a few xkcd comics.<br><br>
                This is just to demo the git + github functionality as described <a href="http://iwillcreatethenewfacebook.github.io/">here</a>.<br><br>
                Disclaimer: I love the real facebook. This is to make fun of all the ceo-wannabes that want to create the new facebook
            </div>
          </div>
    </div>
</div>
<?php
show_jokes();
?>
