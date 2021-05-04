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
                background: url("../img/login.png");
                background-size:100% 100%;
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
            /* Masuk ke SOSLING */
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

        </br>
        </br>
        
            <div id="child1" class="block center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="headline">
                                <h1>				
                                    MASUK KE <strong>SOSLING</strong>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="form-group">
                                     
                                    <label for="exampleInputEmail1">
                                        Email address</br>
                                    </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" />
                                </div>
                                
                                </br>
                                </br>
                                
                                <div class="form-group">
                                     
                                    <label for="exampleInputPassword1">
                                        Password</br>
                                    </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" />
                                </div>
                                
                                </br>
                                </br>
                                
                                <div class="checkbox">
                                     
                                    <label>
                                        <input type="checkbox" /> Ingat saya
                                    </label>
                                </div> 
                                
                                </br>
                                </br>
                                
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                Belum Punya Akun? </br> </br> <a class="btn" href="/daftar">Daftar Sekarang »</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>