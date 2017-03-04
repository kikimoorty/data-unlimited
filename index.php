<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Add the Plotly library -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

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
    /* changing the font and increasing the size of the font*/
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
        <h2>First Chart Type: Bar Graph with Plotly</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         <div id="myDiv" style="width: 480px; height: 400px;">
          <!-- Plotly chart will be drawn here -->
        </div>
      </div>
    </div>  
    
    <div class= "container">
      <div class = "jumbotron">
        <h2>Second Chart Type: Pie Graph with Plotly</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <div id="myDiv2" style="width:480px; height: 400px">
          <!-- Pie Chart is drawn here -->
        </div>
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
<!-- We need to put the script in <script> </script> tags so the page knows it's Javascript, in this case! -->
<script>
// ***********This is the Bar Chart*****************
// First, define what the data is by seeting data as a hash of attributes:[{x:[], y:[], marker:{color: []}, type:''}]; (setting the x & y axis, setting the marker colors, and defining the type of graph)
var data = [
  {
    x: ['Prior Experience', 'No Experience', 'Some Experience'],
    y: [20, 14, 23],
    marker: {
      color: ['rgb(82,185,191)', 'rgb(234,100,156)', 'rgb(112,99,86)']
    }, 
    type: 'bar'
  }
];
// Next, tell Plotly to make a new plot in the  div above called "myDiv" using that variable called data:
Plotly.newPlot('myDiv', data);
// *************This is the Pie Graph***************
// First, define what the data is by seeting data as a hash of attributes: [{values:[], labels:[], marker:{colors:[]}, type:''}]; (setting the  values as an array of comma-separated numbers, setting the labels as an array of strings, setting the  marker as a hash that takes an array of rgb colors in string format and is called colors, and defining the type of graph as a string)
var data = [{
  values: [29, 20, 55],
  labels: ['Both','Star Wars','Star Trek'],
  marker: {
      colors: ['rgb(82,185,191)', 'rgb(234,100,156)', 'rgb(112,99,86)']
  }, 
  type: 'pie'
}];
// Next, define a variable called layout and set it to a hash that takes a defined height and a defined width. 
var layout = {
  height: 400,
  width: 500
};
// Finally, tell Plotly to make a new plot in the div above called "myDiv2" using those data and layout variables: 
Plotly.newPlot('myDiv2', data, layout);
</script>
