<html>
<head>
  
<meta charset="utf-8"/>
  
<title>Hello</title>

<script>
 function validate(){
	if(fname.value.length<3){
	  alert("กรุณากรอกชื่อ");
	  return false;
	}
    return true;
 }
</script>

</head>
<body>
  
<div>
แบบสอบถาม
</div>


<form method="post" action="register.php"
 onsubmit="return validate()";
>
<table>
<tr><td>ชื่อ <td>
<input id='fname' name='fname' type='text' size=15 maxlength=20 onclick='fclick(this)'
 onchange='msg.innerHTML="สวัสดี "+this.value'
>

<tr><td>นามสกุล <td><input name='lname' size=15 onclick='fclick(this)'>
<tr><td>เพศ <td>
 <input name='g' type='radio' value="m"> ชาย
 <input name='g' type='radio' value="f"> หญิง
<tr><td>จังหวัด<td>
<select name='city'>
<option>ขอนแก่น
<option>อุดร
<option>ร้อยเอ็ด
<option>มหาสารคาม
<option>หนองคาย
</select>
<tr><td>สีที่ชอบ
<td><input type="color" name="color">
<tr><td>วันเกิด
<td><input type="date" name="bdate">
<input type="url" name="btime">
<tr><td>รายได้ต่อเดือน
<td><input type="number" name="income" step=1000 min=1000 max=2000000 require>


</table>
<input type='submit'>
</form>
<span id='msg'></span>

<script src='main.js'></script>
</body>
</html>









