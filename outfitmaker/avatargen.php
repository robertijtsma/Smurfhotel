<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synt4x: Avatar Generator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <link href="./app/css/avatargenerate.css" rel="stylesheet" />
</head>
<body>


<div class="container">

    <div id="avatarSelector" class="builder-viewport">

        <!-- Main Navigation -->
        <div class="main-navigation">

            <ul>
                <li class="active">
                    <a href="#" data-navigate="hd" data-subnav="gender"><img src="./app/img/body.png" /></a>
                </li>

                <li>
                    <a href="#" data-navigate="hr" data-subnav="hair"><img src="./app/img/hair.png" /></a>
                </li>

                <li>
                    <a href="#" data-navigate="ch" data-subnav="tops"><img src="./app/img/tops.png" /></a>
                </li>

                <li>
                    <a href="#" data-navigate="lg" data-subnav="bottoms"><img src="./app/img/bottoms.png" /></a>
                </li>

                <li>
                    <a href="#"><img src="./app/img/saved-looks.png" /></a>
                </li>
            </ul>

        </div>
        <!-- End Main Navigation -->

        <!-- Sub Navigation -->
        <div class="sub-navigation">

            <ul id="gender" class="display">

                <li>
                    <a href="#" class="male nav-selected" data-gender="M"></a>
                </li>

                <li>
                    <a href="#" class="female" data-gender="F"></a>
                </li>
            </ul>

            <ul id="hair" class="hidden">

                <li>
                    <a href="#" class="hair nav-selected" data-navigate="hr"></a>
                </li>

                <li>
                    <a href="#" class="hats" data-navigate="ha"></a>
                </li>

                <li>
                    <a href="#" class="hair-accessories" data-navigate="he"></a>
                </li>

                <li>
                    <a href="#" class="glasses" data-navigate="ea"></a>
                </li>

                <li>
                    <a href="#" class="moustaches" data-navigate="fa"></a>
                </li>


            </ul>

            <ul id="tops" class="hidden">

                <li>
                    <a href="#" class="tops nav-selected" data-navigate="ch"></a>
                </li>

                <li>
                    <a href="#" class="chest" data-navigate="cp"></a>
                </li>

                <li>
                    <a href="#" class="jackets" data-navigate="cc"></a>
                </li>

                <li>
                    <a href="#" class="accessories" data-navigate="ca"></a>
                </li>
            </ul>

            <ul id="bottoms" class="hidden">

                <li>
                    <a href="#" class="bottoms nav-selected" data-navigate="lg"></a>
                </li>

                <li>
                    <a href="#" class="shoes" data-navigate="sh"></a>
                </li>

                <li>
                    <a href="#" class="belts" data-navigate="wa"></a>
                </li>

            </ul>

        </div>
        <!-- End Sub Navigation -->


        <div id="clothes-colors">
            <div id="clothes"></div>
            <div id="colors"></div>
        </div>


        <div id="avatar">

            <img id="myHabbo" src="" alt="My Habbo" title="My Habbo" />

            <form action="" id="avatarSelectionForm" method="POST" name="avatarSelectionPost">

                <input type="hidden" name="habbo-avatar" id="avatar-code">

                <button type="submit">Save Changes</button>

            </form>

        </div>

    </div>

</div>


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="./app/js/jquery.avatargenerate.min.js" type="text/javascript"></script>

</body>
</html>
