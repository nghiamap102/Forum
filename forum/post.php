<?php
	session_start(); 
 ?>
<?php include 'index/header.php'?>
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
    .post_body .container,.form-post{
    border-left: 1px solid gray;
    border-right: 1px solid gray;
    border-bottom: 1px solid gray;
}
.post_body h2{
    padding: 5px 10px;
    background-color: black;
    color: white;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    margin: 0;
}
</style>
<div class="post_body ">
    <div class="container py-2">
        <form action="them-bai-viet-ck.php" method="post">
            <table>
            <tr>
                <td colspan="2"><h3>Thêm bài viết mới</h3></td>
            </tr>	
            <tr>
                <td nowrap="nowrap">Tiêu đề bài viết :</td>
                <td><input type="text" id="title" name="title"></td>
            </tr>
            <tr>
                <td nowrap="nowrap">Nội dung :</td>
                <td><textarea name="post_content" id="post_content" rows="10" cols="150"></textarea></td>
            </tr>
            <tr>
                <td nowrap="nowrap">Public bài viết ? :</td>
                <td><input type="checkbox" id="is_public" name="is_public" value="1"> public</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
            </tr>

            </table>
	
        </form>
    </div>
</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'post_content' );
</script>