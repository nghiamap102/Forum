
<style>

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
                <a href="/forum/contact.php">Góp ý</a>
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