<?php include 'dist/includes/mail.php'; ?>
<?php include 'dist/includes/header.php'; ?>

	<div class="text-box" style="display: flex; flex-basis: 100%; text-align: center; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
		<?php if(!empty($message)) echo $message; ?>
	</div>

<script>
	setTimeout(function () {
	   window.location.href = "/";
	}, 5000);
</script>

<?php include 'dist/includes/footer.php' ?>
