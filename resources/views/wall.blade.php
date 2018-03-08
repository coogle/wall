<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Wall</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            input[type=text] {
               height: 50px;
               font-size: 14pt;
            }
            
            
            input[type=submit] {
                padding:5px 15px; 
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Demo Wall
                </div>
                <form action="/" method="POST">
                		{{ csrf_field() }}
                		<input type="text" size="50" name="content" placeholder="Write something on the wall">
                		<input type="submit" value="Publish" style="font-size:14pt"/>
                </form>
                <hr/>
                @foreach($entries as $entry)
                <p>{{ $entry->message }} (<i>{{ $entry->created_at->format('H:i Y-m-d') }})</i>
                @endforeach
            </div>
        </div>
    </body>
</html>
