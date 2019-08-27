<html>
<body background="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/414367/910/642/m2/fpnw/wm1/o2kop3qx2mkojxz7lis5qk37g73h5raqzj4hafxbsvonyndnhducpmhxgsqzfkkl-.jpg?1427017648&s=a514c80cfeb25ad8239acac69811a044" align="left">
<form name="loginForm" method="post" action="welcome.php">
<br>
<br>
<br>
<br>
<br>
<br><center>Username <input type="text" name="userid"></br><center>
<br><center>Password <input type="password" name="pwd"></br><center>
 <input type="reset">
<input type="submit" onclick="return check(this.form)" value="Login">


<form>
<script language="javascript">
function check(form)
{

if(form.userid.value == "D.M.Prasanth" && form.pwd.value == "duraimani1234567890")
{
        return true;
}
else
{
        alert("Error Password or Username")
        return false;
}
}
</script>



</form>




</body>
</html>  


