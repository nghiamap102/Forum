<style>
.post_detail .container{
    border-left: 1px solid gray;
    border-right: 1px solid gray;
    border-bottom: 1px solid gray;
}
.page_number{
    display: flex;
    justify-content: end;
    align-items: center;
    font-size: 13px;
    margin-bottom: 20px;
}
.page_number div{
    margin-right: 10px;
}
.page_ {
    display: flex;
}
.page_ span{
    background-color: rgb(247, 247, 247);
    padding:0px 5px;
    line-height: 1;
    display: flex;
    align-items: center;
}
.number_ {
    border: 1px solid gray;
}
.symbol_ span{
    font-size: 20px;
    padding: 0;
}
.title_post{
    background: linear-gradient(351deg,black,rgb(70, 70, 70));
    padding: 5px 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    color: white;
}
.title_post a{
    color: white;
    padding-left: 10px;
    font-weight: 600;
}
.created_post{
    background: linear-gradient(to top,#043f71,rgb(15, 124, 197));
    color: white;
    padding: 5px 10px;
    font-size: 13px;
}
.created_post span{
    font-size: 13px;
    vertical-align: middle;
}
.main_post{
    display: grid;
    grid-template-columns: 25% 74%;
    grid-gap: 12px;
    padding: 5px;
}
.info_user{
    padding: 5px;
    background-color: #E5E3E3;
}
.info_user .header_{
    text-align: center;
}
.username h3,.nick_name{
    text-align: center;
    color: red;
    font-weight: 700;
}
.username ,.nick_name ,.body_inner,.content_post .header_ {
    background: linear-gradient(to top , #E5E3E3,white ,#E5E3E3);
}
.info_user .header_ .ava_{
    background-color: #E5E3E3;
    display: flex;
    justify-content: center;
    align-items: center;
}
.info_user .header_ .ava_ div{
    padding: 5px;
    background-color: white;
}
.body_inner{
    border-radius: 15px;
    padding: 5px;
}
.form_group{
    display: flex;
    justify-content: space-between;
    font-size: 13px;    
    border-bottom: 1px dotted gray;
}


.main_post .info_user{
    border-radius: 15px;
}

.content_post .header_{
    padding: 5px 10px;
}
.content_post .header_ span{
    vertical-align: middle;
}
.content_post .header_ .title_{
    font-weight: 600;
}
.content_post .body_{
    padding: 15px 5px;
}
</style>
<script>
    $('.selected').css('background-color' , 'black')
    $('.selected').css('color' , 'white')
</script>



<div class="post_detail">
    <div class="container py-3">
        <div class="page_number">
            <div class="">
                <span>Kết quả từ 1 tới 10 trên 23</span>
            </div>
            <div class="page_">
                <span class="number_"><a href="/" class="selected">1</a></span>
                <span class="number_"><a href="/">2</a></span>
                <span class="number_"><a href="/">3</a></span>
                <span class="number_ symbol_">
                    <a href="/">
                        <span class="material-icons-outlined">
                        chevron_right
                        </span>
                    </a>
                    </span> 
                <span class="number_ symbol_">
                    <a href="/">
                        <span class="material-icons-outlined">
                        last_page
                        </span>
                    </a>
                </span>
            </div>
            
        </div>
        <div class="title_post">
            <span>Đề tài:<a href="/">Ra mắt chức năng Phạt thẻ đối với thành viên vi phạm</a></span>
        </div>
        <div class="created_post">
            <span class="material-icons-outlined">
            article
            </span>
            <span>14-09-2009, 04:10 PM</span>
        </div>
        <div class="main_post">
            <div class="info_user">
                <div class="header_">
                    <div class="username">
                        <h3>mt_binh</h3>
                    </div>
                    <div class="ava_">
                        <div class="">
                            <img src="https://itvnn.net/customavatars/avatar99_25.gif" alt="">
                        </div>
                    </div>
                </div>
                <div class="body_">
                    <div class="nick_name">
                        <span>Sát thủ vô tình</span>
                    </div>
                    <div class="body_inner">
                        <div class="form_group">
                            <div class="left_body">
                                <span>Họ Tên</span>
                            </div>
                            <div class="right_body">
                                <span>Mai Thanh Bình</span>
                            </div>
                        </div>
                      
                        <div class="form_group">
                            <div class="left_body">
                                <span>Tham gia ngày</span>
                            </div>
                            <div class="right_body">
                                <span>Sep 2009</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="left_body">
                                <span>Tuổi</span>
                            </div>
                            <div class="right_body">
                                <span>99</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="left_body">
                                <span>giới tính </span>
                            </div>
                            <div class="right_body">
                                <span>A</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="left_body">
                                <span>Họ Tên</span>
                            </div>
                            <div class="right_body">
                                <span>Mai Thanh Bình</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="left_body">
                                <span>Họ Tên</span>
                            </div>
                            <div class="right_body">
                                <span>Mai Thanh Bình</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="left_body">
                                <span>Họ Tên</span>
                            </div>
                            <div class="right_body">
                                <span>Mai Thanh Bình</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_post">
                <div class="header_">
                    <span class="material-icons-outlined">
                    description
                    </span>
                    <span class="title_">Ra mắt chức năng Phạt thẻ đối với thành viên vi phạm</span>
                    <!-- <span>
                        <a href="">
                            <span class="material-icons-outlined">
                            thumb_up
                            </span>Thích
                        </a>
                        <a href="">Chia sẻ</a>
                    </span> -->
                </div>
                <div class="body_">
                    <p>Để đảm bảo tính công bằng, cũng như xử phạt vi phạm diễn đàn được dễ dàng. Nay diễn đàn ra mắt chức phạt thẻ đối với những lỗi vi phạm.
Khi phạt thẻ diễn đàn sẽ tự PM cho thành viên lý do và link bài viết vi phạm, khi đủ Points sẽ tự động Ban nick như sau:
P/s: Các điều khoản trên có thể còn thiếu, các bạn nào thấy thiếu thì cho ý kiến.</p>
                </div>
            </div>
        </div>
    </div>
</div>