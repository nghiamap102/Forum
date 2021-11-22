
<style>
body{
    scroll-behavior: smooth;
}
footer .container{
    display: flex;
    flex-direction: column;
    width: 100%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    background: linear-gradient(to top,#043f71,rgb(15, 124, 197));
}
.footer_content{
    padding: 15px;
}
.footer_content a,.footer_content span{
    color: white;
}
.footer_content a{
    font-weight: 600;
    font-size: 20px;
    margin-right: 10px;
}
.footer_content .header_{
    margin-bottom: 20px;
}
</style>
<script>
   function scrollTopFunction() {
    if (document.documentElement.scrollTop > 200 || document.body.scrollTop > 200) {
        document.getElementById('to-top').style.display = "block";
    } else {
        document.getElementById('to-top').style.display = "none";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
}

</script>
<footer class="">
    <div class="container">
        <div class="footer_content">
            <div class="header_">
                <a href="">Liên Lạc</a>
                <a href="">Góp ý</a>
            </div>
            <div class="">
                <span>Múi giờ GMT. Hiện tại là 01:04 PM. Powered by vBulletin® Version 4.2.5
                Copyright © 2021 vBulletin Solutions, Inc. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>
<div class="to_top">
    <button onclick="topFunction()">
        <span class="material-icons-outlined">
        arrow_upward
        </span>
    </button>
</div>

</body>