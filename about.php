<?php include 'db_connect.php' ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
    }

    h3 {
        margin: 0;
        font-weight: 700;
    }

    h2 {
        margin: 0;
    }


    .center-con {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .portrait {
        margin: 20px;
        border-radius: 225px;
    }

    .cards {
        width: 80%;

        margin-top: 60px;

        display: flex;
        flex-wrap: wrap;
        align-items: baseline;
        justify-content: center;
    }


    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 450px;
        margin: 8px;
        background: #242526;
        color: white;
    }

    .about-section {
        align-items: center;
        padding: 50px;
        text-align: center;
        background: #242526;
        color: white;
        width: fit-content;
        border-radius: 10px;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    .mainAbout {
        display: flex;
        align-items: center;
        flex-direction: column;
        padding-top: 2.5rem;
    }
    </style>
</head>

<body>
    <div class="mainAbout">

        <div class="about-section">
            <h1>About Us</h1>
            <p>We are a group of Computer Engineering students that aims to help young innovators and proffesionals like
                us to showcase their creative works and mind-blowing ideas one post at a time.
            </p>
            <p></p>
        </div>

        <div class="center-con">
            <div class="cards">
                <div class="card">
                    <div class="center-con">
                        <img class="portrait" src="images/portraits/magsakay.jpg" alt="John Paul" style="width:50%">
                        <h2>John Paul I. Magsakay</h2>
                        <p class="title">Member</p>
                    </div>
                    <div class="container">
                        <p>From Plaridel, Bulacan</p>
                        <p>johnpaul.magsakay.i@bulsu.edu.ph</p>
                    </div>
                </div>

                <div class="card">
                    <div class="center-con">
                        <img class="portrait" src="images/portraits/magsakay.jpg" alt="John Paul" style="width:50%">
                        <h2>Jade Ross D. Banag</h2>
                        <p class="title">Member</p>
                    </div>
                    <div class="container">
                        <p>From Pulilan, Bulacan</p>
                        <p>jadeross.banag.d@bulsu.edu.ph</p>
                    </div>
                </div>

                <div class="card">
                    <div class="center-con">
                        <img class="portrait" src="images/portraits/magsakay.jpg" alt="John Paul" style="width:50%">
                        <h2>John Paul I. Magsakay</h2>
                        <p class="title">Member</p>
                    </div>
                    <div class="container">
                        <p>From Plaridel, Bulacan</p>
                        <p>johnpaul.magsakay.i@bulsu.edu.ph</p>
                    </div>
                </div>

                <div class="card">
                    <div class="center-con">
                        <img class="portrait" src="images/portraits/magsakay.jpg" alt="John Paul" style="width:50%">
                        <h2>John Paul I. Magsakay</h2>
                        <p class="title">Member</p>
                    </div>
                    <div class="container">
                        <p>From Plaridel, Bulacan</p>
                        <p>johnpaul.magsakay.i@bulsu.edu.ph</p>
                    </div>
                </div>

                <div class="card">
                    <div class="center-con">
                        <img class="portrait" src="images/portraits/magsakay.jpg" alt="John Paul" style="width:50%">
                        <h2>John Paul I. Magsakay</h2>
                        <p class="title">Member</p>
                    </div>
                    <div class="container">
                        <p>From Plaridel, Bulacan</p>
                        <p>johnpaul.magsakay.i@bulsu.edu.ph</p>
                    </div>
                </div>
            </div>
</body>

</html>