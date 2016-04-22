		<section class="content-admin">

			<h1 class="titre"><?= $titre ?></h1>

			<div class="succes">
				<?php echo $succes;?>
			</div>

			<div class="erreur">
				<?php echo validation_errors(); ?>
				<?php echo $error;?>
			</div>

			<?php
				$faq_id = $faq[0]['idFaq'];
			?>
				
			<?php echo form_open_multipart('admin/faq/update/'.$faq_id, $attributs); ?>

				<label for="question">Question</label>
				<input type="input" name="question" placeholder="Quel est la couleur du cheval blanc d'Henry IV" value="<?= $faq[0]['question'] ?>"/><br />

				<label for="reponse">reponse</label>
				<textarea name="reponse" placeholder="La couleur du cheval est blanche"><?= $faq[0]['reponse'] ?></textarea><br />

				<input type="submit" class="button" name="submit" value="Mettre à jour la question" />

			</form>

		</section>