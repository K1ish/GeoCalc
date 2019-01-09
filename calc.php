<?php
// Calculate Hypotenuse from two sides of right triangle
$a1 = 0;
$a2 = 0;
$s1hypo = $_GET["side1h"];
$s2hypo = $_GET["side2h"];
$a1 = $s1hypo * $s1hypo;
$a2 = $s2hypo * $s2hypo;
$a3 = $a1 + $a2;
$a4 = sqrt($a3);
// Outputs hypotenuse at var a4

// Right triangle checker check (a + b > c), (b + c > a), (c + a > b)
// b1 is side1. b2 is side2. b3 is hypotenuse
$boutput = "Your sides unfortunately do not form a Right Triangle";
$btrue = 0;
$btri = 0;
$b1 = $_GET["rt1"];
$b2 = $_GET["rt2"];
$b3 = $_GET["rt3"];
$b4 = $b1 * $b1 + $b2 * $b2;
$b5 = sqrt($b4);
if($b1 + $b2 > $b3) {
    if($b2 + $b3 > $b1) {
        if($b3 + $b1 > $b2) {
            $btri = 1;
        } else {
            $btri = 0;
        }
    } else {
        $btri = 0;
    }
    
} else {
$btri = 0;   
}

if($btri == 1) {
    // Does calculated hypotenuse equal given hypotenuse?
    if($b5 == $b3) {
        $btrue = 1;
        $boutput = "Your Inputted sides form a Right Triangle!";
    } else { 
        $btrue = 0;
    }
}
if($btrue = 0) {
    $boutput = "Your sides unfortunately do not form a Right Triangle, but they would if your hypotenuse equaled " . $b5;
}
// var btrue outputs 0 if not right triangle and 1 if it is

// take in hypotenuse + one leg and output other leg
$c1 = $_GET["chypo"];
$c2 = $_GET["cleg"];
$c3 = $c1 - $c2;
$c4 = sqrt($c3);
// var c4 is answer for this
$d1x = $_GET["point1x"];
$d1y = $_GET["point1y"];
$d2x = $_GET["point2x"];
$d2y = $_GET["point2y"];

$d3 = $d1x + $d2x;
$dx = $d3 / 2;
$d5 = $d1y + $d2y;
$dy = $d5 / 2;

// outputs at dx and dy

?>
<HTML>
    <head>
        <title>RT1 Project</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99334623-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99334623-1');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9597753647347951",
          enable_page_level_ads: true
     });
</script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <style>
            h1 {
                text-align: center;
            }
        </style>
        
    </head>
    <body>
        <h1>Keegan's RT1 Calculator</h1
        <div class="row">
        <div class="gethypo" style="padding: 5rem;">
        <form method="get">
        <h2>Get Hypotenuse from 2 sides</h2>
        <div class="form-group">
        <input class="form-control" type="text" name="side1h" placeholder="Side 1" style="width: 18rem;">
        <input class="form-control" type="text" name="side2h" placeholder="Side 2" style="width: 18rem;">
        <input class="form-control" type="text" placeholder="Output: <?php echo $a4; ?>" style="width: 18rem;" readonly>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        <div class="rtcheck" style="padding: 6rem;">
        <form method="get">
        <h2>Right triangle checker</h2>
        <div class="form-group">
            <div class="input-group">
        <input class="form-control" type="text" name="rt1" placeholder="Side 1">
        <input class="form-control" type="text" name="rt2" placeholder="Side 2">
        </div>
        <input class="form-control" type="text" name="rt3" placeholder="Hypotenuse">
        <input class="form-control" type="text" placeholder="Output: <?php echo $boutput; ?>" readonly>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
        <!-- Begin One side calc -->
        <div class="row">
        <div class="oneside" style="padding: 9rem;">
        <form method="get">
        <h4>One side from h and side</h2>
        <div class="form-group">
        <input class="form-control" type="text" name="chypo" placeholder="Hypotenuse" style="width: 18rem;">
        <input class="form-control" type="text" name="cleg" placeholder="One leg" style="width: 18rem;">
        <input class="form-control" type="text" placeholder="Output: <?php echo $c4; ?>" style="width: 18rem;" readonly>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        <div class="midpoint">
            <form method="get">
            <h2>Midpoint Finder</h2>
            <div class="form-group">
            <div class="input-group" style="width: 18rem;">
                <input class="form-control" type="text" name="point1x" placeholder="X&#8321;">
                <input class="form-control" type="text" name="point1y" placeholder="Y&#8321;">
            </div>
            <div class="input-group" style="width: 18rem;">
                <input class="form-control" type="text" name="point2x" placeholder="X&#8322;">
                <input class="form-control" type="text" name="point2y" placeholder="Y&#8322;">
            </div>
            <input style="width: 18rem;" class="form-control" type="text" placeholder="Output: (<?php echo $dx; ?>, <?php echo $dy; ?>)" readonly>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
    
    
</HTML>
