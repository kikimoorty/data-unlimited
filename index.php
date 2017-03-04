<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <!-- add ajax and d3, order correctly -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://d3js.org/d3.v3.min.js" ></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
        <p>Filler:Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <h2>Word Cloud </h2>
        <div id="chart">
          <!-- Wordcloud is drawn here -->
        </div>
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
  
  
// This is the Word Cloud
  
 //here is some text
var text_string = "Of course that’s your contention. You’re a first year grad student. You just got finished reading some Marxian historian, Pete Garrison probably. You’re gonna be convinced of that ’til next month when you get to James Lemon and then you’re gonna be talkin’ about how the economies of Virginia and Pennsylvania were entrepreneurial and capitalist way back in 1740. That’s gonna last until next year. You’re gonna be in here regurgitating Gordon Wood, talkin’ about, you know, the Pre-Revolutionary utopia and the capital-forming effects of military mobilization… ‘Wood drastically underestimates the impact of social distinctions predicated upon wealth, especially inherited wealth.’ You got that from Vickers, Work in Essex County, page 98, right? Yeah, I read that, too. Were you gonna plagiarize the whole thing for us? Do you have any thoughts of your own on this matter? Or do you, is that your thing? You come into a bar. You read some obscure passage and then pretend, you pawn it off as your own, as your own idea just to impress some girls and embarrass my friend? See, the sad thing about a guy like you is in 50 years, you’re gonna start doin’ some thinkin’ on your own and you’re gonna come up with the fact that there are two certainties in life. One: don’t do that. And two: you dropped a hundred and fifty grand on an’ education you coulda got for a dollar fifty in late charges at the public library.";
      drawWordCloud(text_string);
      //manually picked out some common words
      function drawWordCloud(text_string){
        var common = "i,me,my,myself,we,us,our,ours,ourselves,you,your,yours,yourself,yourselves,he,him,his,himself,she,her,hers,herself,it,its,itself,they,them,their,theirs,themselves,what,which,who,whom,whose,this,that,these,those,am,is,are,was,were,be,been,being,have,has,had,having,do,does,did,doing,will,would,should,can,could,ought,i'm,you're,he's,she's,it's,we're,they're,i've,you've,we've,they've,i'd,you'd,he'd,she'd,we'd,they'd,i'll,you'll,he'll,she'll,we'll,they'll,isn't,aren't,wasn't,weren't,hasn't,haven't,hadn't,doesn't,don't,didn't,won't,wouldn't,shan't,shouldn't,can't,cannot,couldn't,mustn't,let's,that's,who's,what's,here's,there's,when's,where's,why's,how's,a,an,the,and,but,if,or,because,as,until,while,of,at,by,for,with,about,against,between,into,through,during,before,after,above,below,to,from,up,upon,down,in,out,on,off,over,under,again,further,then,once,here,there,when,where,why,how,all,any,both,each,few,more,most,other,some,such,no,nor,not,only,own,same,so,than,too,very,say,says,said,shall,love";
        var word_count = {};
        // This is to show how the word_count works! We can uncomment this and look at the JS console. 
        // console.log(word_count);
        var words = text_string.split(/[ '\-\(\)\*":;\[\]|{},.!?]+/);
          if (words.length == 1){
            word_count[words[0]] = 1;
          } else {
            words.forEach(function(word){
              var word = word.toLowerCase();
              if (word != "" && common.indexOf(word)==-1 && word.length>1){
                if (word_count[word]){
                  word_count[word]++;
                } else {
                  word_count[word] = 1;
                }
              }
            })
          }
        var svg_location = "#chart";
        var width = 700;
        var height = 500;
        var fill = d3.scale.category20();
        var word_entries = d3.entries(word_count);
        var xScale = d3.scale.linear()
           .domain([0, d3.max(word_entries, function(d) {
              return d.value;
            })
           ])
           .range([10,100]);
        d3.layout.cloud().size([width, height])
          .timeInterval(20)
          .words(word_entries)
          .fontSize(function(d) { return xScale(+d.value); })
          .text(function(d) { return d.key; })
          .rotate(function() { return ~~(Math.random() * 2) * 90; })
          .font("Impact")
          .on("end", draw)
          .start();
        function draw(words) {
          d3.select(svg_location).append("svg")
              .attr("width", width)
              .attr("height", height)
            .append("g")
              .attr("transform", "translate(" + [width >> 1, height >> 1] + ")")
            .selectAll("text")
              .data(words)
            .enter().append("text")
              .style("font-size", function(d) { return xScale(d.value) + "px"; })
              .style("font-family", "Impact")
              .style("fill", function(d, i) { return fill(i); })
              .attr("text-anchor", "middle")
              .attr("transform", function(d) {
                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
              })
              .text(function(d) { return d.key; });
        }
      //this tells d3 to layout the cloud
        d3.layout.cloud().stop();
      } 
</script>
