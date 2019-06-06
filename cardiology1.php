<h1>Cardiology</h1>

<style>	
body
{
	background-image:url("pat16.jpg");
	height:100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<body>
<div style="color:#ff0055;font-size: 30px;"></div>
<form action="save.php" method="post">
  
  <p class="p3">
  <h3 align="left"> Enter Patient's Name:  <input type="text" name="name1" required><br><br>
  <h3>Select the doctor ...</h3>

<div>

<input type="radio" name="dr" value="Dr.Suresh   MBBS.,DNB  (Arrival Time)10:00 A.M-12:00 P.M "required />

<label>Dr.Suresh   MBBS,DNB  (Arrival Time)10:00 A.M-12:00 P.M </label>

</div>
<div>

<input type="radio" name="dr"  value="DR. S Selvamani  MBBS, DNB  (Arrival Time)12:00 P.M-02:00 P.M " />

<label>DR. S Selvamani  MBBS, DNB  (Arrival Time)12:00 P.M-02:00 P.M  </label>

</div>

<div>

<input type="radio" name="dr" value="Dr Vivek Bose  MBBS, DM  (Arrival Time)06:00 P.M-08:00 P.M " />

<label>Dr Vivek Bose  MBBS, DM  (Arrival Time)06:00 P.M-08:00 P.M </label>

</div>

<div>

<input type="radio" name="dr" value="Dr. Devagi MBBS, DM (Arrival Time)06:00 A.M-08:00 A.M " />

<label>Dr. Devagi MBBS, DM  (Arrival Time)06:00 A.M-08:00 A.M </label>

</div>

 </p>
  <br>
  <br>
  <center><button type="submit" name="submit" class="button_1">Submit</button> <button>Cancel</button><br></form><br>
   <form action="home.php" method="post">
  <button type ="submit" name="signout" class="btn-login" >Signout</button>
</center>
</form>