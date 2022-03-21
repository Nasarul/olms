<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLMS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/210c136c9c.js" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #262626;
        }

        ul {
            margin: 0;
            padding: 0;
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        ul li {
            list-style: none;
            margin: 0 15px;
        }

        ul li a {
            position: relative;
            display: block;
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 63px;
            background: #333;
            border-radius: 50%;
            font-size: 30px;
            color: #666;
            transition: .5s;
        }

        samp {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            text-align: center;
            line-height: 80px;
        }

        ul li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #ffee10;
            transition: .5s;
            transform: scale(.9);
            z-index: -1;
        }

        ul li a:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #ffee10;
        }

        ul li a:hover {
            color: #ffee10;
            box-shadow: 0 0 5px #ffee10;
            text-shadow: 0 0 5px #ffee10;
        }

        h2 {
            padding: 40px 0px 0px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            text-align: center;
            color: #666;
        }

        h5 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: larger;
            text-align: center;
            color: #358;
        }
    </style>

</head>


<body>

    <h2>Welcome to <br>Online Lecture Management System</h2>
    <div class="container">
    <ul>
        <li>
            <a href="#">
                <i class="fa-solid fa-user-gear"></i>
                <samp><br>Admin</samp>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-user-tie"></i>
                <samp><br>Teacher</samp>
            </a>

        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-people-group"></i>
                <samp><br>Student</samp>
            </a>
        </li>
    </ul>
    </div>

    <h5>Select your options</h5>

</body>


</html>