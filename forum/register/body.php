<style>
.register_{
    margin-bottom: 20px;
}
.register_ .container{
    border: 1px solid blue;
}
.register_ input{
    width: 300px;
}
.register_ .header_{
    background: linear-gradient(351deg,black,rgb(70, 70, 70));
    padding: 5px 10px;
    color: white;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.form-register{
    padding: 10px 5px;
}
.title_{
    font-weight: 600;
    background-color: rgb(223, 219, 219);       
    padding: 2px 10px;
}
.form-register .body_{
    padding: 10px 2px;
    display: flex;
    flex-direction: column;
}
.form-register .form-group{
    width: 50%;
    justify-content: space-between;
}
.label_{
    display: flex;
    align-items: center;
}
.select_sex{
    width: 300px;
}
.btn_{
    margin: 0 auto;
    
}
.btn_ button{
    /* border: 1px solid rgb(53, 198, 255); */
    border: none;
    outline: none;
    padding: 5px 10px;
    background-color: rgb(39, 112, 207);
    border-radius: 10px;
    color:  white;
}
</style>

<div class="register_">
    <div class="container">
        <form action="" method="get" class="form-register">
            <div class="header_">
                <span>Register</span>
            </div>
            <div class="title_">
                <span>Thông tin bắt buộc</span>
            </div>
            <div class="body_">
                <div class="form-group d-inline-flex">
                    <label class="label_" for="">Biệt Danh:</label>
                    <input type="text" name="nickname" id="nickname" class="form-control">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Username:</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="confirm" id="confirm" class="form-control">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Avatar:</label>
                    <input type="file" name="avatar" id="avatar" class="">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group d-inline-flex">
                    <label for="">Sex:</label>
                    <select name="sex" id="sex" class="select_sex" onchange="">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                        <option value="2">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group btn_">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

</body>