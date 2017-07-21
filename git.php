<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>My page</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script>
   window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>

    </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="jumbotron text-center">
   <div class="container">
  <h1> Start Your Search Here</h1>
  <form class="form-inline">
    <div class="input-group">
      <input type="search" class="form-control" id="search-box" size="70" placeholder="Search stores..." required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-success btn-lg">Search</button>
      </div>
    </div>
  </form>
  </div>
  </div>
  
  <h2> Popular Items</h2></div>
  
  <div class="container">
    <div id="products" class="row list-group">
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image3.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image2.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image3.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image3.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image2.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-xs-6 col-sm-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="img/image2.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" data-toggle="modal" data-target="#myModal">Add to cart</a>
							<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Product Title</h4>
      </div>
      <div class="modal-body">
        <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
		sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam .</p>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-success ">Add to cart</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
<div class="row" id="paragraphs">
<div class="col-sm-6" >
<span class="glyphicon glyphicon-globe logo"></span> 
<h3>Paragraph 1</h3>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

</div>
<div class="col-sm-6">
<span class="glyphicon glyphicon-signal logo"></span>
<h3>Paragraph 2</h3>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</div>
</div>
</div>


 
		 <!--carousel 1-->
		 
		 <div class="carousel1">
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/bb.png" alt="macys-offer" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/shopping.png" alt="nordstrom-offer" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- sign up box-->
	<div class="container">
	<div class="row">
            <div class="col-md-12" id="top" style="border:dashed 2px #bfbfbf; padding:35px 20px 35px 20px; margin: 20px 0px 20px;">
              <div class="col-md-5" id="signuptext">
                <h4> Join Our <span class="text-primary text-uppercase">Free</span> Newsletter For<br>
                  Tips and Tricks! </h4>
              <form class="form-inline">
    <div class="input-group">
      <input type="search" class="form-control" id="search-box" size="70" placeholder="Enter your email address..." required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-success btn-lg">Submit</button>
      </div>
    </div>
             </div>
			     </div>
             </div>
			 </div>


  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <footer>
</footer>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://localhost/css-git.css">
   </body>
  </html>