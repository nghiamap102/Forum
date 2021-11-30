<style>
    .src_reply{
        display: flex;
        justify-content: end;
        align-items: center;
        background-color: rgb(230, 230, 230);
        padding: 5px 10px;
    }
    .src_reply_wrapper{
        display: flex;
        align-items: center;
    }
    .src_reply_wrapper span{
        font-size: 16px;
        cursor: pointer;
        font-weight: 600;
    }
    .list_cmt .heading_{
        padding-left: 10px;
        margin: 5px 0px;
       
    }
    .list_cmt .heading_wrapper{
        background-color: rgb(230, 230, 230);
        padding: 0px 5px;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
        font-weight: 600;
    }
    .content_cmt{
        padding: 5px;
        display: none;
        transition: transform .5s ease;
    }
</style>
<script>
    $('.selected').css('background-color' , 'black')
    $('.selected').css('color' , 'white')
</script>



<div class="post_detail">
    <div class="container py-3 mb-3">
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
        <div class="ele_cmt">
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
            <div class="src_reply">
                <div class="src_reply_wrapper">
                    <span class="material-icons-outlined mr-2">
                    textsms
                    </span>
                    <span class="src_cmt">Phúc Đáp</span>
                </div>
            </div>
            <div class="content_cmt">
                <div class="">
                    <form method="post" action="">
                        <textarea rows="5" name="cmt" class="form-control" placeholder="Viết câu trả lời của bạn..."  ></textarea>
                        <div class="form-group p-2">
                            <button type="submit" class="btn btn-primary" >Send</button>
                            <button type="button" class="btn_cancel btn btn-primary" >Huy bỏ</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <div class="list_cmt">
            <div class="heading_">
                <div class="heading_wrapper">
                    <span class="">Tất cả bình luận:</span>
                </div>
            </div>
            <div class="ele_cmt">
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
                <div class="src_reply">
                    <div class="src_reply_wrapper">
                        <span class="material-icons-outlined mr-2">
                        textsms
                        </span>
                        <span class="src_cmt">Phúc Đáp</span>
                    </div>
                </div>
                <div class="content_cmt">
                    <div class="">
                        <form method="post" action="">
                            <textarea rows="5" name="cmt" class="form-control" placeholder="Viết câu trả lời của bạn..."  ></textarea>
                            <div class="form-group p-2">
                                <button type="submit" class="btn btn-primary" >Send</button>
                                <button type="button" class="btn_cancel btn btn-primary" >Huy bỏ</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="ele_cmt">
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
                <div class="src_reply">
                    <div class="src_reply_wrapper">
                        <span class="material-icons-outlined mr-2">
                        textsms
                        </span>
                        <span class="src_cmt">Phúc Đáp</span>
                    </div>
                </div>
                <div class="content_cmt">
                    <div class="">
                        <form method="post" action="">
                            <textarea rows="5" name="cmt" class="form-control" placeholder="Viết câu trả lời của bạn..."  ></textarea>
                            <div class="form-group p-2">
                                <button type="submit" class="btn btn-primary" >Send</button>
                                <button type="button" class="btn_cancel btn btn-primary" >Huy bỏ</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="ele_cmt">
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
                <div class="src_reply">
                    <div class="src_reply_wrapper">
                        <span class="material-icons-outlined mr-2">
                        textsms
                        </span>
                        <span class="src_cmt">Phúc Đáp</span>
                    </div>
                </div>
                <div class="content_cmt">
                    <div class="">
                        <form method="post" action="">
                            <textarea rows="5" name="cmt" class="form-control" placeholder="Viết câu trả lời của bạn..."  ></textarea>
                            <div class="form-group p-2">
                                <button type="submit" class="btn btn-primary" >Send</button>
                                <button type="button" class="btn_cancel btn btn-primary">Huy bỏ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var a = document.querySelectorAll('.src_cmt')
    var b = document.querySelectorAll('.content_cmt')
    var c = document.querySelectorAll('.btn_cancel')
    console.log
    for( let i = 0 ; i < a.length ; i++){
        $(a[i]).click(function(){
            if ( $(b[i]).is( ":hidden" )) {
                $(b[i]).slideDown('slow')
                if(c.length > 0){
                    for( let j = 0 ; j < c.length ; j++){
                        $(c[i]).click(function(){
                            $(c[i]).closest('.content_cmt').hide()
                        })
                    }
                }
              
            } else {
                $(b[i]).slideUp()
            }
        });  
        
    }
    
 
   
</script>