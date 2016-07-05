﻿<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Feed Example - Semantic</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="semantic.css">

  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script> -->
  <script src="jquery.js"></script>
  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script> -->
  <script src="address.js"></script>
  <script src="semantic.js"></script>

  <link rel="stylesheet" type="text/css" href="feed.css">
  <script src="feed.js"></script>
</head>
<body id="feed">
  <div class="ui large inverted vertical sidebar menu">
    <a class="active item">
      Dogs Weekly <span class="ui label">213</span>
    </a>
    <a class="item">
      Joystiq <span class="ui label">113</span>
    </a>
    <div class="item">
      <b>Archived Feeds</b>
      <div class="menu">
        <a class="item">
          Engadget <span class="ui label">11</span>
        </a>
        <a class="item">
          NY Times Tech Blog <span class="ui label">21</span>
        </a>
      </div>
    </div>
    <a class="item">
      <i class="bookmark icon"></i> Favorites
    </a>
    <div class="ui dropdown item">
      <i class="add icon"></i> New
      <div class="menu">
        <a class="item"><i class="rss icon"></i> Feed</a>
        <a class="item"><i class="tag icon"></i> Tag</a>
        <a class="item"><i class="folder icon"></i> Group</a>
      </div>
    </div>
  </div>
  <div class="ui divided padded grid">
    <div class="seven wide middle column">
      <div class="ui right floated black launch button">
        <i class="list layout icon"></i> Menu
      </div>
      <h2 class="ui header">
        <i class="inbox icon"></i>
        Inbox
      </h2>
      <div class="ui tabular filter menu">
        <a class="active item" data-tab="unread">Unread</a>
        <a class="item" data-tab="saved">Saved</a>
        <a class="item" data-tab="all">All</a>
      </div>
      <div class="ui divided very relaxed selection inbox list active tab" data-tab="unread">
        <a class="active item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">Weekly Webcomic Wrapup fought the law, and the law won</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">Scientists discover new breed of dog</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 10, 2013</div>
          <div class="description">Dogs colony in Antarctica</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 09, 2013</div>
          <div class="description">Famous dog whisperer Chakotay dies today at 104</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 07, 2013</div>
          <div class="description">Top 10 Things to Know about Labradoodles</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 05, 2013</div>
          <div class="description">Study shows children enjoy the company of animals</div>
        </a>
      </div>
      <div class="ui divided very relaxed inbox selection list tab" data-tab="saved">
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">Your favorite saved article</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">Your favorite saved article</div>
        </a>
        <a class="item">
          <div class="left floated ui star rating">
            <i class="icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">Your favorite saved article</div>
        </a>
      </div>
      <div class="ui divided very relaxed inbox selection list tab" data-tab="all">
        <a class="item">
          <div class="left floated ui star rating">
            <i class="link icon"></i>
          </div>
          <div class="right floated date">Sep 14, 2013</div>
          <div class="description">There turns out there is only one article under all.</div>
        </a>
      </div>

      <div class="ui divider"></div>

      <div class="current">Showing <b>6</b> of 213</div>
      <div class="ui text menu">
        <a class="icon item"><i class="icon left arrow"></i></a>
        <a class="active item">1</a>
        <div class="disabled item">...</div>
        <a class="item">10</a>
        <a class="item">11</a>
        <a class="item">12</a>
        <a class="icon item"><i class="icon right arrow"></i></a>
      </div>
    </div>
    <div class="nine wide right column">
      <div>
    <embed src="3021.pdf" width="100%" height="100%" style="
      height: 600px;">
    </div>
      <div class="ui basic button">Save</div>
      <div class="ui basic button">Delete</div>
    </div>
  </div>
</body>

</html>