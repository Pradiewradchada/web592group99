<html>
<head>
  
<meta charset="utf-8"/>
  
<title>Hello</title>

<link href="http://www.twachi.net/webclass/themes/bootstrap/css/jquery-ui.min.css" rel="stylesheet" media="all">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.7.3/jquery-ui.min.js"></script>

</head>
<body>
  
<div>
TEST JQuery
</div>
<p>ทดสอบ 0</p>
<p style='position:absolute'>ทดสอบ 1</p>
<p>ทดสอบ 2</p>
<p>ทดสอบ 3</p>
<p>ทดสอบ 4</p>
<p>ทดสอบ 5</p>
<button id="b1">ซ่อน 1</button>
<button>ซ่อน 2</button>

<script>
 /* x = function(){
    document.write("HELLO");
  };
  
  function $(a){
    a();
  }
  */
 // y(function(){ document.write("ทดลอง"); });
  
  $(function(){
    $("#b1").button().click(function(){
	  $("p:odd").animate({left: '250px'});
	}); 
  });
  
</script>
</body>
</html>









