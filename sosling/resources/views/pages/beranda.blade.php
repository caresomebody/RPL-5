<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Sosling')}}</title>
        
        <!-- Styles -->

        <style> 
            #frame {
                position: absolute;
                width: 100%;
                height: 100%;
                background: #E5E5E5;
                background-image: url("/img/home.png");
                background-size: 100% 100%;
            }

            #pad_left{
                left: 2%;
                padding-left: 10%;
                padding-top: 2%;
                
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
            }

            #sosling {
            position: relative;

            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 300%;
            line-height: 80%;

            color: #445B00;
            }

            .subheadline {
                color: #FBFF31;
                font-family: Roboto;
                font-style: italic;
            }

            .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }



            .block {
                height:70%;
                width:50%;
                opacity: 1.0;
                background: rgba(196, 196, 196, 0.35);
                border-radius: 30px;
                
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
            }

            .headline {
            position: absolute;
            width: 50%;
            height: 10%;
            align: center;
            text-align: center;

            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 10%;
            line-height: 20%;

            margin:auto;

            color: #000000;
            }

            .center {
                margin:auto;
                align: center;
                text-align: center;
            }
            .left {
                margin:auto auto auto 0;
                text-align: left;
            }
            .right {
                margin:auto 0 auto auto;
                text-align: right;
            }
        </style>    

    </head>

    <body>

        <div id="frame">

        <div id="pad_left">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                            <h2>
                                <a class="btn" href="/beranda">Beranda</a> 	<a class="btn" href="/pesanan">Pesanan</a>		 <a class="btn" href="/bantuan">Bantuan</a>
                            </h2>
                        </div>
                    </div>	
            
            
                <div class="row">
                    <div class="col-md-12">
                        
                        <div id="sosling">
                            <h1>
                                SOSLING
                            </h1>
                        </div>
                        <div class="page-header">
                            <h1>
                                SOSIAL TRAVELING
                            </h1>
                        </div>
                        
                        </br>
                        </br>
                        </br>
                        
                        <div class="page-header subheadline">
                            <h1>
                                PLAN YOUR TRAVEL NOW
                            </h1>
                        </div>
                        
                        <div class="btn-group" role="group">
                            <a class="button" href="/masuk" role="button">Masuk</a>
                            <a class="button" href="/daftar" role="button">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>