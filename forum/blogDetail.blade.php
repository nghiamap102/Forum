@extends('layout')
@section('content')

@if (session('status')=='CommentSuccess')
<div class="alert alert-success alert-dismissible fade show position-fixed" style="left:1150px; top:30px;" role="alert">
    Bình luận thành công!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif ($errors->any())
<div class="alert alert-warning alert-dismissible fade show position-fixed" style="left:1100px; top:30px;" role="alert">
    Bình luận không thành công!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

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
            <span>Đề tài:<a href="javascript:;">{{$blog->Tag->Name}}</a></span>
        </div>
        <div class="created_post">
            <span class="material-icons-outlined">
            article
            </span>
            <span>@php $d=date_create($blog->Created_date); echo date_format($d, 'd/m/Y H:i:s'); @endphp</span>
        </div>
        <div class="ele_cmt">
            <div class="main_post">
                <div class="info_user">
                    <div class="header_">
                        <div class="username">
                        </div>
                        <div class="ava_">
                            <div class="">
                            </div>
                        </div>
                    </div>
                    <div class="body_">
                        <div class="nick_name">
                        </div>
                        <div class="body_inner">
                            <div class="form_group">
                                <div class="left_body">
                                    <span>Họ Tên</span>
                                </div>
                                <div class="right_body">
                                </div>
                            </div>

                            <div class="form_group">
                                <div class="left_body">
                                    <span>Tham gia ngày</span>
                                </div>
                                <div class="right_body">
                                </div>
                            </div>
                            <div class="form_group">
                                <div class="left_body">
                                    <span>giới tính </span>
                                </div>
                                <div class="right_body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Khúc này thay đổi -->
                <div class="content_post">
                    <div class="header_ d-flex justify-content-between">
                        <div class="" style="font-weight:  600;">
                            <span class="material-icons-outlined">
                            description
                            </span>{{$blog->Title}}
                        </div>
                       
                        <a href="javascript:;" class="update_" >
                            Sửa bài viết                           
                        </a>
                        <div class="modal-confirm">
                            <div class="model-box">
                                <div class="box-wrapper">
                                    <h3 class="box-header">
                                        <span id="close1"  class="close"><i class="fas fa-times"></i></span>
                                    </h3>
                                    <div class="box-body mb-2">
                                        <form method="POST" action="{{route('blogUpdateAdone', ['blogId'=>$blog->Id])}}">
                                            <div class="form-group row" style="width: 90%;">
                                                <label for="title" class="col-sm-12 col-md-2 col-form-label" style=" padding: 0;padding-top:5px;">Tiêu đề:<i class="text-danger">*</i></label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input class="form-control" name="title" type="text" value="" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tag" class="col-sm-12 col-md-2 col-form-label">Chủ Đề:</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <select name="tag" style="width: 100%;" class="form-control">
                                                        <option value="" selected></option>
                                                        <option value="" selected></option>
                                                        <option value="" selected></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="post_content" class="col-sm-12 col-md-2 col-form-label">Nội dung:<i class="text-danger">*</i></label>
                                                <div class="col-sm-12 col-md-10">
                                                    <textarea name="post_content" id="post_content" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label" for="is_public">Public bài viết</label>
                                                <div class="col-sm-12 col-md-10 d-flex justify-content-start align-items-center">
                                                    <input type="checkbox" id="is_public" name="is_public" value="1" @php echo $blog->Active == 1 ? 'Checked' : '' @endphp class="form-control" style="width: 24px; height: 24px;">
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-center ">
                                                <input type="submit" name="btn_submit" value="Cập nhật bài viết" class="form-control btn_submit" style="width: 30%; background-color: #1b00ff; color: white;">
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                <!--end Khúc này thay đổi -->

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
                        <p>@php echo html_entity_decode($blog->Content) @endphp</p>
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
                    <form method="post" action="{{route('commentsuccess', ['blogId'=>$blog->Id])}}">
                     
                        <textarea rows="5" name="cmt" id="post_content" class="form-control" placeholder="Viết câu trả lời của bạn..."  ></textarea>
                        <div class="form-group p-2">
                            <button type="submit" class="btn btn-primary" >Send</button>
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
                </div>
                <div class="main_post">
                    <div class="info_user">
                        <div class="header_">
                            <div class="username">
                            </div>
                            <div class="ava_">
                                <div class="">
                                </div>
                            </div>
                        </div>
                        <div class="body_">
                            <div class="nick_name">
                            </div>
                            <div class="body_inner">
                                <div class="form_group">
                                    <div class="left_body">
                                        <span>Họ Tên</span>
                                    </div>
                                    <div class="right_body">
                                    </div>
                                </div>

                                <div class="form_group">
                                    <div class="left_body">
                                        <span>Tham gia ngày</span>
                                    </div>
                                    <div class="right_body">
                                    </div>
                                </div>
                                <div class="form_group">
                                    <div class="left_body">
                                        <span>giới tính </span>
                                    </div>
                                    <div class="right_body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Khúc này thay đổi -->
                    <div class="content_post">
                        <div class="header_ d-flex justify-content-between">
                            <div class="" style="font-weight:  600;">
                                <span class="material-icons-outlined">
                                description
                                </span>
                            </div>
                            <a href="javascript:;" class="update_" >
                                Sửa bình luận                         
                            </a>
                            <div class="modal-confirm">
                                <div class="model-box">
                                    <div class="box-wrapper">
                                        <h3 class="box-header">
                                            <span id="close1"  class="close"><i class="fas fa-times"></i></span>
                                        </h3>
                                        <div class="box-body mb-2">
                                            <form method="POST" action="{{route('blogUpdateAdone', ['blogId'=>$blog->Id])}}">
                                                <div class="form-group row">
                                                    <label for="post_content" class="col-sm-12 col-md-2 col-form-label">Nội dung:<i class="text-danger">*</i></label>
                                                    <div class="col-sm-12 col-md-10">
                                                        <textarea name="post_content" id="post_content" cols="10" rows="10" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row justify-content-center ">
                                                    <input type="submit" name="btn_submit" value="Cập nhật bình luận" class="form-control btn_submit" style="width: 30%; background-color: #1b00ff; color: white;">
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        <!-- end Khúc này thay đổi -->

                        </div>
                        <div class="body_">
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- Khúc này thay đổi -->
<script>
    var a = document.querySelectorAll('.update_')
    var b = document.querySelectorAll('.modal-confirm')
    var c = document.querySelectorAll('.close')
    var d = document.querySelectorAll('.close-btn')

    console.log(a)

    for(let i = 0 ; i <a.length ; i++){

        $(a[i]).on('click' , function(){
            $(b[i]).fadeIn()
        })
        $(c[i]).on('click' , function(){
            $(b[i]).fadeOut()
        })
        $(d[i]).on('click' , function(){
            $(b[i]).fadeOut()
        })
    }
</script>
<style>
.modal-confirm{
    z-index: 100;
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    padding-top: 150px;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.model-box{
    margin: auto;
    background-color: #fff;
    position: relative;
    padding: 15px;
    outline: 0;
    width: 600px;
    border-radius: 20px;
}
.box-footer{
    text-align: right;
}
.btn-wrapper{
    display: inline-block;
}
.btn-wrapper button{
    width: auto;
    display: inline;
}
.acept-btn{
	background-color: #4972dc;
	color: white;
}
</style>
<script>
    ClassicEditor
        .create( document.querySelector( '#post_content' ), {
            ckfinder: {
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'ckfinder', 'imageUpload', 'blockQuote', 'insertTable', '|',  'undo', 'redo' ]
        } )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

</script>

@endsection

