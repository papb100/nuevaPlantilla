
<br>
<form id="frmAlta">
	<div class="row">
		<div class="container-fluid">
		<div class="form-group">
				<!-- <label for="image">Nueva imagen</label> -->
				<input type="file" class="form-control-file" name="image" id="image">
				<input type="hidden" class="form-control-file" name="mat" id="mat">
		</div>	
</form>

<script>

$("#image").fileinput({
		theme: 'fas',
		language: 'es',
		showUpload: false,
		showCaption: true,
		showCancel: false,
		showRemove: true,
		browseClass: "btn btn-login",
		fileType: "jpg",
		allowedFileExtensions: ['jpg'],
		overwriteInitial: false,
		maxFileSize: 1000,
		maxFilesNum: 10
});

</script>

