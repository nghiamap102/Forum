<head>
	<title>
		Forum
	</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<style>
body{
    scroll-behavior: smooth;
}


.header-top{
    background-color: black;
    color: white;
}
.header-wrapper{
    display: flex;
    justify-content: space-between;
}
.form-login {
    margin: 0;
}
.form-login,.logo-wrapper{    
    padding: 10px;
    display: flex;
    align-items: center;
}
.form-login input{
    padding: 0px 7px;
    border-radius: 15px;
    border: none;
    outline: none;
}
label{
    margin: 0;
}
.form-login label{
    padding-right: 5px;
}

.save-password{
    padding: 0px 10px;
}

.btn-login{
    outline: none;
    cursor: pointer;
    border-radius: 15px;
}
.banner{
    background: linear-gradient(to top,#043f71,rgb(15, 124, 197));
}
.banner .navbar{
    background: linear-gradient(to top,#043f71,rgb(60, 124, 197));     
    border-radius: 25px;
}
.banner .navbar-brand,.nav-link{
    color: white;
}
.nav-link {
    font-weight: 600;
    border-right: 1px ;
}
.nav-item{
    padding: 0px 10px;
}

/*-------------------welcome_banner----------------------------------*/
.welcome_banner{
    background-color: white;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom: 1px solid gray;
}
.welcome_banner .header_{
    display: flex;
}
.welcome_banner .header_ span:first-child{
    padding-right: 10px;
}
.welcome_banner .body_{
    background-color: lightyellow;
}
.welcome_banner .body_inner{
    padding: 5px 10px;
    border-radius: 15px;
    border: 1px solid greenyellow;
}
.form_search .header_ span{
    padding-right: 10px;
}
.search_field{
    display: grid;
    grid-template-columns: 75% 20%;
    grid-gap: 10px;
}
.search_field input{
    padding: 5px 10px;
    border: 1px solid gray;
    outline: none;
}
.search_field button{
    border: none;
    outline: none;
    background-color: gray;
}
.search_field button span{
    vertical-align: bottom;
    color: white;
}

</style>

<body class="grey lighten-4">       
    
    <header class="header-top" id="header-top">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-wrapper">
                    <a href="/forum"><span>Chao mung</span></a>
                </div>
                <div class="loginarea">
                    <form class="form-login" action="index.php" method="GET">
                        <label for="username">Login:</label>
                        <div class="">
                            <input type="text" name="username" id="username" placeholder="Username">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="save-password">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember</label>
                        </div>
                        <div class="">
                            <button type="submit" name="submit" role="button" class="btn-login form-control">
                                Login
                            </button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-4">
                    <div class="row">
                        <div class="col-md-5">
                        <a href="">
                            <img src="../images/logo.jpg" alt="">
                        </a>
                        </div>
                        <div class="col-md-7">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/forum/register.php">Register</a>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                            <div class="under-navbar">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="welcome_banner py-3 row">
                        <div class="col-md-9">
                            <div class="header_ mb-3">
                                <span class="material-icons-outlined">
                                forum
                                </span>
                                <span>Chào mừng bạn đến với ITVNN FORUM - Diễn đàn công nghệ thông tin.</span>
                            </div>
                            <div class="body_">
                                <div class="body_inner">
                                    Nếu đây là lần đầu tiên bạn tham gia diễn đàn, xin mời bạn xem phần <a href="/">Hỏi/Ðáp</a> để biết cách dùng diễn đàn. Để có thể tham gia thảo luận bạn phải đăng ký làm thành viên, <a href="">click vào đây để đăng ký.</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form class="form_search">
                                <div class="d-inline-flex header_ pb-3">
                                    <span class="material-icons-outlined ">
                                    desktop_windows
                                    </span>
                                    <span>Search Forums</span>
                                </div>
                                <div class="search_field">
                                    <input type="text" name="search" id="search">
                                    <button type="submit">
                                        <span class="material-icons-outlined">
                                          search
                                        </span>
                                    </button>
                                </div>
                                <a href="/search.php" class="d-block text-right">Kiếm Chi Tiết</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    