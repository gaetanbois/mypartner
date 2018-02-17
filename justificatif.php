<?php
	
	$title = 'Envoyez votre justificatif';
	require('html/entete.php');
?>

<body>
<div class="row">
	<div class="offset-md-2 col-md-8">
		<div class="container">
			<h2 class="justif-title">Vos tickets</h2>
			<div class="offset-md-2 col-md-8">
				N'oubliez pas pour que vous puissiez être remboursé, il vous faut :
				<ul>
					<li>
						Avoir fait un achat chez un de nos commerces partenaires
					</li>
					<li>
						Avoir récupéré votre ticket de caisse tamponné "My Partner"
					</li>
					<li>
						Avoir mis votre Nom et prénom
					</li>
					<li>
						Et nous le joindre via votre espace personnel
					</li>
				</ul>
			</div>
			<form action="src/SaveJustificatif.php" method="post" class="form-control" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row justificatif-row">
						<label for="nom_justificatif" class="col-md-3 control-label justificatif-form">
							Nom
						</label>
						<div class="col-md-3">
							<input type="text" name="nom" placeholder="Indiquez votre nom" class="form-control"
								   id="nom_justificatif" required="required"/>
						</div>
						<label for="prenom_justificatif" class="col-md-1 control-label justificatif-form">
							Prénom
						</label>
						<div class="col-md-5">
							<input type="text" name="prenom" placeholder="Indiquez votre prénom" class="form-control"
								   id="prenom_justificatif" required="required"/>
						</div>
					</div>
					<div class="row justificatif-row">
						<label for="email_justificatif" class="col-md-3 control-label justificatif-form">
							Email
						</label>
						<div class="col-md-9">
							<input type="email" name="email" placeholder="Indiquez votre email" class="form-control"
								   id="email_justificatif"	 required="required"/>
						</div>
					</div>
					<div class="row justificatif-row">
						<label for="association_justificatif" class="col-md-3 control-label justificatif-form">
							Association sportive
						</label>
						<div class="col-md-9">
							<input type="text" name="association" placeholder="Association sportive" class="form-control"
								   id="email_justificatif" required="required">
						</div>
					</div>
					<div class="row justificatif-row">
						<label for="fichier_justificatif" class="col-md-3 control-label justificatif-form">
							Votre facture
						</label>
						<div class="col-md-9">
							<span class="btn btn-default btn-file">
								<input type="file" name="fichier" id="fichier_justificatif" required="required">
							</span>
						</div>
					</div>
					<div class="row justificatif-row">
						<div class="offset-md-5 col-md-2">
							<button type="submit" class="submit btn btn-info">J'envoie mon ticket</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>