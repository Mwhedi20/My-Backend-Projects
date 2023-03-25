<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
[class*="col-"] {
    float: left;
    padding: 15px;  
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
html {
    font-family: "Lucida Sans", sans-serif;
    
}
.header {
    margin-top: 0px;
    color: Black;
    padding: 5px;
    text-align:center;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color:Silver;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    color: Black;   
    text-align:right;
}
.menu li:hover {
    background-color: #0099cc;
}



.cen
{text-align:right;
 height:450px;
	}
	
	a
	{
		display:block;
		}
	
	a:hover {
    background-color: Green;
	color:Black;
	}
	
	.footer
	{
		border:none;
		background-color:lightblue;
        margin-top: 39.5%;
		color:black;
		clear:both;
		text-align:center;
		padding:10px;
		}


#nav {
height: 40px;
background: #1f2025;
}
#nav ul {
margin: 0;
padding: 0;
list-style: none;
}
#nav li {
float: right;
}

#nav li a {
display: block;
padding: 10px 8px;
min-width: 70px;
text-align: center;
text-decoration: none;
font-weight: bold;
color: #eaeaea;
}

#nav li a:hover {
background: #e5e4e2;
color: #000;
}

p
{
    text-align:right;
    font-size:large;
   color:Black;
    }

@media (max-width:600px)
{
    .col-1 {width: 100%;}
.col-2 {width: 100%;}
.col-3 {width: 100%;}
.col-4 {width: 100%;}
.col-5 {width: 100%;}
.col-6 {width: 100%;}
.col-7 {width: 100%;}
.col-8 {width: 100%;}
.col-9 {width: 100%;}
.col-10 {width: 100%;}
.col-11 {width: 100%;}
.col-12 {width: 100%;}
    
    }
	
</style>
</head>
<body>

<div class="header">
<h1 style="text-align:center;color:Red;background-color:silver;height:100%;"> <span></span> استعراض الوظائف</h1>

</div>

<div class="col-6 menu"> 
<h2 style="text-align:center;background-color:lightblue">الوظائف الشاغرة</h2>

<table class="table table-bordered"  style="text-align: center;">

    <tr>
        <th style="text-align:center ;color: red;">تفاصيل الوظيفة</th>
        <th style="text-align:center ;color: red;">الوظيفة</th>
        
    </tr>


    <?php 
    $coo = new mysqli("localhost", "root", "", "cisjops");
    $st=$coo ->query("SELECT * FROM `jops`");
    if ($st->num_rows>0){ 
        while($row = $st->fetch_assoc()){
            echo "<tr><td><a href='sel.php?no=".$row["id"]."'>" ."تفاصيل". "</a></td><td>".$row["jname"]."</td>".
            "</tr>";
        }
    }
    ?>
</table>


</div>


<div class="col-6 menu" style="text-align:center ;">
    <h2 style="color: black; background-color:lightblue">ادخال وظيفة جديدة </h2>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="usr">اسم الوظيفة:</label>
          <input class="form-control" type="text" id="usr" name="jpname">
        </div>
        
        <div class="form-group">
      <label for="comment">مكان الوظيفة :</label>
      <input class="form-control" type="text" id="usr2" name="jploc">
    </div>
                        
    <div class="form-group">
        <label for="comment">  تفاصيل الوظيفة :</label>
        <textarea cols="30" rows="5" class="form-control" name="jpdes"></textarea>
      </div>

            
      <div class="radio-inline">
        دبلوم <label><input type="radio" name="a" value="deplom" > </label>
      </div>
      <div class="radio-inline">
        بكالوريوس <label><input type="radio" name="a" value="bakalorios"></label>
      </div>
      <div class="radio-inline">
        ثانوية <label><input type="radio" name="a" value="school"></label>
      </div>

    <br><br>    
    <div class="form-group"> 
        
          <button type="submit" name="btnsend" class="btn btn-default">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>         
        </div>
    
      </form>
</div>


<div class="footer">
Mohammed Omar Wheidy
</div>

</body>
</html>