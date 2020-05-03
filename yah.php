<?php
     session_start();
		$connexion = mysqli_connect("127.0.0.1", "root", "aucun", "sys");

			if(isset($_POST['as'])) {
			$as1 = intval($_POST['as1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $as1;
			$total += $as1;
			mysqli_query($connexion, "UPDATE yahtzee SET uno='$as1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

		if(isset($_POST['deux'])) {
			$deux1 = intval($_POST['deux1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $deux1;
			$total += $deux1;
			mysqli_query($connexion, "UPDATE yahtzee SET deux='$deux1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['trois'])) {
			$trois1 = intval($_POST['trois1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $trois1;
			$total += $trois1;
			mysqli_query($connexion, "UPDATE yahtzee SET trois='$trois1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}
			if(isset($_POST['quatre'])) {
			$quatre1 = intval($_POST['quatre1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $quatre1;
			$total += $quatre1;
			mysqli_query($connexion, "UPDATE yahtzee SET quatre='$quatre1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}
			if(isset($_POST['cinq'])) {
			$cinq1 = intval($_POST['cinq1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $cinq1;
			$total += $cinq1;
			mysqli_query($connexion, "UPDATE yahtzee SET cinq='$cinq1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}
			if(isset($_POST['six'])) {
			$six1 = intval($_POST['six1']);
			$haut = intval($_POST['totalsectionhaute']);
			$total = intval($_POST['total']);
			$haut += $six1;
			$total += $six1;
			mysqli_query($connexion, "UPDATE yahtzee SET six='$six1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['brelan'])) {
			$brelan1 = intval($_POST['brelan1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $brelan1;
			$total += $brelan1;
			mysqli_query($connexion, "UPDATE yahtzee SET brelan='$brelan1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['carre'])) {
			$carre1 = intval($_POST['carre1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $carre1;
			$total += $carre1;
			mysqli_query($connexion, "UPDATE yahtzee SET carre='$carre1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['full'])) {
			$full1 = intval($_POST['full1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $full1;
			$total += $full1;
			mysqli_query($connexion, "UPDATE yahtzee SET full='$full1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['petitesuite'])) {
			$petitesuite1 = intval($_POST['petitesuite1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $petitesuite1;
			$total += $petitesuite1;
			mysqli_query($connexion, "UPDATE yahtzee SET petitesuite='$petitesuite1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['grandesuite'])) {
			$grandesuite1 = intval($_POST['grandesuite1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $grandesuite1;
			$total += $grandesuite1;
			mysqli_query($connexion, "UPDATE yahtzee SET grandesuite='$grandesuite1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['yahtzee'])) {
			$yahtzee1 = intval($_POST['yahtzee1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $yahtzee1;
			$total += $yahtzee1;
			mysqli_query($connexion, "UPDATE yahtzee SET yahtzee='$yahtzee1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

			if(isset($_POST['chance'])) {
			$chance1 = intval($_POST['chance1']);
			$bas = intval($_POST['totalsectionbasse']);
			$total = intval($_POST['total']);
			$bas += $chance1;
			$total += $chance1;
			mysqli_query($connexion, "UPDATE yahtzee SET chance='$chance1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
			echo mysqli_error($connexion);
		}

?>
