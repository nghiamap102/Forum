<?php
	session_start(); 
 ?>
<?php include ("index/header.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
		$content = $_POST["post_content"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}
		
		$user_id = $_SESSION["user_id"];

		$sql = "INSERT INTO posts(title, content, user_id, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$user_id', '$is_public', now(), now())";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}

?>
<style>
    .body_post .container{
        border-left: 1px solid rgb(214, 214, 214);
        border-right: 1px solid rgb(214, 214, 214);
        border-bottom: 1px solid rgb(214, 214, 214);
    }
    .body_post select{
		outline: none;
		border: 1px solid  rgb(214, 214, 214);
        width: 50%;
    }
    .body_post .form-group{
		display: grid;
		grid-template-columns: 15% 85%;
	}
	
	.btn_check{
		display: flex;
		justify-content: start;
		align-items: center;
	}
	.btn_check input{
		width: 20px;
	}

	.btn_wrapper{
		display: flex;
	}
	.btn_submit{
		background-color: rgb(55, 68, 255);
		color: white;
		cursor: pointer;
	}
</style>
<div class="body_post">
<div class="container py-3 mb-3">
<form action="" method="post" class="form-post">
	<h3>Thêm bài viết mới</h3>
	<div class="form-group">
		<label for="tag">Chủ đề</label>
		<select name="" id="tag">
			<option value="">abc</option>
			<option value="">abc</option>
			<option value="">abc</option>
		</select>
	</div>
	<div class="form-group">
		<label for="title">Tiêu đề bài viết:</label>
		<input type="text" id="title" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Nội dung:</label>
		<textarea name="post_content" id="post_content" rows="10" cols="150" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="is_public">Public bài viết:</label>
		<div class="btn_check">
			<input type="checkbox" id="is_public" name="is_public" value="1"class="form-control">
		</div>
	</div>
	<div class="form-group">
		<div></div>
		<div class="btn_wrapper">
			<div class="">
				<input type="submit" name="btn_submit" value="Thêm bài viết" class="form-control btn_submit">
			</div>
		</div>
	</div>
	
</form>
</div>
</div>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'post_content' );
</script>
<?php include ("index/footer.php"); ?>
