<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <style type="text/css" media="screen">
        select.form-control{display:inline-block}
    </style>

</head>
<body>
    <?php include "navbar.php" ?>


    <div class="jumbotron text-center">
        <br><br>
  
  <div class="main-content">
<div id="mobile-search-input" class="hidden-md hidden-lg">
<form method="POST" action="#" accept-charset="UTF-8">
 <input name="_token" type="hidden" value="1ccfb87ea3c9f579a75fbb5e6b17c2d3ab42769fd5d23cfd6d73bf28d999ab0b">
<div class="input-group container search-query">
<input class="form-control" placeholder="Search for a movie&hellip;" autocorrect="off" autocomplete="off" name="keyword" type="search">
<span class="input-group-btn"> <button class="btn btn-success" type="submit">Search</button> </span>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Quality:</label>
                <select name="quality">
                    <option value="all" selected="selected">All</option>
                    <option value="720p">720p</option>
                    <option value="1080p">1080p</option>
                    <option value="3D">3D</option>
                </select>
            </div>

            <div class="form-group">
            <label>Genre:</label>
            <select name="genre">
            <option value="all" selected="selected">All</option>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="animation">Animation</option>
            <option value="biography">Biography</option>
            <option value="comedy">Comedy</option>
            <option value="crime">Crime</option>
            <option value="documentary">Documentary</option>
            <option value="drama">Drama</option>
            <option value="family">Family</option>
            <option value="fantasy">Fantasy</option>
            <option value="film-noir">Film-Noir</option>
            <option value="game-show">Game-Show</option>
            <option value="history">History</option>
            <option value="horror">Horror</option>
            <option value="music">Music</option>
            <option value="musical">Musical</option>
            <option value="mystery">Mystery</option>
            <option value="news">News</option>
            <option value="reality-tv">Reality-TV</option>
            <option value="romance">Romance</option>
            <option value="sci-fi">Sci-Fi</option>
            <option value="sport">Sport</option>
            <option value="talk-show">Talk-Show</option>
            <option value="thriller">Thriller</option>
            <option value="war">War</option>
            <option value="western">Western</option>
            </select>
            </div>
            </div>


<div class="col-xs-10">
<div class="selects-container">
<p>Rating:</p>
<select name="rating">
<option value="0" selected="selected">All</option>
<option value="9">9+</option>
<option value="8">8+</option>
<option value="7">7+</option>
<option value="6">6+</option>
<option value="5">5+</option>
<option value="4">4+</option>
<option value="3">3+</option>
<option value="2">2+</option>
<option value="1">1+</option>
</select>
</div>

<div class="selects-container selects-container-last">
<p>Order By:</p>
<select name="order_by">
<option value="latest" selected="selected">Latest</option>
<option value="oldest">Oldest</option>
<option value="seeds">Seeds</option>
<option value="peers">Peers</option>
<option value="year">Year</option>
<option value="rating">Rating</option>
<option value="likes">Likes</option>
<option value="alphabetical">Alphabetical</option>
<option value="downloads">Downloads</option>
</select>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
  


    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="https://yts.am/movie/thor-ragnarok-2017" class="browse-movie-link">
<figure>
<img class="img-responsive" src="https://yts.am/assets/images/movies/thor_ragnarok_2017/medium-cover.jpg" alt="Thor: Ragnarok (2017) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">8 / 10</h4>
<h4>Action</h4>
<h4>Adventure</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="https://yts.am/movie/thor-ragnarok-2017" class="browse-movie-title">Thor: Ragnarok</a>
<div class="browse-movie-year">2017</div>
</div>
</div>
        </div>
        <div class="col-sm-4">
          <h3>Column 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <h3>Column 3</h3>        
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>


    </div>
<div class="hidden-sm hidden-xs">
<ul class="tsc_pagination tsc_paginationA tsc_paginationA06">
<li class="hidden"><a href="">&laquo;</a></li><li><a href="javascript:void(0)" class="current">1</a></li><li><a href="/browse-movies?page=2">2</a></li><li><a href="/browse-movies?page=3">3</a></li><li><a href="/browse-movies?page=4">4</a></li><li><a href="/browse-movies?page=5">5</a></li><li><a href="/browse-movies?page=6">6</a></li><li><a href="/browse-movies?page=7">7</a></li><li><a href="/browse-movies?page=8">8</a></li><li class="unavailable">...</li><li><a href="/browse-movies?page=343">343</a></li><li><a href="/browse-movies?page=344">344</a></li><li><a href="/browse-movies?page=2">Next &raquo;</a></li><li><a href="/browse-movies?page=344">Last &raquo;</a></li>
</ul>
</div>
<div class="hidden-md hidden-lg">
<ul class="tsc_pagination tsc_paginationA tsc_paginationA06">
<li class="pagination-bordered">1 of 344</li><li><a href="/browse-movies?page=2">Next &raquo;</a></li>
</ul>
</div>

    <!-- script -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>