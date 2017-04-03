<html>
<head>
  
<meta charset="utf-8"/>
  
<title>Hello</title>
<style>
  input{
  	border:1px solid #000;
  	font-size: 2em;
  	width:100px;
  	box-shadow:2px 2px 8px #000;
  }
  #a{background:#faa;} 
  #b{background:#afa;} 
</style>

<script>
 function process(){
   c.value = parseInt(a.value) + parseInt(b.value);
 }


</script>

</head>
<body>
  
<input id="a" size=5>
+
<input id="b" size=5>
=
<input id="c" size=5>
<button onclick="process()">OK</button>

<canvas width=800 height=300 id='cv'>
</canvas>

<script>
 var ctx = cv.getContext("2d");
 for(var i=0;i<100;i+=5){
   ctx.rect(20+i,20+i,150,100);
 }
 ctx.stroke(); 
</script>
</body>
</html>









