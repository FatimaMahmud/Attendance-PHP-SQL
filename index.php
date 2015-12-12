<head>

   <style>
                
                body {
				background-color: #eee;
                    margin:0px;
                    font-family:Verdana, Arial, helvetica, sans-serif;
                    font-size:12px;
                }

                span {
                    font-size:12px;
                }

  </style>
  <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
            xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
														if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
															document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
														}
													};
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}

function showUser1(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
            xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
														if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
															document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
														}
													};
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}

function showUser2(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
            xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
														if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
															document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
														}
													};
        xmlhttp.open("GET","getuser2.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUser3(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
            xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
														if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
															document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
														}
													};
        xmlhttp.open("GET","getuser3.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
    <title>
      Lab10
    </title>

  </head>

  <h2>ATTENDANCE MAINTAINACE</h2>
  <div  ng-app="" >

 
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  </div>

</head>
<body>
<form>
View all users: <br><br>
<input type = "button" value = "View" name="user" onclick="showUser2(this.value)">

</form>

<br><br><br>
--------------------------------------------------------------------------------
<br><br><br>
<form>
Allow the student to view all of his attendance, only: <br><br>
<select name="attendance" onchange="showUser(this.value)">
  <option value="1">---</option>
  <option value="2">2413</option>
  <option value="4">3143</option>
  <option value="1">1123</option>
  <option value="2">4355</option>
  <option value="4">5667</option>
  <option value="1">1533</option>
  <option value="2">8984</option>
  <option value="4">5233</option>
  </select>
</form>
<br><br><br>
--------------------------------------------------------------------------------
<br><br><br>
<form>
Choose the option to view all students or teachers or admins: <br><br>
<select name="user" onchange="showUser1(this.value)">
  <option value="1">Students</option>
  <option value="2">Teachers</option>
  <option value="3">Admin</option>
  </select>
</form>
<br><br><br>
--------------------------------------------------------------------------------
<br><br><br>

<form>
Allow the teacher to view all previous, next and the current session.: <br><br>
<input type = "button" value = "View" name="attendance" onclick="showUser3(this.value)">

</form>

<br><br><br>
--------------------------------------------------------------------------------

<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>