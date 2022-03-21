<style>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
