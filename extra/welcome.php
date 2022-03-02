<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            border-radius: 10px;
        }

        .container .box {
            width: 250px;
            height: 250px;
            border-radius: 10px;
            background-color: white;
            margin: 20px;
            transition: 3s all ease-in-out;
            position: absolure;
            border: 2px solid green;
        }

        .container .box .boxContent {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 16px;
            padding: 15px;
            background-color: white;
        }

        .container .box .boxContent .icon {
            color: green;
            font-size: 48px;
            padding: 15px;


        }

        .container .box .boxContent .title {
            font-size: 24px;
            color: green;
            padding: 30px;
        }

        .container .box .boxContent .desc {
            color: #8293ff;
            font-size: 50px;
            height: 20%;
        }

        .container .box .boxContent:hover {
            background-color: green;
            padding: 0%;
            border: green;
            margin: 0%;
            border-radius: 10px;
        }

        .container .box:hover .icon,
        .container .box:hover .title,
        .container .box:hover .desc {
            color: white;
            background-color: green;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="box">
            <div class="boxContent">
            <i class="fa-solid fa-user-gear"></i>
                <i class="fa-solid fa-user-lock"></i>           
                <h1 class="title">Admin</h1>
            </div>
            <a href="#"></a>
        </div>
        <div class="box">
            <div class="boxContent">
                <i class="fa fa-calendar icon"></i>
                <h1 class="title">Teacher</h1>
            </div>
            <a href="#"></a>
        </div>
        <div class="box">
            <div class="boxContent">
                <i class="fa-solid fa-users"></i>
                <h1 class="title">Student</h1>
            </div>
            <a href="#"></a>
        </div>
    </div>



</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

</html>