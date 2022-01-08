<?php
    include './index/header.php';
?>




<style>
    .search .container,.profile .container{
    border-bottom: 1px solid rgb(190, 190, 190);
    border-left: 1px solid rgb(190, 190, 190);
    border-right: 1px solid rgb(190, 190, 190);
}
.table_ td,.table_ th{
    text-align: left;
}
.img-circle{
    border-radius: 50%;
}
.pull-left{
    float: left;
}
.panel-default{
    border-color: #ddd!important;
}
.panel{
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}
.panel-default .panel-heading{
     color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}
.panel-heading{
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-body{
    padding: 15px;
}
.col-xs-6{
    width: 50%;
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
}
.col-xs-12{
    width: 100%;
    float: left;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.f-16{
    font-size: 16px;
}
</style>
<div class="profile">
    <div class="container p-2 mb-3">
        <div class="wrapper" style="border: 1px solid  rgb(190, 190, 190) ; padding: 10px;">
            <h3 style="letter-spacing: 3px;">Profile</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center mb-3">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6 style="color: gray; font-size: 13px; text-align: center;">Upload a different photo...</h6>
                        <input type="file" name="" value="">
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Website</div>
                        <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                    </div>
                    <div class="">
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="table_user py-5">
                        <div class=" py-5">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Tag</th>
                                        <th>Created Date </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <th>1</th>
                                    <th>abc</th>
                                    <th>abc</th>
                                    <th>abc</th>
                                    <th>
                                        <div>
                                            <a href="" type="button" class="" style="color: grey;">
                                                <span class="material-icons-outlined">
                                                build
                                                </span>
                                            </a>
                                            <a href="" type="button" class="" style="color: grey;">
                                                <span class="material-icons-outlined">
                                                delete
                                                </span>
                                            </a>
                                        </div>
                                    </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="Username"><h4 class="f-16">Username</h4></label>
                            <input type="text" class="form-control" name="Username" id="Username">
                        </div>
                        <div class="col-xs-6">
                            <label for="Password"><h4 class="f-16">Password</h4></label>
                            <input type="text" class="form-control" name="Password" id="Password">
                        </div>
                        <div class="col-xs-6">
                            <label for="Email"><h4 class="f-16">Email</h4></label>
                            <input type="text" class="form-control" name="Email" id="Email">
                        </div>
                        <div class="col-xs-6">
                            <label for="Sex"><h4 class="f-16">Sex</h4></label>
                            <input type="text" class="form-control" name="Sex" id="Sex">
                        </div>
                        <div class="col-xs-6">
                            <label for="nick"><h4 class="f-16">Nick Name</h4></label>
                            <input type="text" class="form-control" name="NickName" id="nick">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit">
                                    <span class="material-icons-outlined" style="vertical-align: middle;">
                                        check_circle
                                        </span> 
                                        Save</button>
                                <button class="btn btn-lg" type="reset">
                                    <span class="material-icons-outlined" style="vertical-align: middle;">
                                    restart_alt
                                    </span>
                                    Reset</button>
                            </div>
                    </div>
              	</form> -->
                </div>
            </div>
           
        </div>
    </div>
</div>



<script>
    $('.garbage').on('click' , function(){
        $('.modal-confirm').fadeIn()
    })
    $('.close').on('click' , function(){
        $('.modal-confirm').fadeOut()
    })
    $('.close-btn').on('click' , function(){
        $('.modal-confirm').fadeOut()
    })

    var a = document.querySelectorAll('.form-right .change_')
    console.log(a)
    $('.btn_change').on('click' , function(){
        for(let i= 0 ; i < a.length ; i ++ ){
            $(a[i]).removeAttr('disabled')
        }
    })
   
    
</script>







<?php
    include './index/footer.php'
?>