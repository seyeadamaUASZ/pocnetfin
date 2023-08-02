<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <style media="screen">
    body {
padding: 100px;
background-color: #98AFC7;
}

.parent {
position: relative;
margin: auto;
margin-top: 50px;
}

.circle {
width: 420px;
height: 300px;
border-radius: 50%;
background-color: #6495ED;;
display: flex;
justify-content: center;
align-items: center;
}

* {
box-sizing: border-box;
}

.image-holder {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
/*animation: rotate linear 5s infinite forwards;*/
animation-name: rotate;
animation-duration: 5s;
animation-iteration-count: infinite;
animation-timing-function: linear;
animation-fill-mode: forwards;
}

.image-holder:hover {
animation-play-state: paused;
}

.image-holder img {
position: absolute;
width: 50px;
height: 50px;
border-radius: 50%;
}

.image-holder img:nth-child(1) {
top: -15px;
left: -15px;
}

.image-holder img:nth-child(3) {
top: -15px;
right: -15px;
}

.image-holder img:nth-child(5) {
bottom: -15px;
right: -15px;
}

.image-holder img:nth-child(7) {
bottom: -15px;
left: -15px;
}

.image-holder img:nth-child(2) {
top: -50px;
left: 50%;
transform: translateX(-50%);
}

.image-holder img:nth-child(4) {
top: 50%;
right: -50px;
transform: translateY(-50%);
}

.image-holder img:nth-child(6) {
bottom: -50px;
left: 50%;
transform: translateX(-50%);
}

.image-holder img:nth-child(8) {
top: 50%;
left: -50px;
transform: translateY(-50%);
}

@keyframes rotate {
0% {
  transform: rotate(0deg);
}
100% {
  transform: rotate(360deg);
}
}
.text {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
color: black;
}
    </style>
  </head>
  <body>
    <div class="">
      <a href="index.html" style="color:black;"> < Accueil </a>
    </div>

<div class="container">
  <div class="row">
    <div class="parent">
      <div class="circle">
        <div class="text">
           <p style="text-align:justify; font-size:16px; width:350px;"> Des hommes et des femmes qui ont pour passion et mission de contribuer au développement des individus et des organisations sur le continent africain !</p>
        </div>

      </div>
      <div class="image-holder">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
        <img  src="assets/images/image1.png" alt="" height="300px;" width="100px;">
      </div>
    </div>
  </div>
</div>
  </body>

  <script type="text/javascript">
  var images = document.getElementsByTagName('img');
var sampleText = document.getElementById('sample-text');
for (var i = 0; i < images.length; i++) {
//images[i].addEventListener("mouseover", updateName)
}

function updateName() {
sampleText.innerHTML = "Des hommes et des femmes qui ont pour passion et mission de contribuer au développement des individus et des organisations sur le continent africain !";
}
  </script>
</html>
