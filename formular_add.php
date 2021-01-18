<?php
	include 'includes/session.php';
	$slug = $_GET['category'];
	$conn = $pdo->open();
	$id = $_Get['id'];

	$photo = $_FILES['photo']['name'];
		if(!empty($photo)){
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/fotokopje_karte_identiteti/'.$photo);
			$filephoto = $photo;
		}
		else{
			$filephoto = $user['photo'];
		}

	$vertetim = $_FILES['vertetim']['name'];
		if(!empty($vertetim)){
			move_uploaded_file($_FILES['vertetim']['tmp_name'], 'images/certefikate_pronesie/'.$vertetim);
			$filevertetim = $vertetim;
		}
		else{
			$filevertetim = $user['photo'];
		}

	$fam = $_FILES['fam']['name'];
		if(!empty($fam)){
			move_uploaded_file($_FILES['fam']['tmp_name'], 'images/certefikate_familjare/'.$fam);
			$filefam = $fam;
		}
		else{
			$filefam = $user['photo'];
		}
	$papune = $_FILES['papune']['name'];
		if(!empty($papune)){
			move_uploaded_file($_FILES['papune']['tmp_name'], 'images/vertetim_punekerkues/'.$papune);
			$filepapun = $papune;
		}
		else{
			$filepapun = $user['photo'];
		}
	$jetim = $_FILES['jetim']['name'];
		if(!empty($jetim)){
			move_uploaded_file($_FILES['jetim']['tmp_name'], 'images/status_jetim/'.$jetim);
			$filejetim = $jetim;
		}
		else{
			$filejetim = $user['photo'];
		}
	$trajnim = $_FILES['trajnim']['name'];
		if(!empty($trajnim)){
			move_uploaded_file($_FILES['trajnim']['tmp_name'], 'images/trajtim_ne_institucione/'.$trajnim);
			$filetrajnim = $trajnim;
		}
		else{
			$filetrajnim = $user['photo'];
		}
	$mbrojtje = $_FILES['mbrojtje']['name'];
		if(!empty($mbrojtje)){
			move_uploaded_file($_FILES['mbrojtje']['tmp_name'], 'images/urdher_mbrojtje/'.$mbrojtje);
			$filembrojtje = $mbrojtje;
		}
		else{
			$filembrojtje = $user['photo'];
		}
	$fletdrejtim = $_FILES['fletdrejtim']['name'];
		if(!empty($fletdrejtim)){
			move_uploaded_file($_FILES['fletdrejtim']['tmp_name'], 'images/KMCAP/'.$fletdrejtim);
			$filefletdrejtim = $fletdrejtim;
		}
		else{
			$filefletdrejtim = $user['photo'];
		}
	$epikriza = $_FILES['epikriza']['name'];
		if(!empty($epikriza)){
			move_uploaded_file($_FILES['epikriza']['tmp_name'], 'images/epikrize/'.$epikriza);
			$fileepikriza = $epikriza;
		}
		else{
			$fileepikriza = $user['photo'];
		}
	$kerkese = $_FILES['kerkese']['name'];
		if(!empty($kerkese)){
			move_uploaded_file($_FILES['kerkese']['tmp_name'], 'images/kerkese/'.$kerkese);
			$filekerkese = $kerkese;
		}
		else{
			$filekerkese = $user['photo'];
		}
	$tip = $_FILES['tip']['name'];
		if(!empty($tip)){
			move_uploaded_file($_FILES['tip']['tmp_name'], 'images/tip/'.$tip);
			$filetip = $tip;
		}
		else{
			$filetip = $user['photo'];
		}

		if(isset($_SESSION['user'])){
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$row = $stmt->fetch();
		if(isset($_POST['formularAdd'])){
			$emri = $_POST['emri'];
			$mbiemri = $_POST['mbiemri'];
			$nid=$_POST['nid'];
			$bname=$_POST['bname'];
			$bday=$_POST['bday'];
			$test=$_POST['test'];
			$adresa=$_POST['adresa'];
			$qyteti=$_POST['qyteti'];
			$zip=$_POST['zip'];
			$femije=$_POST['femije'];
			$pagese=$_POST['pagese'];
			$njesi_banimi=$_POST['njesi_banimi'];
			$toke=$_POST['toke'];
			$neto=$_POST['neto'];
			$shpenzime=$_POST['shpenzime'];
			$photo=$_FILES['photo']['name'];
			$vertetim=$_POST['vertetim']['name'];
			$fam=$_POST['fam']['name'];
			$papune=$_POST['papune']['name'];
			$jetim=$_POST['jetim']['name'];
			$trajnim=$_POST['trajnim']['name'];
			$mbrojtje=$_POST['mbrojtje']['name'];

			try{
				$stmt = $conn->prepare("INSERT INTO formulari (user_id, category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, nr_femijeve, pension, banesa, toke, neto,
					shpenzime, fotokopje_nid, certefikate_pron, certifikate_fam, punkerkues, sts_jetim, vertetim_trajnim, urdher_mbrojtje )
					 VALUES (:id, :slug,:emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :femije, :pagese, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :vertetim, :fam, :papune, :jetim, :trajnim, :mbrojtje)");
				$stmt->execute(['id'=>$user['id'], 'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
			'femije'=>$femije, 'pagese'=>$pagese, 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
		'vertetim'=>$filevertetim, 'fam'=>$filefam, 'papune'=>$filepapun, 'jetim'=>$filejetim, 'trajnim'=>$filetrajnim, 'mbrojtje'=>$filembrojtje]);
				$_SESSION['success'] = 'Formular added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else if(isset($_POST['jetimet'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$nid=$_POST['nid'];
		$bname=$_POST['bname'];
		$bday=$_POST['bday'];
		$test=$_POST['test'];
		$adresa=$_POST['adresa'];
		$qyteti=$_POST['qyteti'];
		$zip=$_POST['zip'];
		$njesi_banimi=$_POST['njesi_banimi'];
		$photo=$_FILES['photo']['name'];
		$papune=$_POST['papune']['name'];
		$jetim=$_POST['jetim']['name'];

		try{
			$stmt = $conn->prepare("INSERT INTO formulari (user_id, category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar,  banesa, fotokopje_nid, punkerkues, sts_jetim)
			 VALUES (:id, :slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :photo, :papune, :jetim)");
			$stmt->execute(['id'=>$user['id'], 'slug'=>$slug, 'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
		'njesi_banimi'=>$njesi_banimi, 'photo'=>$filephoto,'papune'=>$filepapun, 'jetim'=>$filejetim]);
			$_SESSION['success'] = 'Formular added successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

	$pdo->close();
	}
	else if(isset($_POST['viktimat'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$nid=$_POST['nid'];
		$bname=$_POST['bname'];
		$bday=$_POST['bday'];
		$test=$_POST['test'];
		$adresa=$_POST['adresa'];
		$qyteti=$_POST['qyteti'];
		$zip=$_POST['zip'];
		$njesi_banimi=$_POST['njesi_banimi'];
		$neto=$_POST['neto'];
		$shpenzime=$_POST['shpenzime'];
		$photo=$_FILES['photo']['name'];
	  $trajnim=$_POST['trajnim']['name'];


		try{
			$stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar,  banesa,neto,
				shpenzime, fotokopje_nid,vertetim_trajnim )
			 VALUES (:id, :slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :neto, :shpenzime, :photo, :trajnim)");
			$stmt->execute(['id'=>$user['id'], 'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
		'njesi_banimi'=>$njesi_banimi, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto, 'trajnim'=>$filetrajnim]);
			$_SESSION['success'] = 'Formular added successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

	$pdo->close();
	}
	 else if(isset($_POST['familje'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$nid=$_POST['nid'];
		$bname=$_POST['bname'];
		$bday=$_POST['bday'];
		$test=$_POST['test'];
		$adresa=$_POST['adresa'];
		$qyteti=$_POST['qyteti'];
		$zip=$_POST['zip'];
		$femije=$_POST['femije'];
		$pagese=$_POST['pagese'];
		$njesi_banimi=$_POST['njesi_banimi'];
		$toke=$_POST['toke'];
		$neto=$_POST['neto'];
		$shpenzime=$_POST['shpenzime'];
		$photo=$_FILES['photo']['name'];
		$vertetim=$_POST['vertetim']['name'];
		$fam=$_POST['fam']['name'];

		try{
			$stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, nr_femijeve, pension, banesa, toke, neto,
				shpenzime, fotokopje_nid, certefikate_pron, certifikate_fam)
				 VALUES (:id, :slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :femije, :pagese, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :vertetim, :fam)");
			$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
		'femije'=>$femije, 'pagese'=>$pagese, 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'vertetim'=>$filevertetim, 'fam'=>$filefam]);
			$_SESSION['success'] = 'Formular added successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

	$pdo->close();
	}
	else if(isset($_POST['prinderit'])){
	 $emri = $_POST['emri'];
	 $mbiemri = $_POST['mbiemri'];
	 $nid=$_POST['nid'];
	 $bname=$_POST['bname'];
	 $bday=$_POST['bday'];
	 $test=$_POST['test'];
	 $adresa=$_POST['adresa'];
	 $qyteti=$_POST['qyteti'];
	 $zip=$_POST['zip'];
	 $femije=$_POST['femije'];
	 $pagese=$_POST['pagese'];
	 $njesi_banimi=$_POST['njesi_banimi'];
	 $toke=$_POST['toke'];
	 $neto=$_POST['neto'];
	 $shpenzime=$_POST['shpenzime'];
	 $photo=$_FILES['photo']['name'];
	 $vertetim=$_POST['vertetim']['name'];
	 $fam=$_POST['fam']['name'];

	 try{
		 $stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, nr_femijeve, pension, banesa, toke, neto,
			 shpenzime, fotokopje_nid, certefikate_pron, certifikate_fam)
				VALUES (:user_id, :slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :femije, :pagese, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :vertetim, :fam)");
		 $stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
	 'femije'=>$femije, 'pagese'=>$pagese, 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'vertetim'=>$filevertetim, 'fam'=>$filefam]);
		 $_SESSION['success'] = 'Formular added successfully';

	 }
	 catch(PDOException $e){
		 $_SESSION['error'] = $e->getMessage();
	 }

	$pdo->close();
	}
	 else if(isset($_POST['viktima'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$nid=$_POST['nid'];
		$bname=$_POST['bname'];
		$bday=$_POST['bday'];
		$test=$_POST['test'];
		$adresa=$_POST['adresa'];
		$qyteti=$_POST['qyteti'];
		$zip=$_POST['zip'];
		$njesi_banimi=$_POST['njesi_banimi'];
		$photo=$_FILES['photo']['name'];
		$mbrojtje=$_POST['mbrojtje']['name'];

		try{
			$stmt = $conn->prepare("INSERT INTO formulari (user_id, category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, banesa,
			 fotokopje_nid, urdher_mbrojtje )
				 VALUES (:id, :slug,:emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :photo, :mbrojtje)");
			$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
		 'njesi_banimi'=>$njesi_banimi, 'photo'=>$filephoto, 'mbrojtje'=>$filembrojtje]);
			$_SESSION['success'] = 'Formular added successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

	$pdo->close();
	}
	  else if(isset($_POST['personat'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$nid=$_POST['nid'];
		$bname=$_POST['bname'];
		$bday=$_POST['bday'];
		$test=$_POST['test'];
		$adresa=$_POST['adresa'];
		$qyteti=$_POST['qyteti'];
		$zip=$_POST['zip'];
		$femije=$_POST['femije'];
		$pagese=$_POST['pagese'];
		$njesi_banimi=$_POST['njesi_banimi'];
		$toke=$_POST['toke'];
		$neto=$_POST['neto'];
		$shpenzime=$_POST['shpenzime'];
		$photo=$_FILES['photo']['name'];
		$fletdrejtim=['fletdrejtim']['name'];
		$fam=$_POST['fam']['name'];
		$epikriza=['epikriza']['name'];

		try{
			$stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, banesa, toke, neto,
				shpenzime, fotokopje_nid, fletdrejtim, certifikate_fam, epikriza )
				 VALUES (:id,:slug,:emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :fletdrejtim, :fam, :epikriza)");
			$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
		 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'fletdrejtim'=>$filefletdrejtim, 'fam'=>$filefam, 'epikriza'=>$fileepikriza]);
			$_SESSION['success'] = 'Formular added successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

	$pdo->close();
	}
	else if(isset($_POST['paraplegjiket'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$nid=$_POST['nid'];
	$bname=$_POST['bname'];
	$bday=$_POST['bday'];
	$test=$_POST['test'];
	$adresa=$_POST['adresa'];
	$qyteti=$_POST['qyteti'];
	$zip=$_POST['zip'];
	$njesi_banimi=$_POST['njesi_banimi'];
	$toke=$_POST['toke'];
	$neto=$_POST['neto'];
	$shpenzime=$_POST['shpenzime'];
	$photo=$_FILES['photo']['name'];
	$fletdrejtim=['fletdrejtim']['name'];
	$fam=$_POST['fam']['name'];
	$epikriza=['epikriza']['name'];

	try{
		$stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, banesa, toke, neto,
			shpenzime, fotokopje_nid, fletdrejtim, certifikate_fam, epikriza )
			 VALUES (:id,:slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :fletdrejtim, :fam, :epikriza)");
		$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
	 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'fletdrejtim'=>$filefletdrejtim, 'fam'=>$filefam, 'epikriza'=>$fileepikriza]);
		$_SESSION['success'] = 'Formular added successfully';

	}
	catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
	}
	else if(isset($_POST['tetraplegjiket'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$nid=$_POST['nid'];
	$bname=$_POST['bname'];
	$bday=$_POST['bday'];
	$test=$_POST['test'];
	$adresa=$_POST['adresa'];
	$qyteti=$_POST['qyteti'];
	$zip=$_POST['zip'];
	$njesi_banimi=$_POST['njesi_banimi'];
	$toke=$_POST['toke'];
	$neto=$_POST['neto'];
	$shpenzime=$_POST['shpenzime'];
	$photo=$_FILES['photo']['name'];
	$fletdrejtim=['fletdrejtim']['name'];
	$fam=$_POST['fam']['name'];
	$epikriza=['epikriza']['name'];

	try{
		$stmt = $conn->prepare("INSERT INTO formulari (user_id,category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, banesa, toke, neto,
			shpenzime, fotokopje_nid, fletdrejtim, certifikate_fam, epikriza )
			 VALUES (:id,:slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :fletdrejtim, :fam, :epikriza)");
		$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
	 'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'fletdrejtim'=>$filefletdrejtim, 'fam'=>$filefam, 'epikriza'=>$fileepikriza]);
		$_SESSION['success'] = 'Formular added successfully';

	}
	catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
	}
	else if(isset($_POST['invalidet'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$nid=$_POST['nid'];
	$bname=$_POST['bname'];
	$bday=$_POST['bday'];
	$test=$_POST['test'];
	$adresa=$_POST['adresa'];
	$qyteti=$_POST['qyteti'];
	$zip=$_POST['zip'];
	$njesi_banimi=$_POST['njesi_banimi'];
	$toke=$_POST['toke'];
	$neto=$_POST['neto'];
	$shpenzime=$_POST['shpenzime'];
	$photo=$_FILES['photo']['name'];
	$kerkese=['kerkese']['name'];
	$fam=$_POST['fam']['name'];
	$tip=['tip']['name'];

	try{
		$stmt = $conn->prepare("INSERT INTO formulari (user_id, category_name, emri, mbiemri, nid, emrib, ditelindja, gjinia, adresa, qyteti, kodi_postar, banesa, toke, neto,
			shpenzime, fotokopje_nid, kerkese, certifikate_fam, tip )
			 VALUES (:id, :slug, :emri, :mbiemri, :nid, :bname, :bday, :test, :adresa, :qyteti, :zip, :njesi_banimi, :toke, :neto, :shpenzime, :photo, :kerkese, :fam, :tip)");
		$stmt->execute(['id'=>$user['id'],'slug'=>$slug,'emri'=>$emri, 'mbiemri'=>$mbiemri, 'nid'=>$nid, 'bname'=>$bname, 'bday'=>$bday, 'test'=>$test, 'adresa'=>$adresa, 'qyteti'=>$qyteti, 'zip'=>$zip,
	'njesi_banimi'=>$njesi_banimi, 'toke'=>$toke, 'neto'=>$neto, 'shpenzime'=>$shpenzime, 'photo'=>$filephoto,
	'kerkese'=>$filekerkese, 'fam'=>$filefam, 'tip'=>$filetip]);
		$_SESSION['success'] = 'Formular added successfully';

	}
	catch(PDOException $e){
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Ploteso formularin';
	  var_dump("test");
		exit;
	}
}
	header('location: profile.php');
?>
