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
.form-post{
    padding: 5px 10px;
}
.form-post .form-group{
    display: grid;
    grid-template-columns: 20% 50%;
}

</style>

<div class="post_body ">
    <div class="container py-2">
        <h2>Tạo Bài Viết</h2>
        <form class="form-post" method="post">
            <div class="form-group">
                <div class="label_">
                    <label for="">Tiêu Đề</label>
                </div>
                <div class="input_">
                    <input type="text" name="title" id="title">
                </div>
            </div>
            <div class="form-group">
                <div class="label_">
                    <label for="">Nôi Dung</label>
                </div>
                <div class="input_">
                    <textarea type="text" name="title" id="title"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit">Gửi bài viết</button>
                    <button type="" onclick="">Hủy bỏ</button>
                </div>
                
            </div>
        </form>
    </div>
</div>