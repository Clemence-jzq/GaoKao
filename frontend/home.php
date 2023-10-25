<?php include_once '../backend/function.php' ?>
<?php addStylesheet('home.css'); ?>
<?php addScript('home.js'); ?>
<?php include_once 'header.php' ?>

<div class="container-fluid">
    <h1 id="title">输入你的高考分数和所在省市，即可查询适合你的大学及专业<br>快来试试吧！</h1>

    <div class="row box-container">
        <div class="col-lg-3"></div>

        <div class="center col-lg-5 col-md-6">
            <form action="" id="search_form">
                <!-- score -->
                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-auto">
                        <label for="score" class="col-form-label">分数</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="score" id="score" class="form-control">
                        <small id="scoreMsg">请输入高考分数</small>
                    </div>
                </div>
                <!-- province -->
                <div class="row g-3 mt-1 align-items-center justify-content-center">
                    <div class="col-auto">
                        <label for="province" class="col-form-label">省市</label>
                    </div>
                    <div class="col-6">
                        <select class="form-select" name="province" id="province"></select>
                    </div>
                </div>
                <!-- btn submit -->
                <div class="row justify-content-center">
                    <button type="submit" class="btn">查询</button>
                </div>
            </form>
        </div>

        <div class="right col-lg-3 col-md-5">
            <form action="" id="login_form">
                <p>登录账号可以将心仪专业<br>加入心愿单进行比对哦</p>
                <!-- mail -->
                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-auto">
                        <label for="email" class="col-form-label">账号</label>
                    </div>
                    <div class="col-9">
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <!-- password -->
                <div class="row g-3 mt-1 align-items-center justify-content-center">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">密码</label>
                    </div>
                    <div class="col-9">
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <!-- btn submit -->
                <div class="d-flex justify-content-center login">
                    <button type="submit" class="btn">登录</button>
                    <a href="" id="register">注册</a>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>