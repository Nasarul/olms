<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="admin/assets/css/all.css"> -->
    <script src="https://kit.fontawesome.com/210c136c9c.js" crossorigin="anonymous"></script>

    <title>Document</title>

    <style type="text/css">
        .body {
            font-family: "Dosis", sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            height: 97vh;
        }

        .container .box {
            width: 250px;
            height: 250px;
            border-radius: 10px;
            background-color: white;
            margin: 20px;
            transition: 3s all ease-in-out;
            position: absolure;
            box-shadow: 0px 0px 40px background;
        }

        .container .box .boxContent {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 15px;
        }

        .container .box .boxContent .icon {
            color: #8293ff;
            font-size: 48px;
            padding: 15px;
        }

        .container .box .boxContent .title {
            font-size: 24px;
            color: #8293ff;
            font-weight: bold;
            padding: 10px;
        }

        .container .box .boxContent .desc {
            color: #8293ff;
            font-size: 15px;
            height: 20%;
        }

        .container .box .boxContent .hover {
            background: linear-gradient(130deg, #503bff 0%, #346614 100%);
            box-shadow: none;
        }

        .container .box:hover .icon,
        .container .box:hover .title,
        .container .box:hover .desc {
            color: wheat;
            transition: 3s all ease-in-out;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="box">
            <div class="boxContent">
                <!-- <i class="fa fa-microchip icon"></i> -->
                <i class="fa-solid fa-user-gear"></i>
                <h1 class="title">Admin</h1>
                <p class="desc">Click here for Admin login</p>
            </div>
            <a href="http://localhost/napd_olms/admin/index.php"></a>
        </div>
        <div class="box">
            <div class="boxContent">
                <!-- <i class="fa fa-calendar icon"></i> -->
                <i class="fa-solid fa-user-tie"></i>
                <h1 class="title">Teacher</h1>
                <p class="desc">Click here for Teacher login </p>
            </div>
            <a href="#"></a>
        </div>
        <div class="box">
            <div class="boxContent">
                <!-- <i class="fa fa-podcast icon"></i> -->
                <i class="fa-solid fa-people-group"></i>
                <h1 class="title">Student</h1>
                <p class="desc">Click here for Student login </p>
            </div>
            <a href="#"></a>
        </div>
    </div>



</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

</html>