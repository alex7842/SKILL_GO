<?php
include 'new.php';
 session_start();
if (isset($_GET['username'])) {
    // Get the username from the URL parameter
    $name = $_GET['username'];
    echo "<script>
        // Store the name variable in local storage
        localStorage.setItem('username', '" . addslashes($name) . "');
      </script>";
   

    // Retrieve the email and image based on the username
    $query = "SELECT * FROM base1 WHERE name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $image = $row["image"];
        $ema = $row["email"];
        // Now $image and $ema contain the user's image and email respectively
    } else {
        echo "User not found in the database.";
    }
} else {
    echo "Username not provided in the URL.";
}

// if (!empty($_SESSION["name"])) {
//     $name = $_SESSION["name"];
    
//     // Modify the query to retrieve the user's image based on their name
//     $query = "SELECT * FROM base1 WHERE name = ?";
//     $stmt = mysqli_prepare($conn, $query);
//     mysqli_stmt_bind_param($stmt, "s", $name); // "s" indicates a string parameter
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($result)) {
//         $image = $row["image"];
//         $ema=$row["email"];
//        // Store the image URL in $image variable
//     }
//}
?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Skill GO Home</title>
     <link rel="stylesheet" href="welcome.css">
         <link rel="stylesheet" href="welcome3.css">  
    <link rel="website icon" type="png" href="logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://kit.fontawesome.com/d9f0abd257.js" crossorigin="anonymous"></script>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
   
    <link href='https://fonts.googleapis.com/css?family=Alkalami' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>    
    <link href='https://fonts.googleapis.com/css?family=Bakbak One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Noto+Sans&family=Nunito+Sans:ital,opsz@1,6..12&family=Open+Sans:wght@500&family=Poppins:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1/dist/css/splide.min.css
" rel="stylesheet">
   <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1/dist/js/splide.min.js
"></script>

    
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> 
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <script src="//code.tidio.co/lzr9hspwvp2cxfz6t6drbshmfnjod1rz.js" async></script>


   
</head>
<body>
  

	
  <style type="text/css">
    .navbar-custom {
    background-color:#1386EC;
    height: 15%;
  }

  </style>
        
      <nav class="navbar navbar-expand-lg    navbar-light bg-secondry navbar-custom">
        <img  class="logo"src="skill2.png">
        <br>
  <a class="navbar-brand" href="#" style="font-family: 'Alkalami';font-size: 22px;">Skill Go</a>
  <button class="alex22 navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#paracon1">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#scroll">Programming</a>
          <a class="dropdown-item" href="#toggle">Javascript</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#toggle">Frame Works</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
    </ul>
    <div class="sea">
    <form class="form-inline my-2 my-lg-0">
      <input  id="searchbar"class="form-control mr-sm-2 py-2 rounded-pill mr-1 pr-5 btn-outline-light" type="search" placeholder="Learn Something New " onkeyup="search_course()" aria-label="Search">
      <ul id='list' class="se"style="display: none;">
         <div class="seic" style="display: flex; justify-content: flex-end;">
         
        </div> 
        <div class="li">
        <li class="course"><a style="color:white;text-decoration: none;" href="#scroll">C</a></li>
        <li class="course"><a style="color:white;text-decoration: none;" href="#scroll">Java</a></li>
        <li class="course"><a style="color:white;text-decoration: none;" href="#scroll">C++</a></li>
        <li class="course"><a style="color:white;text-decoration: none;" href="#scroll">Python</a></li>
        <li class="course"><a style="color:white;text-decoration: none;" href="#scroll">MongoDb</a></li>
        <li class="course"><a style="color:white;text-decoration: none;" href="config3.php">React</a></li>
        <li class="course">Node js</li>
        <li class="course"><a style="color:white;text-decoration: none;" href="config3.php?username=<?php echo $name; ?>">
Javascript</a></li>
        <li class="course"><a style="color:white" href="#scroll">Django</a></li>
        <li class="course">Mysql</li>
        <li class="course">Php</li>
        <li class="course">R programming</li>
      </div>
    </ul>
      
       <script src="search.js"></script>
    </form>
  </div>
  <div class="butbox">
    <form class="form-inline my-2 my-lg-0" action="regout.php">
       <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" style="color:white;font-size:18px; font-family:'Acme'; ">Sign up</button>
     </form>
     <form class="form-inline my-2 my-lg-0" action="logout.php">
     <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" style="color:white;font-size:18px;font-family:'Acme';">Logout</button>
    </form>
  </div>
  <div class="pro">
       <button class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal" data-toggle="tooltip" data-placement="top" title="Profile">
 <?php
echo "<img src='data:image/jpeg;base64,$image' width='80' height='80' style='clip-path: circle(50%);'>"?></button> 
     
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 0.2em;">Profile  <i class="fa-regular fa-user"></i></h5>
        <div style="margin-left:6%; font-size:20px;color:#f07605;border-left:2px solid black;"  id="spa1"></div>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="e1" style="display:flex; gap:4%;">
       
        <?php
echo "<img src='data:image/jpeg;base64,$image' width='100' height='100' style='clip-path: circle(50%);'>";
?>
<div class="nam" style="display: flex; flex-direction: column;">
<div class="name1">

<span><?php  
 echo "$name";
 ?></span>
</div>
  <div>
   
 <?php      
echo "$ema";
?>
</div>
<div class="progress" style="margin-top: 2%;">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
</div>
</div>
</div>
<br>

 
         
  <div class="score">
    
    <div class="score1" data-toggle="tooltip" data-placement="top" title="Collect Badges by course Completion">
  <i class="fa-solid fa-2x fa-certificate" style="color: #2b72ee;"></i> 0 Badge</div>
    <div class="score1" data-toggle="tooltip" data-placement="top" title="Daily Login">
  <i class="fa-solid fa-2x fa-star" style="color: #FFD43B;"></i><small style="font-size: 20px;"id="Daily-log"> 0</small> Stars</div>
    <div class="score1" data-toggle="tooltip" data-placement="top" title="Go premium"><img src="target_3750570.png"> 0 Score</div>

  </div>


  <br>

  <div class="drop">
    <div>
    <label>State : </label><div contenteditable="true" placeholder="Tamilnadu"style="width: 60%; border-bottom: 2px dotted black; outline: none;"></div>
  </div>
  <br>
  <div>
     <label>Education : </label><div contenteditable="true" placeholder="Under Graduate" style="width: 60%; border-bottom: 2px dotted black; outline: none;"></div>
   </div>
  </div>

  <br>
  <small style="font-size: 15px;">Last Login</small><br><small id="date" style="font-size: 19px; margin-top: 1px;"></small>
  <div class="mod-btn">
    <button type="button"  id="save" class="btn btn-dark" value="Saved">Save</button>
    <button type="button" id="submit" class="btn btn-dark" value="Submitted">Submit</button>
  </div>
     
      </div>
    </div>
  </div>
</div>
</div>
</nav>

  <script>
    let d=new Date();
  
      let options = { weekday: 'short', month: 'short', day: 'numeric', year: 'numeric' };
      let formattedDate = `${d.toLocaleDateString('en-US', options)}`;
      console.log(formattedDate)
      let p=localStorage.getItem('new') || formattedDate ;
      localStorage.setItem('new',p);
       console.log(p)
       let da= document.getElementById('date');
      da.innerHTML=p;
    let f = localStorage.getItem('storedContent') || 0;

    // Increment the value
    f++;

    // Store the incremented value back in local storage
    localStorage.setItem('storedContent', f);

    // Update the content of the 'Daily-log' element
    let k = document.getElementById('Daily-log');
    k.innerHTML = f;

  </script>
<script>
let k2=document.getElementById('save');
let k3=document.getElementById('submit');
let s=document.getElementById('spa1');
k2.onclick=()=>{
  
  s.innerHTML=`Data ${k2.value} Successfully`;
  setTimeout(()=>{
    s.innerHTML=''
  },2000)
}
k3.onclick=()=>{

  s.innerHTML=`Data ${k3.value} Successfully`;
   setTimeout(()=>{
    s.innerHTML=''
  },2000)
}
</script>

<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">
         <div id="back12">
    <div class="des">
      <p style="font-size: 2.3rem;"><strong style="color: #1386EC">S</strong>kill <strong style="color: #1386EC">G</strong>o</p>
    </div>

    <div class="last">
    <div class="tex">
    <p class="animate-charcter" id="h2"> Hi <span style="color:#DFFF00; font-size: 23px;margin-left:0.2em;margin-right: 0.2em;"><?php echo $name; ?></span>  Welcome to Skill Go learn with us</p>
  </div>

<div class="cent">
  <a href="config3.php">
  <button  class="btn123">Get Started</button></a>
  </div>

<div class="sep">
  <p class="joinpar">Join the more than 100,000 creators who use Teachable to share their knowledge</p>
 
</div>

  </div>
</div>

    
      </li>
      <li class="splide__slide">
         
      <div class="back1">
   <div class="dow1">
    <img src="man.png">
    
   </div>
   <div class="bo">
   <div class="hed1">
   <h1>Live Workshop on Web development</h1>
   <h2> Professor:John More</h2> 
   <p>6 hours <span>Free</span> <i class="fa-solid  fa-1x fa-circle fa-beat-fade" style="color: #f00505;"></i></p>
 </div>
</div>
  
</div>
     <li class="splide__slide">
         <div class="back">
   <div class="dow ">
    <img src="dow11.png">
    
   </div>
   <div class="hed">
    <h2>Explore
<span>SkillGo</span></h2>
<h2>Start Today</h2>
   </div>
   <div class="bu">
    <a href="config3.php">
    <button  class="button"></button></a>

   </div>
</div>
    
      </li>
    </ul>
  </div>
</section>

 <script>
    var splide = new Splide('.splide',{
       type    : 'loop',
       perPage : 1,
       autoplay: true,
       /*interval: 3000,*/
    });
    splide.mount();
</script>


  
  <br>
  
  

  
  
  <h1 style="font-family:'Alkalami';">Welcome<em class="typed-text"> <?php echo $name;?> !</em></h1>

  <br>


<div class="try1">
<div id="paracon1">
  
  
<h2>Upskill your team with <strong style="color: #1386EC; font-size:1.8rem">Skill Go</strong> Business</h2>
<ul id="ul1">
 

<li>Interactive and engaging learning experience.Our platform provides an interactive learning  and assessments to reinforce your learning.</li>
</ul>


<form class="form-inline my-2 my-lg-0">

       <a style="text-decoration: none;" class="btu1 my-2 my-sm-0" type="text">Learn More</a>
    

      
       <a style="text-decoration: none;" class="btu2 my-2 my-sm-0" type="text">Get Started</a>
       </form>
     </div>
    
<div class="img2">
   <img  src="https://th.bing.com/th/id/OIP.L--ejAMtEYclobboenz2FgHaE8?w=302&h=201&c=7&r=0&o=5&dpr=1.5&pid=1.7"> 
 
</div>
</div>
<br>
<br>



<div class="try">
  <div class="img2">
    <img src="https://th.bing.com/th/id/OIP.xdJBAgH86B5FFcVp_cBxlgHaE8?w=279&h=187&c=7&r=0&o=5&dpr=1.5&pid=1.7">
</div>
<div id="paracon">
  <h2>Teachers Who 
Lead the Way with <strong style="color: #1386EC; font-size:1.8rem">Skill Go</strong> Business</h2>
<ul id="ul1">
  <br>
 
<li>Learn with Emily Henderson, Kelis, Marques Brownlee, Jessica Kobeissi, and thousands of acclaimed creators eager to share their knowledge with you.</li>
</ul>



<form class="form-inline my-2 my-lg-0">

       <a style="text-decoration: none;" class="btu1 my-2 my-sm-0" type="submit">Learn More</a>
    

      
       <a style="text-decoration: none;"class=" btu2 my-2 my-sm-0" type="submit">Get Started</a>
       </form>
     </div>

  </div>
  <br>


 
<h2 id="why">Why join Skillgo ?</h2>
<br>
<div class="box1" id="box">
  <h2 class="typed-text">Trusted by over 14,400 great Leading companies </h2>
  <br>
  <br>
<div class="boxf1">
  <div class="child1">
    <img src="icon1.jpeg">
    <p>Why Students Love SkillGo.We here to support you on every step of your creative journey.</p>
  </div>
  <div class="child1">
    <img src="icon2.jpeg">
    <p>And the reason why I'm on SkillGo is to develop a skill. I feel learning.</p>
</div>
</div>
<br>
<div class="boxf2">
  <div class="child2">
   <img src="icon3.jpeg">
    <p>Learn from Creative Experts classes are taught by industry techniques, and professionals.</p>
  </div>
  <div class="child2">
    <img    src="icon4.jpeg">
    <p>Connect with a global community of curious professional idea creatives.800K+
MEMBERS</p>
</div>
</div>
</div>

<!-- <svg width="400" height="400">
   <circle cx="200" cy="200" r="150" fill="#f2f2f2" />
  <path d="M200,200 L200,50 A150,150 0 0,1 330,170 Z" fill="#FF7F00" />
  <path d="M200,200 L330,170 A150,150 0 0,1 334,242 Z" fill="#1F77B4" />
  <path d="M200,200 L334,242 A150,150 0 0,1 200,350 Z" fill="#AEC7E8" />
  <path d="M200,200 L200,350 A150,150 0 0,1 65,240 Z" fill="#FFC500" />
  <path d="M200,200 L65,240 A150,150 0 0,1 200,50 Z" fill="#E377C2" />
</svg> --> 
<br>
<br>
<h2>Performance Tracking</h2>

<br>
<div>
  <div class="bars">
    <div class="barcon">
      <div class="imgtr">
        <img src="cust.jpeg">
      </div>
      <div class="tepa">
     <p>Tracking the Performance of the Student 24 hours by using Smart Technology for thier endless <strong class="grow"> GROWTH</strong>  learning with us.  </p>
   </div>

    </div>
   
    <div class="barflex">
     
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
   <div class="bar5">
    <div style="display: flex; align-items: flex-start; width:100%; height: 17%; background-color: white; border-radius: 4%; box-shadow: none;">
      <img src="award.png" style="object-fit: contain; width:100%; height: 100%;">
    </div>
  </div>
  
</div>
  </div>
</div>
<br>
<br>
<br>
 
<section>
    
    
     
    <h2>What Special With us?</h2>
  <br>
   <div class="in">
    <div class="info">
  <p>SkillGo is a community effort to create roadmaps,guides and other educational content to help guide developers in picking up a path and guide their learnings.</p>
</div>
  
  <div class="dia">

  <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="442" height="269.87671" viewBox="0 0 692 499.87671" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M945,696.10473H255a1,1,0,0,1,0-2H945a1,1,0,0,1,0,2Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M876.70437,521.703h-406a6.5,6.5,0,1,0,0,13h11.5v155.5a6.5,6.5,0,0,0,13,0l.09878-155.5H851.20437v155.5a6.5,6.5,0,0,0,13,0V538.13036l1.89111-3.42737h10.60889a6.5,6.5,0,1,0,0-13Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M695.79406,525.10473H572.81224a8.992,8.992,0,0,1-8.98182-8.98182V448.41382a8.992,8.992,0,0,1,8.98182-8.98182H695.79406a8.992,8.992,0,0,1,8.98182,8.98182v67.70909A8.992,8.992,0,0,1,695.79406,525.10473Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><path d="M695.79338,446.34472H572.81292a2.07422,2.07422,0,0,0-2.06983,2.07v67.71a2.07427,2.07427,0,0,0,2.06983,2.07H695.79338a2.07427,2.07427,0,0,0,2.06983-2.07v-67.71A2.07422,2.07422,0,0,0,695.79338,446.34472Z" transform="translate(-254 -200.06165)" fill="#fff"/><path d="M644.792,494.28284s-14.72226-3.39247-22.81951,2.827,10.30559,20.3548,10.30559,20.3548Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><circle cx="381.0242" cy="273.92427" r="13.88708" fill="#a0616a"/><path d="M624.28574,454.49178a9.89807,9.89807,0,0,1,9.12642-4.85578,19.3971,19.3971,0,0,1,5.51548,1.5439l9.07827,3.54127c2.34912.91634,4.92191,2.03879,5.94127,4.34508.9461,2.14055.24023,4.61266-.47431,6.84123l-3.39653,10.5933a32.24633,32.24633,0,0,0-1.92474-6.99768,10.83489,10.83489,0,0,0-4.70439-5.36393c-2.35809-1.2097-5.13745-1.18465-7.78466-1.05725-3.74914.18043-7.82552.65742-10.48931,3.30181a10.89524,10.89524,0,0,0-2.76456,5.39929,32.50033,32.50033,0,0,0-.57974,6.11164,50.669,50.669,0,0,1-3.86936-8.29541,20.52464,20.52464,0,0,1-1.43767-6.71481,9.44392,9.44392,0,0,1,2.16458-6.387,6.19534,6.19534,0,0,1,6.23051-1.96094Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><path d="M668.183,506.3247a2.47182,2.47182,0,0,0-2.06982-1.79.85977.85977,0,0,0-.1001-.06L645.28167,492.8565a2.63677,2.63677,0,0,0-3.52833.9082l-5.66992,9.18006-8.54-8.54-.13574-.13581a2.6365,2.6365,0,0,0-3.37646-.29528l-17.03809,11.93109c-.02978,0-.06006.01-.08984.01a3.63267,3.63267,0,0,0-3.03028,3.39l-.43994,8.89h68.04Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M706.1577,516.81382H693.03042a1.38183,1.38183,0,0,0-1.38182-1.38182h-4.14545a1.38184,1.38184,0,0,0-1.38182,1.38182h-4.14545a1.38184,1.38184,0,0,0-1.38182-1.38182H676.4486a1.38183,1.38183,0,0,0-1.38181,1.38182h-4.14546a1.38183,1.38183,0,0,0-1.38182-1.38182h-4.14545a1.38184,1.38184,0,0,0-1.38182,1.38182h-4.14545A1.38184,1.38184,0,0,0,658.485,515.432h-4.14546a1.38183,1.38183,0,0,0-1.38181,1.38182h-4.14546a1.38183,1.38183,0,0,0-1.38182-1.38182H643.285a1.38183,1.38183,0,0,0-1.38182,1.38182H637.7577a1.38184,1.38184,0,0,0-1.38182-1.38182h-4.14546a1.38184,1.38184,0,0,0-1.38182,1.38182h-4.14545a1.38183,1.38183,0,0,0-1.38182-1.38182h-4.14545a1.38183,1.38183,0,0,0-1.38182,1.38182H615.6486a1.38183,1.38183,0,0,0-1.38181-1.38182h-4.14546a1.38184,1.38184,0,0,0-1.38182,1.38182h-4.14545a1.38184,1.38184,0,0,0-1.38182-1.38182h-4.14545a1.38183,1.38183,0,0,0-1.38182,1.38182h-4.14546a1.38183,1.38183,0,0,0-1.38181-1.38182h-4.14546a1.38184,1.38184,0,0,0-1.38182,1.38182H582.485a1.38184,1.38184,0,0,0-1.38182-1.38182H576.9577a1.38183,1.38183,0,0,0-1.38182,1.38182H562.4486a4.14546,4.14546,0,0,0,0,8.29091H706.1577a4.14545,4.14545,0,0,0,0-8.29091Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><path d="M541.07906,492.73994v27.52572H472.11681a13.77119,13.77119,0,1,1,0-27.52572Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/><path d="M542.773,520.05392a1.05909,1.05909,0,0,1-1.05868,1.05868h-70.8258a14.50393,14.50393,0,1,1,0-29.00787h70.8258a1.05868,1.05868,0,0,1,0,2.11736h-70.8258a12.38658,12.38658,0,0,0,0,24.77315h70.8258A1.0591,1.0591,0,0,1,542.773,520.05392Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M541.07906,499.092H466.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M541.07906,504.1737H466.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M541.07906,509.25537H466.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M541.07906,514.337H466.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M528.07906,463.73994v27.52572H459.11681a13.77119,13.77119,0,1,1,0-27.52572Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/><path d="M529.773,491.05392a1.05909,1.05909,0,0,1-1.05868,1.05868h-70.8258a14.50393,14.50393,0,1,1,0-29.00787h70.8258a1.05868,1.05868,0,0,1,0,2.11736h-70.8258a12.38658,12.38658,0,0,0,0,24.77315h70.8258A1.0591,1.0591,0,0,1,529.773,491.05392Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><path d="M528.07906,470.092H453.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M528.07906,475.1737H453.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M528.07906,480.25537H453.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M528.07906,485.337H453.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M608.30315,618.10473v-24a4.00008,4.00008,0,0,0-4-4h-91a4.00008,4.00008,0,0,0-4,4v24Z" transform="translate(-254 -200.06165)" fill="#ccc"/><rect x="255.30315" y="427.04308" width="99" height="31" fill="#ccc"/><path d="M509.30315,667.10473v24a4.00008,4.00008,0,0,0,4,4h91a4.00008,4.00008,0,0,0,4-4v-24Z" transform="translate(-254 -200.06165)" fill="#ccc"/><circle cx="304.30315" cy="405.04308" r="3" fill="#fff"/><circle cx="304.30315" cy="445.04308" r="3" fill="#fff"/><circle cx="304.46392" cy="484.19608" r="3" fill="#fff"/><path d="M597.07906,562.73994v27.52572H528.11681a13.77119,13.77119,0,1,1,0-27.52572Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/><path d="M598.773,590.05392a1.05909,1.05909,0,0,1-1.05868,1.05868h-70.8258a14.50394,14.50394,0,1,1,0-29.00787h70.8258a1.05868,1.05868,0,0,1,0,2.11736h-70.8258a12.38658,12.38658,0,0,0,0,24.77315h70.8258A1.0591,1.0591,0,0,1,598.773,590.05392Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><path d="M597.07906,569.092H522.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M597.07906,574.1737H522.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M597.07906,579.25537H522.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M597.07906,584.337H522.97135a.21174.21174,0,1,1,0-.42347h74.10771a.21174.21174,0,0,1,0,.42347Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M504.11035,383.08308v-175.5a7.53,7.53,0,0,1,7.52143-7.52143H650.36035a7.53005,7.53005,0,0,1,7.52143,7.52143v175.5a7.53,7.53,0,0,1-7.52143,7.52142H511.63178A7.53,7.53,0,0,1,504.11035,383.08308Zm7.52143-181.35a5.85656,5.85656,0,0,0-5.85,5.85v175.5a5.85657,5.85657,0,0,0,5.85,5.85H650.36035a5.85658,5.85658,0,0,0,5.85-5.85v-175.5a5.85657,5.85657,0,0,0-5.85-5.85Z" transform="translate(-254 -200.06165)" fill="#e6e6e6"/><path d="M588.77549,280.65936V244.62367a3.7649,3.7649,0,0,1,3.76072-3.76072h30.537a3.7649,3.7649,0,0,1,3.76072,3.76072v36.03569a3.76489,3.76489,0,0,1-3.76072,3.76071h-30.537A3.76489,3.76489,0,0,1,588.77549,280.65936Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M529.43978,297.37364V261.338a3.76489,3.76489,0,0,1,3.76071-3.76071h30.537a3.76489,3.76489,0,0,1,3.76071,3.76071v36.03569a3.7649,3.7649,0,0,1-3.76071,3.76072h-30.537A3.7649,3.7649,0,0,1,529.43978,297.37364Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M577.07549,348.35221V312.31652a3.7649,3.7649,0,0,1,3.76072-3.76071h30.537a3.7649,3.7649,0,0,1,3.76072,3.76071v36.03569a3.7649,3.7649,0,0,1-3.76072,3.76072h-30.537A3.7649,3.7649,0,0,1,577.07549,348.35221Z" transform="translate(-254 -200.06165)" fill="#ff6584"/><path d="M759.56292,513.10473H728.143a1.94143,1.94143,0,0,0-.85986.2l-7.93018,3.97a1.44516,1.44516,0,0,0,0,2.66l7.93018,3.97a1.94143,1.94143,0,0,0,.85986.2h31.41993a1.64908,1.64908,0,0,0,1.74023-1.53v-7.93994A1.64908,1.64908,0,0,0,759.56292,513.10473Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><path d="M761.30315,514.63476v7.93994a1.64908,1.64908,0,0,1-1.74023,1.53h-6.25977v-11h6.25977A1.64908,1.64908,0,0,1,761.30315,514.63476Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M759.3265,453.70453a11.00278,11.00278,0,0,1,14.8905,6.9146,10.58813,10.58813,0,0,1,.32019,1.435l43.93794,21.78816,10.16835-6.73853,12.65178,14.56532L825.76934,504.2789a11.1485,11.1485,0,0,1-13.30125.513l-44.57918-30.82819a10.51075,10.51075,0,0,1-1.01489.3701,11.00314,11.00314,0,0,1-14.01048-8.56076,10.70772,10.70772,0,0,1-.16253-1.33951A11.036,11.036,0,0,1,759.3265,453.70453Z" transform="translate(-254 -200.06165)" fill="#ffb8b8"/><path d="M850.84106,587.8533H802.83129c0,1.38-49.48,2.5-49.48,2.5a12.85953,12.85953,0,0,0-2.10986,2,12.41025,12.41025,0,0,0-2.90039,8v2a12.5046,12.5046,0,0,0,12.5,12.5h90a12.51088,12.51088,0,0,0,12.5-12.5v-2A12.51735,12.51735,0,0,0,850.84106,587.8533Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><rect x="798.6175" y="614.35671" width="13" height="84" transform="translate(1356.235 1112.65178) rotate(-180)" fill="#3f3d56"/><path d="M761.6175,697.9c0,1.40463,19.69947.54331,44,.54331s44,.86132,44-.54331-19.69947-12.54331-44-12.54331S761.6175,696.49539,761.6175,697.9Z" transform="translate(-254 -200.06165)" fill="#3f3d56"/><polygon points="519.353 487.993 507.094 487.992 501.261 456.195 519.355 456.196 519.353 487.993" fill="#ffb8b8"/><path d="M776.47983,699.93835l-39.53052-.00146v-.5a15.38605,15.38605,0,0,1,15.38647-15.38623h.001l24.1438.001Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><path d="M755.01663,668.33665,730.57571,613.529a20.086,20.086,0,0,1,8.8186-25.78418l53.01343-28.42773,24.19116-2.05762,22.3147-2.02832.16089.27246c.20581.34766,5.00366,8.63477,1.7605,17.72168-2.46,6.89258-8.85889,12.27637-19.0188,16.00195-23.71436,8.69532-51.10913,16.127-61.78638,18.918a3.45079,3.45079,0,0,0-2.21118,1.75977,3.49812,3.49812,0,0,0-.19629,2.79883l22.70654,51.01464a4.49992,4.49992,0,0,1-3.80932,6.0293L759.553,670.98313q-.21606.02051-.43017.02051A4.49688,4.49688,0,0,1,755.01663,668.33665Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><polygon points="525.353 487.993 513.094 487.992 507.261 456.195 525.355 456.196 525.353 487.993" fill="#ffb8b8"/><path d="M782.47983,699.93835l-39.53052-.00146v-.5a15.38605,15.38605,0,0,1,15.38647-15.38623h.001l24.1438.001Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><path d="M762.01663,671.33665,737.57571,616.529a20.086,20.086,0,0,1,8.8186-25.78418l53.01343-28.42773,24.19116-2.05762,22.3147-2.02832.16089.27246c.20581.34766,5.00366,8.63477,1.7605,17.72168-2.46,6.89258-8.85889,12.27637-19.0188,16.00195-23.71436,8.69532-51.10913,16.127-61.78638,18.918a3.45079,3.45079,0,0,0-2.21118,1.75977,3.49812,3.49812,0,0,0-.19629,2.79883l22.70654,51.01464a4.49992,4.49992,0,0,1-3.80932,6.0293L766.553,673.98313q-.21606.02051-.43017.02051A4.49688,4.49688,0,0,1,762.01663,671.33665Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><path d="M749.83452,503.90591a167.50633,167.50633,0,0,1-24.0754-44.93173,4.30258,4.30258,0,0,1,2.03179-5.17938l35.14526-18.83159a4.2466,4.2466,0,0,1,3.72553-.15123,4.31914,4.31914,0,0,1,2.46131,2.884,102.32846,102.32846,0,0,0,22.44563,41.89073,4.31809,4.31809,0,0,1,1.03824,3.64654,4.24658,4.24658,0,0,1-2.1894,3.01811L755.27223,505.083A4.30258,4.30258,0,0,1,749.83452,503.90591Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M752.23284,502.10375a1.29853,1.29853,0,0,0,1.62207.335l35.14551-18.832a1.24591,1.24591,0,0,0,.65258-.897,1.31807,1.31807,0,0,0-.325-1.12793,105.34018,105.34018,0,0,1-23.10693-43.125,1.31863,1.31863,0,0,0-.75806-.895,1.24691,1.24691,0,0,0-1.11035.0459L729.20793,456.4392a1.29831,1.29831,0,0,0-.61962,1.53711,164.50711,164.50711,0,0,0,23.64453,44.12744Z" transform="translate(-254 -200.06165)" fill="#fff"/><path d="M866.59251,498.88255l-27.52466,10.45937-6.72-18.66664a11.16823,11.16823,0,0,1,5.002-13.4995l0,0a11.16823,11.16823,0,0,1,14.26249,2.78445Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M796.58273,572.84256a4.99862,4.99862,0,0,1-2.0835-3.54883c-3.52539-32.90967-1.06982-58.66406,7.50586-78.73486a24.99166,24.99166,0,0,1,16.5669-14.17969l22.24951-1.12305.11523.05567A26.00516,26.00516,0,0,1,855.156,502.90018c-7.15625,18.86328-13.14844,38.50293-8.57861,54.34619a5.12194,5.12194,0,0,1-.48389,3.9834,4.88411,4.88411,0,0,1-3.11572,2.30908L800.59933,573.6199a4.96422,4.96422,0,0,1-4.0166-.77734Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><circle cx="579.39612" cy="242.32319" r="24.56103" fill="#ffb8b8"/><path d="M765.24342,461.83787l-19.1416,8.44957a3.00328,3.00328,0,0,1-3.956-1.533l-.47343-1.07251a3.00328,3.00328,0,0,1,1.533-3.956l19.1416-8.44957a3.00328,3.00328,0,0,1,3.956,1.533l.47343,1.07251A3.00328,3.00328,0,0,1,765.24342,461.83787Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M772.24342,474.83787l-19.1416,8.44957a3.00328,3.00328,0,0,1-3.956-1.533l-.47343-1.07251a3.00328,3.00328,0,0,1,1.533-3.956l19.1416-8.44957a3.00328,3.00328,0,0,1,3.956,1.533l.47343,1.07251A3.00328,3.00328,0,0,1,772.24342,474.83787Z" transform="translate(-254 -200.06165)" fill="#ccc"/><path d="M787.00509,525.615l-42.67431-33.666a10.51709,10.51709,0,0,1-1.03614.30566,11.02708,11.02708,0,0,1-8.81787-1.69141,10.9127,10.9127,0,0,1-4.62646-7.73339,11.02293,11.02293,0,0,1,7.209-11.63819,11.00361,11.00361,0,0,1,14.42627,7.8374,10.5714,10.5714,0,0,1,.229,1.45215L794.196,504.98856l10.57178-6.08643,11.71093,15.332-16.41406,11.69922a10.94192,10.94192,0,0,1-13.05957-.31836Z" transform="translate(-254 -200.06165)" fill="#ffb8b8"/><path d="M821.686,519.00884l-24.34869-16.55738,11.44288-16.20686a11.16823,11.16823,0,0,1,13.92862-3.64l0,0a11.16822,11.16822,0,0,1,5.89441,13.2826Z" transform="translate(-254 -200.06165)" fill="#00b0ff"/><path d="M824.39127,438.72667c-6.31271,4.32051-14.60145,8.76174-21.04891,4.16075-4.23352-3.02109-5.56737-8.61545-3.8506-13.52486,3.08726-8.82857,11.56943-12.71531,19.68052-15.69459,10.54441-3.87305,22.02573-6.95424,32.91112-4.18055s20.5056,13.31292,18.54058,24.37293c-1.58022,8.89423-9.97,16.29492-8.779,25.24958,1.19867,9.01215,11.33379,13.75589,20.28149,15.36658s18.96039,2.12822,25.39074,8.5552c8.2031,8.1988,6.15465,22.85325-1.56414,31.50955s-19.36683,12.58011-30.6538,15.24757c-14.95454,3.53422-31.12905,5.39161-45.33209-.47378s-25.25565-21.65433-21.14126-36.45976c1.73791-6.2538,5.83191-11.5391,9.78854-16.68451s7.9631-10.526,9.47238-16.83888c1.25772-5.26073.32682-11.36869-3.16182-15.31484a4.437,4.437,0,0,1-.59439-5.18643Z" transform="translate(-254 -200.06165)" fill="#2f2e41"/><path d="M363.07219,558.06009a39.063,39.063,0,0,1-37.72112-6.64474c-13.212-11.08918-17.35436-29.35854-20.72485-46.275q-4.98462-25.01781-9.96925-50.0356l20.87166,14.37144c15.00965,10.33508,30.35744,21.00126,40.75007,35.97112s14.929,35.40506,6.57885,51.60315" transform="translate(-254 -200.06165)" fill="#e6e6e6"/><path d="M361.28809,618.6386c2.11249-15.38745,4.28468-30.97255,2.80288-46.52494-1.316-13.81219-5.52988-27.30283-14.10882-38.36423A63.8196,63.8196,0,0,0,333.60831,518.912c-1.6374-1.03351-3.14442,1.5614-1.51416,2.59042A60.67179,60.67179,0,0,1,356.093,550.4588c5.22488,13.28947,6.06392,27.77612,5.16355,41.89337-.54449,8.53723-1.69847,17.01851-2.86134,25.48891a1.5543,1.5543,0,0,0,1.04766,1.84518,1.50916,1.50916,0,0,0,1.84518-1.04766Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/><path d="M340.941,591.41008a28.75526,28.75526,0,0,1-25.05474,12.93133c-12.68314-.60208-23.25684-9.45412-32.77515-17.85807l-28.15329-24.85721,18.63281-.8917c13.39961-.64126,27.14492-1.23941,39.90759,2.89278s24.53307,14.0769,26.8668,27.2873" transform="translate(-254 -200.06165)" fill="#e6e6e6"/><path d="M367.25813,627.48412c-10.16773-17.99115-21.96141-37.98627-43.03473-44.377a48.02218,48.02218,0,0,0-18.10109-1.869c-1.9218.16571-1.44191,3.12811.4764,2.9627a44.61381,44.61381,0,0,1,28.88649,7.64231c8.1449,5.544,14.48659,13.25166,19.85414,21.42526,3.28779,5.00657,6.23278,10.22555,9.17833,15.43753.94134,1.66563,3.69279.46329,2.74046-1.22181Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/><path d="M383.54973,646.42114A21.77376,21.77376,0,0,0,370.207,628.18432v-10.401H352.76213v10.72876a21.76258,21.76258,0,0,0-12.61621,17.90906l-4.102,47.68359h51.60791Z" transform="translate(-254 -200.06165)" fill="#f2f2f2"/></svg>

</div>
</section>
<br>
<br>

<h2>Explore our courses? <span class="badge rounded-pill bg-info text-dark badge-custom">New</span></h2>
<br>
 
<div class="scroll" id="scroll">

  <section>
  <div class="s1">
    <div class="card " style="width: 18rem;height: 29rem;">
  <img src="html.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Build Responsive Websites with HTML and CSS</p>
    <bold style="font-family:verdana;">Instructor:Jose Portilla</bold>
   <p style="font-family: verdana; font-size:15px;">Total hours:16 </p>
    <img src="stars.jpg" style="width:43%; height: 8%; object-fit: contain;">
   <p style="font-family: verdana;font-size:15px;">8043 students</p>

 
  <a href="time.html" > <button href="#" class="btn button1  btn-primary btn-group-toggle position-relative">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    Buy
  </div> 
 
     <span class="bas position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button></a>

 

  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="java.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-title" id="pyfor"style="font-family: ">Java Core Programming with Data Structures</p>
    <bold style="font-family:verdana;">Instructor:Alex S</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:19 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹1900</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹3,199</small>   86% off</p>

  <a href="time.html" > <button  class="btn button1 btn-primary btn-group-toggle">
    
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button></a>
 
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="php1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
     <p class="card-title" id="pyfor"style="font-family: ">PHP for Beginners - Become Master at PHP</p>
    <bold style="font-family:verdana;">Instructor:Dev Narain</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:12 </small></p>
   <img src="stars.jpg" style="width:35%; height: 6%; object-fit: contain;">
   <p style="font-family:verdana;font-size:15px;">7000 students</p>
   <br>
  <a href="time.html" > <button href="time.html" class="btn button1 btn-primary position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    Buy
  </div> 
     <span class="bas position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button></a>
  
    
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="python1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Automate the Boring Stuff with Python Programming</p>
    <bold style="font-family:verdana;">Instructor:Akhil Alan</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:22 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹1199</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹2,000</small>   46% off</p>
   <br>
   <a href="time.html" ><button href="time.html" class="btn  button1 btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button></a>
  
 
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="javascr.jpeg" class="card-img-top" alt="...">
  <div class="card-body">

   <p class="card-title" id="pyfor">The Complete JavaScript From Zero to Expert!</p>
    <bold style="font-family:verdana;">Instructor:Dr Angela</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:11 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹2000</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹4,799</small>   52% off</p>
   <br>
   <a href="config3.php" ><button  class="btn button1 btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button></a>

  
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="game.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Ultimate Guide to Game Development with Unity</p>
    <bold style="font-family:verdana;">Instructor:Jose Portilla</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:8 </small></p>
 
   <img src="stars.jpg" style="width:43%; height: 8%; object-fit: contain;">
   <p style="font-family: verdana;font-size:15px;">2170 students</p>
 
   <a href="time.html" ><button  class="btn  button1 btn-primary position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    Join
  </div> 
     <span class="bas position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button></a>
   
  </div>
</div>
</div>
 
</div>
</section>
<br>
<br>
<section>
  <h3 id="resource">Free Resources</h3>
  <br>
  <div class="video1">
    <div class="vid">
     <p>Check Out Our latest Demo  <i class="fa fa-brands fa-youtube fa-fade hii" style="color: #fd0808;"></i> video for an No code development which covers from scratch to advance by Mr.Alan</p>
   </div>
    <div class="vid1" style="margin-left:1%;">
      
    <iframe width="400" height="300"
src="https://www.youtube.com/embed/yFAshHZX6jE">

</iframe>


    </div>
  </div>
  <section>
    <br>
    <br>
    
      <h3>Available courses</h3>
      <div>
        <div id="toggle">
     <section class="section">
        <div class="container">
            <div class="section-cards">
                <div class="section-card">
                    <span>1</span>
                    <h2>Learn HTML Basics</h2>
                    <p>HTML and CSS course is designed to teach students the fundamentals of creating visually appealing and functional web pages using the latest web technologies.</p>
                    <a href="config3.php">read more</a>
                </div>
                <div class="section-card">
                    <span>2</span>
                    <h2>Javascript for beginners</h2>
                    <p>Have a strong grasp of core JavaScript fundamentals.
Write professional JavaScript code like a pro</p>
                    <a href="config3.php">read more</a>
                </div>
                <div class="section-card">
                    <span>3</span>
                    <h2>Learn Frameworks</h2>
                    <p>Develop the necessary ReactJS base to learn more advanced concepts in the future.
Ace Web Development and ReactJS technical interviews with ease.</p>
                    <a href="time.html">read more</a>
                </div>
            </div>
        </div>
    </section>

</div>
    </div>
    
  </section>
 
 

   <h5>Made with <i class="fa fa-heart fa-bounce" style="color: #f91521;"></i> in India</h5> 
   <br>
 
     <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="skill2.png" alt="Homeverse logo" class="image1">
          </a>

          <p class="secton-text">
            SkillGo is a professional  that advances the Learning technology knowledge and information technology.
          </p>

         

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/iete.org" target="_blank" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.linkedin.com/school/iete/" target="_blank" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@ieteaitr7814" target="_blank" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box hello">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Community</p>
            </li>

            <li>
              <a href="#" class="footer-link">About</a>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

         

            <li>
              <a href="#" class="footer-link">Locations Map</a>
            </li>
            <li>
            <a href="tel:+0123456789" class="footer-link">
                044 2835 0773
              </a>
            </li>


          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            

            <li>
              <a href="#why" class="footer-link">FAQ</a>
            </li>

            <li>
              <a href="contact.html" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="time.html" class="footer-link">Events</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title"> Useful Links </p>
            </li>

            <li>
              <a href="#" class="footer-link">Home Page</a>
            </li>

            <li>
              <a href="#why" class="footer-link">About Us</a>
            </li>

            <li>
              <a href="time.html" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="time.html" class="footer-link">Careers</a>
            </li>

            

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom" id="bottom">
      <div class="container">

        <p class="copyright">
          © Copyright <span style="color:  hsl(9, 100%, 62%);">SkillGo </span>Tirunelveli. All Rights Reserved.
        </p>

      </div>
    </div>

  </footer>
 <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 260"> 
<path fill="#0099ff" fill-opacity="1" d="M0,64L1440,224L1440,320L0,320Z"></path>
</svg>  -->




	

</div> 

</body>
</html>