<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="/"><i class="fas fa-mail-bulk"></i> Send Email System</a>
         <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <span>นายวรปรัชญ์ รัตนะ</span>
            <span>5910110288</span>
            <span>section 02</span>
         </li>
         </a>
      </nav>

    <body>
    <div class="flex-center position-ref full-height" style="background-color:LightGreen;">
           
            <div class="content" sty>
            
                    <div class="title m-b-md">
                        5910110288
                    </div>
                    <div class="flex-center"> 
                        <?php
                            echo Form::open(array('url' => '/sendhtmlemail'));
                        ?>

                        Email:   <textarea name="email" cols="50" rows="1.5"><?php Form::text('email')?></textarea>
                        Name:    <textarea name="email" cols="50" rows="1.5"><?php Form::text('user')?></textarea>
                        Subject: <textarea name="subject" cols="50" rows="1.5"><?php Form::text('subject')?></textarea>
                        <br>
                        Content: <textarea name="content"cols="50" rows="5"><?php Form::text('content')?></textarea>
                        <br>
                        <?php   
                            echo Form :: submit('Submit'); 
                            echo Form :: close();
                        ?>
                    </div>
            </div>
        </div>
    </body>
</html>
