<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>Furnifygus - Your request has been accepted!</title>
        <meta property="og:title" content="Furnifygus - Your request has been accepted!" />
        <meta property="og:image" content="logo-white.svg"/>
        
        <meta property="og:description" content="Furnifygus - Your request has been accepted!">
        <meta name="description" content="Furnifygus - Your request has been accepted!">
        <script src="resource/js/jquery.min.js"></script>
        <link rel="stylesheet" href="resource/css/icons.css">
        <link rel="stylesheet" href="resource/css/bootstrap.css">
        

        <link rel="shortcut icon" href="logo-white.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Mate:ital@0;1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="resource/js/lightbox.js"></script>

       
        
        </head>
        <body>

            <style>#cookie-banner {position: fixed; bottom: 0; left: 0; right: 0; background: #f8f9fa; padding: 15px; box-shadow: 0 -2px 10px rgba(0,0,0,0.1); z-index: 1000; display: none;}#cookie-banner p {margin: 0 0 10px 0; font-size: 14px; line-height: 1.4;}#cookie-banner .buttons {display: flex; gap: 10px;}#cookie-banner button {padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;}#cookie-banner .accept {background: #28a745; color: white;}#cookie-banner .close {background: #6c757d; color: white;}@media (max-width: 768px) {#cookie-banner {flex-direction: column; align-items: center;}#cookie-banner .buttons {width: 100%; justify-content: center;}}</style>
