<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style/semantic.css">
    <title>Form</title>
    <style>
        .size{
            width : 80%
        }
        .letf{
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- <div class="ui inverted menu">
    <div class="header item">How2Play</div>
    <a class="item active">Homepage</a>
    <div class="right menu">
        <div class="item">
        <div class="ui transparent inverted icon input">
            <i class="search icon"></i>
            <input type="text" placeholder="Search">
        </div>
        </div>
        <a class="item">Login</a>
        <a class="item">Register</a>
    </div>
    </div> -->

    <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="active item">How2Play</a>
        <div class="right item">
          <a class="ui inverted button">Log in</a>
          <a class="ui inverted button" href="<?php echo site_url("register")?>">Sign Up</a>
        </div>
      </div>
    </div>
    <br>
    <img class="size" src="<?php echo base_url()?>img/topic.png" alt="">
    <div class="ui text container">
        <br>
      <h1 class="ui inverted header">
        How 2 Play
      </h1>
      <h2>Do whatever you want when you want to.</h2>
    </div>
    <br><br>
<!--     
    card -->
    <div class="ui four cards">
        <div class="ui card">
            <div class="blurring dimmable image">
            <div class="ui dimmer transition hidden">
                <div class="content">
                <div class="center">
                    <div class="ui inverted button">Call to Action</div>
                </div>
                </div>
            </div>
            <img class="size" src="<?php echo base_url()?>img/game1.jpg" alt="">
            </div>
            <div class="content">
            <a class="header">Name</a>
            <div class="meta">
                <span class="date">Date</span>
            </div>
            </div>
            <div class="extra content">
            <a>
                <i class="users icon"></i>
                Users
            </a>
        </div>
    </div>
    <div class="ui card">
            <div class="blurring dimmable image">
            <div class="ui dimmer transition hidden">
                <div class="content">
                <div class="center">
                    <div class="ui inverted button">Call to Action</div>
                </div>
                </div>
            </div>
            <img class="size" src="<?php echo base_url()?>img/game2.jpg" alt="">
            </div>
            <div class="content">
            <a class="header" href="<?php echo site_url("form")?>">LOL</a>
            <div class="meta">
                <span class="date">Date</span>
            </div>
            </div>
            <div class="extra content">
            <a>
                <i class="users icon"></i>
                Users
            </a>
        </div>
    </div>
    <div class="ui card">
            <div class="blurring dimmable image">
            <div class="ui dimmer transition hidden">
                <div class="content">
                <div class="center">
                    <div class="ui inverted button">Call to Action</div>
                </div>
                </div>
            </div>
            <img class="size" src="<?php echo base_url()?>img/game3.jpg" alt="">
            </div>
            <div class="content">
            <a class="header">Name</a>
            <div class="meta">
                <span class="date">Date</span>
            </div>
            </div>
            <div class="extra content">
            <a>
                <i class="users icon"></i>
                Users
            </a>
        </div>  
  </div>
  <div class="ui card">
            <div class="blurring dimmable image">
            <div class="ui dimmer transition hidden">
                <div class="content">
                <div class="center">
                    <div class="ui inverted button">Call to Action</div>
                </div>
                </div>
            </div>
            <img class="size" src="<?php echo base_url()?>img/game4.jpg" alt="">
            </div>
            <div class="content">
            <a class="header">Name</a>
            <div class="meta">
                <span class="date">Date</span>
            </div>
            </div>
            <div class="extra content">
            <a>
                <i class="users icon"></i>
                Users
            </a>
        </div> 
        <!-- end card -->
</body>
</html>