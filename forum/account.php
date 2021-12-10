<?php
    include './index/header.php';
?>
<style>
.search .container,.profile .container{
    border-bottom: 1px solid rgb(190, 190, 190);
    border-left: 1px solid rgb(190, 190, 190);
    border-right: 1px solid rgb(190, 190, 190);
}
.b_gray{
    border-left: 1px solid rgb(190, 190, 190);

}
.table_ td,.table_ th{
    text-align: left;
    padding: 5px 10px;
}
.table_ .head_{
    background-color:rgb(44, 99, 182);
    color: white;
}
.table_ .icon_{
    cursor: pointer;
}
.profile .group_{
    display: grid;
    grid-template-columns: 30% 70% ;
    grid-gap: 10px;
}
.btn_fix,.btn_update{
    background-color:rgb(44, 99, 182);
    color: white;
}
.btn_fix:hover,.btn_update:enabled:hover{
    background-color:rgb(101, 162, 253);
}

.btn_update:disabled{
    color: black;
}
</style>

<div class="profile">
    <div class="container py-3 mb-3">
        <div class="row">
            <div class="col-md-4">
                <h3>Profile</h3>
                <form action="" class="p-3 " method="">
                    <div class="form-group group_">
                        <label for="">Nickname</label>
                        <input type="text" name="nickname" value="abc" class="form-control input_" disabled>
                    </div>
                    <div class="form-group group_">
                        <label for="">phone</label>
                        <input type="text" name="phone" value="abc" class="form-control input_" disabled>
                    </div>
                    <div class="form-group group_">
                        <label for="">email</label>
                        <input type="text" name="email" value="abc" class="form-control input_" disabled>
                    </div>
                   
                    <div class="form-group d-flex">
                        <input type="button" name="" id="" value="Repair" class="form-control btn_fix mr-2">
                        <input type="submit" name="" id="" value="Update" class="form-control btn_update" disabled>
                    </div>
                </form>
            </div>
            <div class="col-md-8 b_gray">
                <h3>Post Lastest</h3>
                <table class="table_" style="width: 100%;">
                    <tr class="head_">
                        <th>id</th>
                        <th>title</th>
                        <th>Created_date</th>
                        <th>action</th>
                    </tr>   
                    <tr>
                        <td> 1</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                        <td class="d-flex">
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                build
                                </span>
                            </div>
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                delete
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                        <td class="d-flex">
                        <div class="icon_">
                                <span class="material-icons-outlined">
                                build
                                </span>
                            </div>
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                delete
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                        <td class="d-flex">
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                build
                                </span>
                            </div>
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                delete
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                        <td class="d-flex">
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                build
                                </span>
                            </div>
                            <div class="icon_">
                                <span class="material-icons-outlined">
                                delete
                                </span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    var a = document.querySelectorAll('.group_ .input_')
    $('.btn_fix').on('click' , function(){
        $(a).removeAttr("disabled")
        $('.btn_update').removeAttr("disabled")
    })
    $('.btn_update').on('click' , function(){
        $(a).attr("disabled" , "true")
        $('.btn_update').attr("disabled" , "true")
    })
</script>

<?php
    include './index/footer.php'
?>



