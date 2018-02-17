<?php
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$association = $_POST['association'];
	$extension = checkExtension();
	if (!$extension) {
		die ('extension incorrecte');
	} else if(!checkSize()) {
		die('Votre fichier ne doit pas dépasser 3mo');
	}
	
	// TODO replace with server path
	$chemin = '/Users/qlassalle/Desktop/facture_' . $prenom . '_' . $nom . '_' .
		date('d-m-Y H:i:s') . '.' . $extension;
	move_uploaded_file($_FILES['fichier']['tmp_name'], $chemin);
	die();
	
	
	function checkExtension()
	{
		$extensions_valides = ['jpg', 'jpeg', 'pdf', 'png'];
		$extension_upload = strtolower(substr(strrchr($_FILES['fichier']['name'], '.'), 1));
		if (!in_array($extension_upload, $extensions_valides)) {
			return false;
		}
		return $extension_upload;
	}
	
	// ensure that file is not bigger than 3 mo
	function checkSize() {
		return $_FILES['fichier']['size'] / 100 > 3200;
	}