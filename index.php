<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- include the google font for the styles -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <!-- adding a bit of style here using css in the header -->
  <style>
  /*changing the background color and the font of the navbar, and removing the border*/
  .navbar-default{
      background-color: #fff;
      border: none;
      font-family:'Playfair Display', serif; 
    }
  /*padding the  section so we get some room between the navbar and the first item */
    #section{
      padding-top: 100px;
    }
    /*padding the bottom so our copywrite is positioned nicely*/
    body {
     padding-bottom: 50px; 
    }
    /*changing teh  font and increasing the size of the font*/
    footer{
      font-family:'Playfair Display', serif; 
      font-size: 24px;
    }
  </style>

</head>
<body>
  <!-- Let's add header and footer!  -->
  <div id= "navbar"> 
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <h1> My Page </h1>
        </div>
      </nav>
   </div>   
  <div id = "section">
  
    <div class= "container">
      <div class = "jumbotron">
        <h2>First Chart Type</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        
      </div>
    </div>  
    
    <div class= "container">
      <div class = "jumbotron">
        <h2>Second Chart Type</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        
      </div>  
    </div>

    <div class= "container">
      <div class = "jumbotron">
        <h2>Third Chart Type</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        
      </div>  
    </div> 

    <div class= "container">
      <div class = "jumbotron">
        <h2>Fourth Chart Type (Not a chart!)</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <h2>Video</h2>
        
        
      </div>  
    </div> 

  </div>
<!-- Let's add header & Footer -->
  <footer>
      <div class="container">
        <div id="section">
          <div class="row">
            <p class="copyright"> &copy 2017 Friendly Fulcrum </p>
          </div>
        </div>  
      </div>
  </footer>
      
</body>