
<style>
.main_content{
    float: left;
    width: 100%;
    background: while;
}
.main_content .container{
    display: flex;
    flex-direction: column;
    border: 1px solid rgb(8, 156, 255);
    width: 100%;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
.content_header{
    margin-bottom: 20px;
}
.static_field{
    float: left;
    width: 100%;
    margin-bottom: 20px;
}
.static_field .header_,.tag_field .header_{
    background: linear-gradient(351deg,black,rgb(70, 70, 70));
    padding: 5px 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.static_field .header_ span,.tag_field .header_ span{
    color: white;
}
.static_field .header_inner,.tag_field .header_inner{
    display: flex;
    justify-content: space-between;
}

.filter_option{
    margin-bottom: 30px;
}
.filter_ ul{
    list-style: none;
    padding: 0px;
    margin: 0px 0px 10px 0px;
}
.filter_ li{
    display: flex;
    justify-content: space-between;
    margin-bottom: 3px;
    border-bottom: 2px dotted gray;
}
.static_field .body_{
    border: 1px solid gray;
    padding: 3px;
    display: block;
    float: left;
    width: 100%;
}
.border_db{
    border: 1px solid gray;

}

.stt{
    background-color: orange;
    padding: 2px 5px;
    line-height: 1;
    font-size: 10px;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  margin-bottom: 20px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 6px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 5px 10px;
}
.left{
    width: 27%;
    float: left;
    position: relative;
}
.right{
    width: 72.5%;
    float: right;
    position: relative;
}
.active{
    font-weight: 600;
}
.status_ span{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 10px;
}
.status_ span:nth-child(1){
    background-color: aqua;
    line-height: 1;
}
.tag_field .body_ {
    border: 1px solid gray;
}
.tag_field .header_body{
    background: linear-gradient(to top,#043f71,rgb(15, 124, 197));
}
.header_body,.content_body li{
    display: grid;
    grid-template-columns: 10% 60% 5% 25%;
}
.content_body .icon_{
    display: flex;
    justify-content: center;
    align-items: center;
}

.content_body ul{
    padding: 0;
}

.header_body{
    padding: 5px 0px;
}
.header_body span{
    padding-left: 5px;
    color:  white;
    font-weight: 500;
}
.infor_{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
<script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<div class="main_content p-2">
    <div class="container p-3">
        <div class="content_header">
            <div class="chuyenmuc">
                <div class="d-inline-flex">
                    <a href="/index.php"><span class="material-icons-outlined">
                    home
                    </span></a>
                    <span>Chuyên mục</span>
                </div> 
                <div class="">
                    
                </div>
            </div>
        </div>
        <div class="static_field">
            <div class="header_">
                <div class="header_inner">
                    <span>Advanced Forum Statistics
                    </span>
                    <span class="material-icons-outlined">
                    expand_less
                    </span>
                </div>
            </div>
            <div class="body_ ">
                <div class="left border_db p-2">
                    <select class="filter_option">
                        <option>Thành viên mới nhất</option>
                        <option>Thành viên mới nhất</option>
                        <option>Thành viên mới nhất</option>
                        <option>Thành viên mới nhất</option>
                    </select>
                    <div class="filter_">
                        <ul>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                            <li class="item_">
                                <div class="">
                                    <span class="stt">1</span>
                                    <span>diemmy</span>
                                </div>
                                <div class="filter_result">
                                    4000
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right border_db">
                    <div class="filter_post">
                        <div class="tab">
                            <button class="tablinks active" onclick="openCity(event, 'London')">London</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                        </div>

                        <!-- Tab content -->
                        <div id="London" class="tabcontent" style="display: block;">
                            <div class="filter_">
                                <ul class="">
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="Paris" class="tabcontent">
                        <div class="filter_">
                                <ul class="">
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                        <div class="filter_">
                                <ul class="">
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="">
                                            <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/post_new.gif" style="padding-right: 5px;" alt="">
                                            <span class="name_post"><a href="/">àgahdhkgsdlgdsgkjdhgjldhglhglahfljhfola</a></span>
                                        </div>
                                        <div class="filter_result">
                                            <span><a href="/">2021</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tag_field">
            <div class="header_">
                <div class="header_inner">
                    <span>Advanced Forum Statistics
                    </span>
                    <span class="material-icons-outlined">
                    expand_less
                    </span>
                </div>
            </div>
            <div class="body_">
                <div class="header_body">
                    <div class="space"></div>
                    <div class="">
                        <span>Chủ Đề</span>
                    </div>
                    <div></div>
                    <div class="">
                        <span>Bài mới gửi</span>
                    </div>
                </div>
                <div class="content_body">
                    <ul>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="tag_field">
            <div class="header_">
                <div class="header_inner">
                    <span>Advanced Forum Statistics
                    </span>
                    <span class="material-icons-outlined">
                    expand_less
                    </span>
                </div>
            </div>
            <div class="body_">
                <div class="header_body">
                    <div class="space"></div>
                    <div class="">
                        <span>Chủ Đề</span>
                    </div>
                    <div></div>
                    <div class="">
                        <span>Bài mới gửi</span>
                    </div>
                </div>
                <div class="content_body">
                    <ul>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="tag_field">
            <div class="header_">
                <div class="header_inner">
                    <span>Advanced Forum Statistics
                    </span>
                    <span class="material-icons-outlined">
                    expand_less
                    </span>
                </div>
            </div>
            <div class="body_">
                <div class="header_body">
                    <div class="space"></div>
                    <div class="">
                        <span>Chủ Đề</span>
                    </div>
                    <div></div>
                    <div class="">
                        <span>Bài mới gửi</span>
                    </div>
                </div>
                <div class="content_body">
                    <ul>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="tag_field">
            <div class="header_">
                <div class="header_inner">
                    <span>Advanced Forum Statistics
                    </span>
                    <span class="material-icons-outlined">
                    expand_less
                    </span>
                </div>
            </div>
            <div class="body_">
                <div class="header_body">
                    <div class="space"></div>
                    <div class="">
                        <span>Chủ Đề</span>
                    </div>
                    <div></div>
                    <div class="">
                        <span>Bài mới gửi</span>
                    </div>
                </div>
                <div class="content_body">
                    <ul>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon_">
                                <img src="https://itvnn.net/images/styles/ShinyBlue/statusicon/forum_new-48.png" alt="">
                            </div>
                            <div class="infor_">
                                <div class="info_inner">
                                    <div class="src_list_post">
                                        <a href="/">Tintuc CNTT</a>
                                        <span class="viewing_">(6 viewing)</span>
                                    </div>
                                    <div class="description_">
                                        <span>Tin tức về CNTT ở Việt Nam và thế giới.</span>
                                    </div>
                                </div>
                                <div class="count_ text-right">
                                    <div class="count_title">
                                        Đề tài: 1,599
                                    </div>
                                    <div class="count_post">
                                        Bài Gửi: 1,599
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <div class="latest_post">
                                <div class="name_">
                                    <img src="https://itvnn.net/images/icons/icon.gif" alt="">
                                    <a href="" class="" >AMD hợp tác MediaTek...</a>
                                </div>
                                <div class="author_">
                                    <span>by zokoko</span>
                                </div>
                                <div class="created_date">
                                    <span>19-11-2021, 05:34 PM</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
