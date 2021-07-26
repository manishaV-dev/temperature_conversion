<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Temperature Conversion</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-div {
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .left-side{
            background-color: rgb(138, 192, 253);
            border-radius: 32% 68% 73% 27% / 42% 41% 59% 58% ;
        }
        .left-side img{
            max-width: 400px;
            height: auto;
        }

        .right-side{
            width: 400px;
            height: 300px;
            background-color:rgb(138, 192, 253);
            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }
        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border: none;
            border-radius: 15px;
        }

        .selection{
            width: 100%;
            margin: 20px 0;
        }

        .sub{
            padding: 10px 16px;
            border-radius: 20px;
            outline: none;
            border: none;
            background-color: rgb(43, 42, 42);
            color: white;
            font-size: 0.8rem;
        }

        p{
            margin: 20px 0 0 0;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-temperature-low "></i>
                Temperature Conversion
            </a>
        </div>
    </nav>
    <h1 class="text-center my-4">Temperature Conversion</h1>

    <div class="container main-div">
        <div class="left-side">
            <img src="./image/temp.png" alt="error">
        </div>

        <div class="right-side">
            <form action="" method="post">
                <input type="text" name="num" placeholder="Enter a number" class="input1">

                <div class="selection">
                    <label for="">Celsius</label>
                    <input type="radio" name="units" value="cel" >

                    <label for="">Fahrenheit</label>
                    <input type="radio" name="units" value="feh">
                </div>
                <input type="submit" name="submit" value="Convert Now" class="sub">
            </form>

            <div>
                <p>
                    <?php

                        if(isset($_POST['submit'])){
                            $num = $_POST['num'];
                            $temp = $_POST['units'];

                            if($temp == "cel")
                            {
                                $result = $num * 9 / 5 + 32;
                                echo " The conversion value of C into F is " .$result;
                            }
                            else
                            {
                                $result = ($num - 32) * 5/ 9;
                                echo " The conversion value of F into C is " .$result;

                            }
                        }


                    ?>
                </p>
            </div>
        </div>
</div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>