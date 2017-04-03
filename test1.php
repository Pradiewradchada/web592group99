<html> <head> 
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style> 
 h1{ background:#f55; } 
 #m1{ display:block; }
 #m2{ display:none; }

 @media screen and (max-width: 1000px){ 
    h1{ background:#0af; } 
	
 } 
 @media screen and (max-width: 800px){ 
    h1{ background:#0a0; } 
	#m1{ display:none; }
	#m2{ display:block; }
 } 
   
</style> 
</head> 
<body> 
   <h1>TEST CSS3 @media Rule</h1> 
   <div id='m1'>MENU1: home | game | help   
   </div>
   <div id='m2'>MENU2
   <ul><li>home<li>game<li>help</ul>
   </div>
</body> 
</html> 
