<?php
		session_start();
		include ('yah.php');
		$rq = "SELECT * FROM yahtzee WHERE id ='{$_SESSION['pseudo']}'";
		$rst = mysqli_query($connexion, $rq);
		$search = mysqli_fetch_array($rst);

?>


<!DOCTYPE html>
<html>
      <head>
        <title>Yahtzee</title>
        <meta charset="utf-8" />
        <link rel="icon" type="image/jpeg" href="yah2.jpeg" />
        <link rel="stylesheet" type="text/css" href="main.css" />

		<script src="yah.js"></script>
    </head>

    <body>

 <div id="test"> <?php echo $_SESSION['pseudo'];?>  </div>
	<form method="post">
     <img  class="yah2" src="yah2.jpeg">
    <img  class="yah" src="yah.jpeg">
    <div class ="phaute">
      <input type="submit"  id="1" name="as" value="As" <?php if($search['uno'] != '') {?> disabled <?php } ?>/>
		<input type="text"class="in2"  name="as1" id="as" value="<?php if($search['uno'] != '') { echo $search['uno'];}?>"readonly="readonly"/> </br>

      <input type="submit" id="2" name="deux" value="Deux" <?php if($search['deux'] != '') {?> disabled <?php } ?> />
		<input type="text" class="in2" name="deux1" id="deux" value="<?php if($search['deux'] != '') { echo $search['deux'];}?>" readonly="readonly"/> </br>

          <input type="submit" id="3" name="trois" value="Trois" <?php if($search['trois'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="trois1" id="trois" value="<?php if($search['trois'] != '') { echo $search['trois'];}?>" readonly="readonly"/> </br>

          <input type="submit"  id="4" name="quatre" value="Quatre" <?php if($search['quatre'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="quatre1" id="quatre" value="<?php if($search['quatre'] != '') { echo $search['quatre'];}?>" readonly="readonly"/> </br>

          <input type="submit"  id="5" name="cinq" value="Cinq" <?php if($search['cinq'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="cinq1" id="cinq" value="<?php if($search['cinq'] != '') { echo $search['cinq'];}?>" readonly="readonly"/> </br>

          <input type="submit" id="6"  name="six" value="Six" <?php if($search['six'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="six1" id="six" value="<?php if($search['six'] != '') { echo $search['six'];}?>" readonly="readonly"/> </br>

		 <input type="submit" id="phaut"  name="totalhaut" value="Total section Haute" />
		<input type="text" class="in2" name="totalsectionhaute" value="<?php echo $search['haut'];?>" readonly="readonly"/> </br>
    </div>
    <div class="pbasse">
          <input type="submit"  id="bre" name="brelan" value="Brelan" <?php if($search['brelan'] != '') {?> disabled <?php } ?> />
		<input type="text" class="in2" name="brelan1" id="brelan" value="<?php if($search['brelan'] != '') { echo $search['brelan'];}?>" readonly="readonly"/> </br>


          <input type="submit" id="car" name="carre" value="Carré" <?php if($search['carre'] != '') {?> disabled <?php } ?> />
		<input type="text"  class="in2" name="carre1" id="carre" value="<?php if($search['carre'] != '') { echo $search['carre'];}?>" readonly="readonly"/> </br>


          <input type="submit" id="ful" name="full" value="Full"  <?php if($search['full'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="full1" id="full" value="<?php if($search['full'] != '') { echo $search['full'];}?>" readonly="readonly"/> </br>


          <input type="submit" id="pet" name="petitesuite" value="Petite suite"  <?php if($search['petitesuite'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="petitesuite1" id="petitesuite" value="<?php if($search['petitesuite'] != '') { echo $search['petitesuite'];}?>" readonly="readonly"/> </br>


          <input type="submit"  id="gra" name="grandesuite" value="Grande Suite" <?php if($search['grandesuite'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2"name="grandesuite1" id="grandesuite" value="<?php if($search['grandesuite'] != '') { echo $search['grandesuite'];}?>" readonly="readonly"/> </br>


          <input type="submit"  id="yah" name="yahtzee" value="Yahtzee"  <?php if($search['yahtzee'] != '') {?> disabled <?php } ?>/>
		<input type="text" class="in2" name="yahtzee1" id="yahtzee" value="<?php if($search['yahtzee'] != '') { echo $search['yahtzee'];}?>" readonly="readonly"/> </br>

          <input type="submit"  id="cha" name="chance" value="Chance" <?php if($search['chance'] != '') {?> disabled <?php } ?>/>
		<input type="text"class="in2"  name="chance1" id="chance" value="<?php if($search['chance'] != '') { echo $search['chance'];}?>" readonly="readonly"/> </br>

	<input type="submit" id="pabasse"  name="totalbas" value="Total section Basse" />
     <input type="text" class="in2" name="totalsectionbasse" value="<?php echo $search['bas'];?>" readonly="readonly"/> </br>

		<input type="submit" id="total"  name="total" value="Total" />
     <input type="text" class="in2"name="total" value="<?php echo $search['total'];?>" readonly="readonly"/> </br>
    </div>
	</form>
      <div id='les_des' class = "dés" >
		<span id="des1" class="des" onclick='desactiver("des1")' value="" ><img   src="1.gif"/></span>
		<span id="des2" class="des" onclick='desactiver("des2")' value="" ><img  src="2.gif"/></span>
		<span id="des3" class="des" onclick='desactiver("des3")' value="" ><img src="3.gif"/></span>
		<span id="des4" class="des" onclick='desactiver("des4")' value=""><img src="4.gif"/></span>
		<span id="des5" class="des" onclick='desactiver("des5")' value="" ><img src="5.gif"/></span>
        <button onclick='Des()'>Lancer</button>
         <div >Chance: <span id='Compteur'>3</span></div>
      </div>



    </body>

</html>

