<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins');

    *{
        margin: 0;
        padding: 0;
        font-family: Poppins;
    }
    section{
        position: relative;
        width: 100%;
        height: 100vh;
        background: #3586ff;
        overflow: hidden;
    }
    section .air{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
        background-size: 1000px 100px
    }
    section .air.air1{
        animation: wave 30s linear infinite;
        z-index: 4;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }
    section .air.air2{
        animation: wave2 15s linear infinite;
        z-index: 3;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
    }
    section .air.air3{
        animation: wave 30s linear infinite;
        z-index: 2;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }
    section .air.air4{
        animation: wave2 5s linear infinite;
        z-index: 1;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20px;
    }
    @keyframes wave{
    0%{
        background-position-x: 0px; 
    }
    100%{
        background-position-x: 1000px; 
    }
    }
    @keyframes wave2{
    0%{
        background-position-x: 0px; 
    }
    100%{
        background-position-x: -1000px; 
    }
    }
    .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 75vh;
        }
        .container img{
            filter: drop-shadow(0px 0px 5px black);
        }
        .text-container {
            background-color: #f4f4f4;
            border: 1px solid #ddd; 
            border-radius: 5px;
            width: 300px;
            margin: 0 auto;
            box-shadow: rgba(0, 0, 0, 0.425) 1px 1px 10px;
            margin-bottom: 10px;
            z-index: 10;
            text-align: center;
        }
        .button-container button {
        padding: 10px 20px;
        border: none;
        background-color: #00ffea;
        color: rgb(0, 0, 0);
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-weight: 300;
        }

        .button-container button:hover {
            background-color: #00e6d8;
            animation: rotateButton 0.8s linear infinite;
        }
        @keyframes rotateButton {
            0% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(5deg);
            }
            50% {
                transform: rotate(-5deg);
            }
            75% {
                transform: rotate(5deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }
</style>
</head>
<body>
    <section>
        <div class="container">
            <img src="img/2.png" width="300">
            <div class="text-container">
                <h3>SUGOI!</h3>
                <p>Fungsi form login bekerja😁👌</p>
            </div>
            <form action="index.php" method="POST" class="button-container">
                    <button type="submit">Logout</button>
                </form>
        </div>
    <div class='air air1'></div>
    <div class='air air2'></div>
    <div class='air air3'></div>
    <div class='air air4'></div>
    </section>
</body>
</html>