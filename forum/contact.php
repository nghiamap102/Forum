<?php
    include './index/header.php';
?>
<style>
 .section_info{
    display: grid;
    grid-template-columns: 23.5% 23.5% 23.5% 23.5%;
    grid-gap: 20px;
}
.ele_{
    padding: 30px;
    background-color:  rgb(39, 112, 207);
    text-align: center;
    color: white;
    border-radius: 15px;
}
.ele_  span{
    font-size: 50px;
}
.list_icon {
    list-style: none;
    padding: 0;
    margin: 0;
}
.list_icon li{
    display: inline;
    font-size: 30px;
}
.section_email h3{
    font-weight: 700;
    font-size: 2.25rem;
}
.section_email p {
    margin: 30px 0px;
}
.list_icon a{
    color:  rgb(39, 112, 207);;
    margin: 0px 15px;
}
.btn_submit{
    background-color:  rgb(39, 112, 207);
    color: white;
}
</style>

<div class="body_contact py-3">
    <div class="container">
        <div class="section_info mb-3">
            <div class="ele_">
                <span class="material-icons-outlined">
                location_on
                </span>
                <h5>OUR MAIN OFFICE</h5>    
                <p>SoHo 94 Broadway St New York, NY 1001</p>                    
            </div>
            <div class="ele_">
                <span class="material-icons-outlined">
                phone
                </span>
                <h5>OUR MAIN OFFICE</h5>    
                <p>SoHo 94 Broadway St New York, NY 1001</p>                    
            </div>
            <div class="ele_">
                <span class="material-icons-outlined">
                location_on
                </span>
                <h5>OUR MAIN OFFICE</h5>    
                <p>SoHo 94 Broadway St New York, NY 1001</p>                    
            </div>
            <div class="ele_">
                <span class="material-icons-outlined">
                email
                </span>
                <h5>OUR MAIN OFFICE</h5>    
                <p>SoHo 94 Broadway St New York, NY 1001</p>                    
            </div>
        </div>
        <div class="section_email row py-5">
            <div class="col-md-6">
                <h3 class="">Hãy để lại ý kiến cho chúng tôi</h3>
                <p>Etiam sit amet convallis erat – class aptent taciti sociosqu ad litora torquent per conubia! Maecenas gravida lacus. 
                    Lorem etiam sit amet convallis erat.</p>
                <ul class="list_icon">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <form action="" method="post" class="form-contact">
                    <div class="form-group">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="name" class="mb-2">Name</label>
                        <input type="text" id="name" placeholder="Enter your email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="email" class="mb-2">Message</label>
                        <textarea type="email" id="email" placeholder="Enter your email" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="form-control btn_submit"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



