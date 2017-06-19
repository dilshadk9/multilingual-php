<?php
require_once 'config.php';
if(empty($_GET['lang'])) {
	ob_clean();
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo t('pagetitle'); ?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-8">
	    	<form role="form" action="" method="post">
		        <br style="clear:both">
		                    <h3 style="margin-bottom: 25px; text-align: center;"><?php echo t('formtitle'); ?></h3>
		    				<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo t('name'); ?>" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="<?php echo t('email'); ?>" required>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" id="mobile" name="mobile" placeholder="<?php echo t('mobileno'); ?>" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo t('subject'); ?>" required>
							</div>
		                    <div class="form-group">
		                    <textarea class="form-control" type="textarea" id="message" placeholder="<?php echo t('message'); ?>" maxlength="140" rows="7"></textarea>
		                    </div>	
		        				<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"><?php echo t('submitbtn'); ?></button>
		        </form>
	    </div>
	    <div class="col-sm-4 text-right" style="padding: 10px;">
	    	<select name="lang" id="lang" style="width: 200px;height: 25px;">
	    		<option value="en" <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'selected' : ''; ?>>English</option>
	    		<option value="fr" <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'fr') ? 'selected' : ''; ?>>French</option>
	    		<option value="es" <?php echo (isset($_GET['lang']) && $_GET['lang'] == 'es') ? 'selected' : ''; ?>>Spanish</option>
	    	</select>
	    </div>
	  </div>
	  <?php if(isset($_POST['submit'])) { ?>
	  <div>
	  	<h1 class="btn-success text-center"><?php echo t('submitmsg'); ?></h1>
	  </div>
	  <?php } ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#lang').on('change', function() {
				var lang = $(this).val();
				window.location = 'form.php?lang='+lang;
			});
		});
	</script>
</body>
</html>