<div id="cookie-banner"><p>We use cookies to ensure you get the best experience on our website. <a href="cookiePolicy.html">Cookie Policy</a></p><div class="buttons"><button class="accept">Accept</button><button class="close">Close</button></div></div>
<script>document.addEventListener('DOMContentLoaded', function() {if (!localStorage.getItem('cookieAccepted')) {document.getElementById('cookie-banner').style.display = 'block';}document.querySelector('.accept').addEventListener('click', function() {localStorage.setItem('cookieAccepted', 'true');document.getElementById('cookie-banner').style.display = 'none';});document.querySelector('.close').addEventListener('click', function() {document.getElementById('cookie-banner').style.display = 'none';});});</script>
            <div class="header">
                <div class="layout"></div>
                <div class="container inventory--popupop">
                    <div class="nav">
                        <div class="col">
                            <img src=logo-white.png alt="logo">
                            <h4 class="site__title">Furnifygus</h4> 
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="./#review">Comments</a></li>
                                <li><a href="./#worker">Our People</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col head__title">
                            <h2>Custom Wooden Floating Vanities With Quartz Tops</h2>
                            
                            </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {

                function hexToRgba(hexColor, opacityLevel) {
                    hexColor = hexColor.startsWith('#') ? hexColor.slice(1) : hexColor;
                    const red = parseInt(hexColor.slice(0, 2), 16);
                    const green = parseInt(hexColor.slice(2, 4), 16);
                    const blue = parseInt(hexColor.slice(4, 6), 16);
                    const alpha = opacityLevel / 100;

                    return `rgba(${red}, ${green}, ${blue}, ${alpha})`;
                }

    
                $('.layout').css('background-color', hexToRgba('#0a1b16',50));
            });
            </script>
            


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-checkout--iconcd{
		margin: 0px;
		padding: 0px;
		font-family: 'Domine', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 330px 0px;
	}
	.bodyClass1-checkout--iconcd{
		background: #f8f5f1;
		color: #ffffff;
	}
	.bodyClass2-checkout--iconcd{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-checkout--iconcd{
		background: #fff;
		color: #111;
	}
	.wrapage-block-checkout--iconcd{
		background-size: 100%;
		width: 100%;
	}
	.box_main-checkout--iconcd{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-checkout--iconcd h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-checkout--iconcd p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-checkout--iconcd{
		text-align: center;
	}
	.mainBlock-checkout--iconcd ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-checkout--iconcd ul>li span{
		font-weight: bold;
	}
	.mainBlock-checkout--iconcd{
		max-width: 880px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-checkout--iconcd .cBlock-checkout--iconcd{
		text-align: center;
	}

	.bodyClass3-checkout--iconcd .mainBlock-checkout--iconcd{
		background: none;
		border-top: 2px dotted #eac8af;
		border-bottom: 2px dotted #eac8af;
	}
	.bodyClass2-checkout--iconcd .mainBlock-checkout--iconcd{
		background: #0A043C;
		color: #fff !important;
		box-shadow: 0px 0px 0px #0A043C;
	}
	.bodyClass2-checkout--iconcd .mainBlock-checkout--iconcd p{
		color: #fff !important;
	}
	.bodyClass1-checkout--iconcd .mainBlock-checkout--iconcd{
		background: #243727;
		color: #ffffff;
		border-left: 4px solid #FFD700;
	}
	.bodyClass1-checkout--iconcd .mainBlock-checkout--iconcd p{
		color: #ffffff !important;
	}
	.order-checkout--iconcd{
		font-size: 22px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-checkout--iconcd p{
			padding: 0px 15px;
		  }
		  .box_main-checkout--iconcd h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-checkout--iconcd{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-checkout--iconcd{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-checkout--iconcd" id="mainWrapp-checkout--iconcd">


	<div class="wrapage-block-checkout--iconcd">
		<div class="box_main-checkout--iconcd">
			<div class="mainBlock-checkout--iconcd">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-checkout--iconcd">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



    <div id="contact" class="footer">
        <div class="container">
            
            <div class="row footer-blok flex-row">
                <div class="block__contacts">
                    
                    <a href="policy.html" target="_blank">Privacy policy</a>
                    <a href="terms.html" target="_blank">Terms & Conditions</a>
                    <a href="disclaimer.html" target="_blank">Disclaimer</a>
                
                </div>

                
            </div>
        </div>
    </div>


    <style>
        body{
            direction: ltr;
            font-family: 'Mate', sans-serif !important;
            font-size: 17px;
            margin: 0;
            padding: 0;
        }

        .header{
            background: url(assets/img/bg.jpg) no-repeat;
            width: 100%;
            position: relative;
            background-position: center;
            background-size: cover;
        }

        .layout{
            position: absolute;
            width: 100%; 
            height: 100%;
            background-color: #0a1b16;
        }

        .header .container{
            position: relative;
            padding: 17px;
        }

        .nav{
            position: relative;
            right: 0;
            left: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .container .row{
            padding: 40px;
        }

        .nav .col img{
            width: 40px;
        }
        .nav a{
            color: #fff;
        }
        .site__title{
            padding: 5px;
            color: #fff;
        }
        .head__title h2 {
            color: #fff;
        }
        .nav .col{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            font-size: 18px;
            font-weight: bold;
        }

        .nav .col ul {
            padding-left: 17px;
            display: flex;
            list-style: none;
            align-items: center;
            justify-content: flex-end;
        }
        .nav .col ul li {
            font-size: 16px;
            margin-left: 34px;
            padding-left: 34px;
            transition: 150ms all ease-in-out;
            cursor: pointer;
        }

        .nav .col ul li:hover{
            text-decoration: underline;
            text-decoration-color: #045dc2;
            text-underline-offset: 10px;
        }


        .head__title{
            margin-top: 34px;
        }

        .head__title h2{
            text-align: center;
        }

        h3{
            text-align: center;
        }

        a{
            color: #333;
            text-decoration-line: none;
        }


        .rand_btn4{
            display: inline-block;
            padding: 15px 25px;
            border-radius: 25px;
            text-decoration: none;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
            transition: .4s;
            margin-top: 15px;
        }

        .rand_btn4:hover {
            background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
            background-image: linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
        }

        .rand_btn4{
            display: inline-block;
            padding: 0.5em 1em;
            text-decoration: none;
            border-radius: 3px;
            font-weight: bold;
            color: #FFF;
            background-image: -webkit-linear-gradient(45deg, #709dff 0%, #b0c9ff 100%);
            background-image: linear-gradient(45deg, #709dff 0%, #b0c9ff 100%);
            transition: .4s;
        }

        .rand_btn4:hover{
            background-image: -webkit-linear-gradient(45deg, #709dff 50%, #b0c9ff 100%);
            background-image: linear-gradient(45deg, #709dff 50%, #b0c9ff 100%);
        }


        .rand_btn5 {
            position: relative;
            display: inline-block;
            font-weight: bold;
            padding: 8px 10px 5px 10px;
            text-decoration: none;
            color: #FFA000;
            background: #fff1da;
            border-bottom: solid 4px #FFA000;
            border-radius: 15px 15px 0 0;
            transition: .4s;
        }

        .rand_btn5:hover {
            background: #ffc25c;
            color: #FFF;
        }

        .rand_btn5{
            display: inline-block;
            padding: 0.5em 1em;
            text-decoration: none;
            color: #67c5ff;
            border: dashed 1px #67c5ff;
            border-radius: 3px;
            transition: .4s;
        }

        .rand_btn5:hover {
            border-style: dotted;
            color: #679efd;
        }


        .advantages{
            background-color: #ffffff;
            width: 100%;
            height: auto;
        }
        .title__advantages{
            margin: 52px 0;
        }

        .box {
            width: 100%;
            height: 100%;
            margin:13px;
            padding: 23px;
            box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
            border-radius: 8px 8px 50px 8px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 23px;
        }

        .box__info{
            display: flex;
            justify-content: center;
        }

        i{
            font-size: 48px;
        }

        p{
            margin-top: 8px;
        }
        .footer-blok{
            gap: 26px;
        }
        .main__block{
            display: flex;
            flex-direction: column;
            gap: 34px;
            align-items: center;
        }

        .title__mainBlock{
            margin: 89px 0 52px 0;
        }

        .imagesNew {
            float: left;
            max-width: 100%;
            margin: 17px;
            padding-top: 13px;
            padding-right:  23px;
            object-fit: contain;
            height: 396px;
            width: 100%;
        }


        .visit{
            background-color: #ffffff;
            width: 100%;
            height: auto;
        }


        .title__visit{
            margin:  52px 0;
        }

        .visit__info{
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .visit__info i{
            font-size: 20px;
            margin-top: 23px;
        }

        .image__visit img{
            width: 50%;
            height: 350px;

        }

        .blocs-visit {
            display: flex;
            align-items: center;
        }
        h5{
            font-size: 26px;
            font-weight: bold;
        }
        
        .forms{
            background: url(assets/img/bg-2.jpg) no-repeat;
            width: 100%; 
            position: relative; 
            background-position: center;
            background-size: cover;
        }

        .forms__layout{
            width: 100%; 
            background: rgba(0,0,0,0.9); color: #fff;;
        }

        .forms .container{
            position: relative;
            padding: 17px;
        }

        .form__title{
            text-align: center;
        }

        .form-container {
            width: 100%;
            margin: 44px auto 0 auto;
        }

        .form-group {
            margin-bottom: 13px;
            display: flex;
            flex-direction: column;
            gap: 13px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
        }

        .input-user--container-input{
            width: 100%;
            padding: 5px;
            font-size: 14px;
        }
        .textarea-user--container-input{
            width: 100%;
            padding: 5px;
            font-size: 14px;
        }
        .form-button {
            padding: 10px 0;
            width: 100%;
            margin: 17px auto 17px auto;
            font-size: 16px;
            background-color: #e4850a;
            color: white;
            border: none;
            cursor: pointer;
        }
        .om-padi {
            padding: 89px 0px;
        }
        .reviews{
            background-color: #ffffff;
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }


        .title__reviews{
            margin: 150px 0 80px 0;
        }

        .block_rev{
            display: flex;
        }

        .block {
            width: 45%;
            padding:  23px;
            margin: 17px;
            box-shadow: 0px 0 15px rgba(0, 0, 0, .15);
            position: relative;
            border-radius: 8px 8px 50px 8px;
            display: flex;
        }

        .block img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
        }

        .block h2 {
            font-size: 15px;
            margin-top: 5px;
            margin-bottom:5px;
            font-weight: bold;
            padding-left: 13px;
            padding-right: 13px;
        }

        .block p {
            margin-top: 0;
            font-size: 16px;
            padding-left: 13px;
            padding-right: 13px;
        }


         .stars {
            margin: 0 0 0 13px;
        }

        .stars i {
            color: #ffc107;
            font-size: 12px;
        }

        .workers{
            background: #ff7171;
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }


        .title__workers{
            margin: 44px 0;
        }

        .block__workers {
            width: 306px;
            text-align: center;
            padding-bottom: 23px;
        }

        .block__workers img {
            width: 200px;
            height: 200px;
            border-radius: 8px 8px 50px 8px;
        }

        .block__workers h2 {
            font-size: 15px;
            margin-top: 5px;
            margin-bottom:5px;
            font-weight: bold;
            padding-left: 13px;
            padding-right: 13px;
        }       


        .block__workers p {
            margin-top: 0;
            font-size: 12px;
            padding-left: 15px;
            padding-right: 15px;
        }


        .qestion-answer{
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }


        .title__qestion-answer{
            margin-top: 52px;
            margin-bottom: 50px;
        }

        .block__qestion-answer {
            width: auto;
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
        }


        .block__qestion-answer h2 {
            #eeecda;
            font-size: 15px;
            margin-top: 5px;
            margin-bottom:5px;
            font-weight: bold;
            padding-left: 13px;
            padding-right: 13px;
        }       

        .answer_icon{
            display: flex;
        }

        .answer_icon i{
            margin: auto;
            padding-right: 10px;
        }


        .block__qestion-answer p {
            margin: auto;
            padding-right: 15px;
        }


        .footer{
            background-color: #ff7171;
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }


        .title__footer{
            margin: 52px 0 80px 0;
        }

        .block__contacts {
            flex: 1;
            height: auto;
            border-radius: 8px 8px 50px 8px;
            background-color:  #222222;
            color: #ffffff;
            padding: 20px;
            margin-left: auto;
            display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
        }

        .block__contacts a{
            word-break: break-all;
            display: flex;
            padding-left: 15px;
            color: #fff;
        }

        .block__map {
            flex: 1;
            height: 334px;
        }
        .block__map iframe{
            height: 100%;
        }

        .block__contacts p {
            font-size: 18px;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 10;
            padding-top: 20;
        }
         .image__visit {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
         }

      

        @media (max-width: 1200px){
            .nav   {
                flex-direction: column !important;
            }
        }
        @media (max-width: 767px){
            .nav .col ul li {
                margin-left: 0;
            }
        }

        @media (max-width: 991px){
            .box__info{
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .box{
                width: 80%;
            }
            .block{
                width: 100%;
                margin: 10px auto 10px auto;
            }
        }

        @media (max-width: 768px){
            .blocs-visit {
                flex-direction: column !important;
            }
            .block__workers{
                margin: 0 auto;
            }
            .block__contacts {
                width: 100%
            }

            .block__map {
                width: 100%;
            }
            .block-visit {
                flex-direction: column !important;
            }
        }
        .form__title{
            margin: 0;
        }
        .paddingBlock{
            padding-top: 99px !important;
            padding-bottom: 99px !important;
        }

        @media  screen and (max-width: 1399px) and (min-width: 768px){
            .block__workers{
                width: 50%;
            }
        }

        @media  screen and (max-width: 991) and (min-width: 768px){
            .block__contacts {
                height: 390px;
            }
        }
        


        @media (max-width: 575px){
            .container .row {
                flex-direction: column !important;
            }

            .imagesNew {
                height: auto;
            }
            button{
                width: 100%;
            }
            .nav .col ul {
                display: flex;
                flex-direction: column;
            }

            .block_rev{
                display: flex;         
                flex-direction: column;
                justify-content: center;
            }
            .block{
                width: 80%;
                display: block;
            }

            .visit .row{
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .visit__info{
                width: 100%;
            }
            
        }

        .newsd{
            width: 100%;
            height: 100vh;
            padding: 50px;
            background-color: #ff7171;
        }
    
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>



        <script>
            const headBoxRow = document.querySelector('.headBox .row');

            if (headBoxRow && headBoxRow.classList.contains('flex-column')) {
                const logtipBox = document.querySelector('.logtip--box');
                const headBoxH3 = document.querySelector('.headBox h3');

                if (logtipBox) {
                    logtipBox.style.justifyContent = 'center';
                }

                if (headBoxH3) {
                    headBoxH3.style.textAlign = 'center';
                }
            }

            function changeWorkers() {
                const workers = document.querySelector('.workers');
                if (workers) {
                    const bgColorGhh = window.getComputedStyle(workers).backgroundColor;
                    if (tinycolor(bgColorGhh).isLight()) {
                        workers.style.color = '#222';
                    } else {
                        workers.style.color = '#fff';
                    }
                }

                const padfs = document.querySelector('.padfs');
                if (padfs && padfs.classList.contains('flex-column')) {
                    padfs.style.gap = '40px';
                    const contactWrapper = document.querySelector('.contact__wrapper');
                    if (contactWrapper) {
                        contactWrapper.style.flexDirection = 'row';
                        contactWrapper.style.flexWrap = 'wrap';
                    }
                }
            }
            changeWorkers();

            function getRandomFlexDirection() {
                const directions = ['column', 'column-reverse'];
                return directions[Math.floor(Math.random() * directions.length)];
            }

            const randomFlexContainer = document.querySelector('.block_rev');
            if (randomFlexContainer) {
                const blocks = randomFlexContainer.querySelectorAll('.block');
                const flexDirection = getRandomFlexDirection();

                blocks.forEach(block => {
                    block.style.flexDirection = flexDirection;
                });

                if (window.getComputedStyle(blocks[0]).flexDirection === 'row') {
                    blocks.forEach(block => {
                        block.style.textAlign = 'left';
                    });
                } else if (window.getComputedStyle(blocks[0]).flexDirection === 'row-reverse') {
                    blocks.forEach(block => {
                        block.style.textAlign = 'right';
                    });

                    const blName = document.querySelector('.bl__name');
                    if (blName) {
                        blName.style.textAlign = 'center';
                    }
                }
            }

            function findNew() {
                const newsd = document.querySelector('.newsd');
                if (newsd) {
                    const blackColor = window.getComputedStyle(newsd).backgroundColor;
                    newsd.style.color = tinycolor(blackColor).isLight() ? '#333' : '#fff';
                }
            }
            findNew();

            document.addEventListener("DOMContentLoaded", function() {
                const imgElements = document.querySelectorAll('.block__workers img');
                imgElements.forEach(function(imgElement) {
                    const randomNumber = Math.random();
                    const ifCaseRadius = '8px 8px 50px 8px';
                    const elseCaseRadius = '50%';

                    if (randomNumber < 0.5) {
                    imgElement.style.borderRadius = ifCaseRadius;
                    } else {
                    imgElement.style.borderRadius = elseCaseRadius;
                    }
                });
            });
        </script>
          
            

</body>
</html>
