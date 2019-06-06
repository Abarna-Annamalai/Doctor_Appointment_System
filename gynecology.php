<h1>Gynecology</h1>

<style>	
body
{
	background-image:url("pat21.jpg");
	height:100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<body>
<div style="color:#ff0055;font-size: 30px;"></div>
<form action="save5.php" method="post">
  
  <p class="p3">
  <h3 align="left">Enter Patient's Name:  <input type="text" name="name1" required><br><br>
  <h3> Select the doctor ...</h3>

<div>

<input type="radio" name="dr" value=" DR. S. PADMA, MD, DNB (Arrival Time)10:00 A.M-12:00 P.M "required />

<label> DR. S. PADMA, MD, DNB (Arrival Time)10:00 A.M-12:00 P.M  </label>

</div>
<div>

<input type="radio" name="dr"  value="DR. HEMALATHA M. MD, DGO  (Arrival Time)12:00 P.M-02:00 P.M" />

<label>DR. HEMALATHA M. MD, DGO  (Arrival Time)12:00 P.M-02:00 P.M </label>

</div>

<div>

<input type="radio" name="dr" value=" DR. HEMA SIVAKUMAR, MD, DGO, DNB  (Arrival Time)06:00 P.M-08:00 P.M" />

<label> DR. HEMA SIVAKUMAR, MD, DGO, DNB (Arrival Time)06:00 P.M-08:00 P.M</label>

</div>


 </p>
  <br>
  <br>
  <center><button type="submit" name="submit" class="button_1">Submit</button> <button>Cancel</button><br></form>
   <form action="home.php" method="post">
  <input type="submit" value="signout">
</center>
</form>