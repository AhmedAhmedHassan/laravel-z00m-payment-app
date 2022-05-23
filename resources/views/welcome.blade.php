<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ZaTa3r</title>

        <style>
            body, html {
                height: 100%;
                overflow: hidden;
                margin:0;
            }
            .bgimg {
                /* Background image */
                background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
                /* Full-screen */
                height: 100%;
                /* Center the background image */
                background-position: center;
                /* Scale and zoom in the image */
                background-size: cover;
                /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
                position: relative;
                /* Add a white text color to all elements inside the .bgimg container */
                color: white;
                /* Add a font */
                font-family: "Courier New", Courier, monospace;
                /* Set the font-size to 25 pixels */
                font-size: 25px;
            }

            /* Position text in the top-left corner */
            .topleft {
                position: absolute;
                top: 0;
                left: 16px;
            }

            /* Position text in the bottom-left corner */
            .bottomleft {
                position: absolute;
                bottom: 0;
                left: 16px;
            }

            /* Position text in the middle */
            .middle {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            /* Style the <hr> element */
            hr {
                margin: auto;
                width: 40%;
            }
        </style>
    </head>
    <body class="">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="bgimg">
                    <div class="topleft">
                      <p>ZaTa3r</p>
                    </div>
                    <div class="middle">
                      <h1>COMING SOON</h1>
                      <hr>
                      <p>2 Months</p>
                    </div>
                    <div class="bottomleft">
                      <p>For Cooking and Receipes, Make Something Great</p>
                    </div>
                  </div>
            </div>
    </body>
</html>
