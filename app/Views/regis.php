<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Fun Run] ลงทะเบียน</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>

    <div class="containers bg">
      <div class="navBar">
        <div class="logo">
        <li><a href="index.php">FunRun</a></li>
        </div>
      <ul>
        <li><a href="/register">ลงทะเบียน</a></li>
        <li><a href="#">ดูรายชื่อสมัคร</a></li>
      </ul>
    </div>


    <div class="container">
      <div class="h1">
        <h1>ลงทะเบียน</h1>
      </div>
        <form action="/insert" method="POST" class="signin-form">
            <div class="row" >
                <div class="col">
                    <label>เลขบัตรประชาชน</label>
                    <input type="text" name="id_card" maxlength="13" class="form-control" id="id_card" value="<?= set_value('id_card'); ?>">
                </div>
                <div class="col">
                    <label>ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>อายุ</label>
                    <input type="text" name="age" class="form-control" id="age" value="<?= set_value('age'); ?>">
                </div>
                <div class="col">
                    <label>รหัสผ่าน</label>
                    <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>ID</label>
                    <input type="text" name="ID" maxlength="10" class="form-control" id="ID" value="<?= set_value('ID'); ?>">
                </div>
            </div>

            <div class="radio2">
              <input type="radio" id="category_run" name="category_run" value="1"> <label for="FUN RUN">FUN RUN</label>
              <input type="radio" id="category_run" name="category_run" value="2"> <label for="MINI MARATHON">MINI MARATHON</label>
              <input type="radio" id="category_run" name="category_run" value="3"> <label for="VIP">VIP</label>
              <input type="radio" id="category_run" name="category_run" value="4"> <label for="SUPER VIP">SUPER VIP</label>
            </div>
            

            <div class="button">
                <button type="submit" class="btn btn-primary">
                    บันทึกข้อมูล
                </button>
                <a href="/" class="btn btn2 btn-danger">กลับหน้าหลัก</a>
            </div>
        </form>

    </div>

</body>

</html>