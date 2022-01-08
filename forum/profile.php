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
</style>
<div class="profile">
    <div class="container p-2 mb-3">
        <div class="wrapper" style="border: 1px solid  rgb(190, 190, 190) ; padding: 10px;">
            <div class=" content-profile">
                <div class="">
                    <div class="header">
                        <h5>My Account</h5>
                    </div>
                    <div class="form-detail-wrapper">
                        <form class="row form-detail" onSubmit={update_info}>
                            <div class="col-md-8">
                                <div class="detail">
                                <div class="form-group">
                                        <div class="form-left">
                                            <label>Username</label>
                                        </div>
                                        <div class="form-right">
                                            <input type="text" name="" value="" disabled class="form-control change_">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-left">
                                            <label>Password</label>
                                        </div>
                                        <div class="form-right">
                                            <input type="password" name="" value="" disabled class="form-control change_">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-left">
                                            <label>Sex</label>
                                        </div>
                                        <div class="form-right">
                                            <select name="" disabled class="form-control change_">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                                <option value="">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-left">
                                            <label>Nickname</label>
                                        </div>
                                        <div class="form-right">
                                            <input type="text" name="" value="" disabled class="form-control change_">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-left">
                                            <label>Email</label>
                                        </div>
                                        <div class="form-right">
                                            <input type="text" name="" value="" disabled class="form-control change_">
                                        </div>
                                    </div>
                                    <div class="">
                                        <span class="btn btn-primary btn_change">Change</span>
                                        <button class="btn btn-primary btn_save">Save</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                        </tbody>
                    </table>
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