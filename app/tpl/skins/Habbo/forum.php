<?php
    /*---------- Forum @ RevCMS -----------*/
    /*-> This was created by iBennish      */
    /*-> From RaGEZONE and if editted or   */
    /*-> Source used, please give credit!  */
    /*-------------------------------------*/
    global $users;
    global $forum;

    // Set some useful vars
    $u_id = $_SESSION['user']['id'];
    $u_name = $forum->getUserData($u_id, "username");
    //if($forum->sessionExists($u_id) == false) { die; }

    // Check for forum account
    if($forum->checkForAccount($u_id) == false) {
        $forum->createForumAccount($u_id);
        echo '<meta http-equiv="refresh" content="0;{url}/forum">';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Forum</title>
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        <!-- TinyMCE -->
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                mode : "textareas",
                theme : "simple"
            });
        </script>
        <!-- /TinyMCE -->
        <script type="text/javascript">
            function subreply() {
                document.getElementById("replybox").submit();
            }
            function postthread() {
                document.getElementById("newthreadbox").submit();
            }
        </script>
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = <?php echo $u_id; ?>;
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/lightweightmepage.css" type="text/css" />
        <script src="{url}/app/tpl/skins/Habbo/js/lightweightmepage.js" type="text/javascript"></script>
        <script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/js/moredata.js" type="text/javascript"></script>
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie8.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 8]>
        <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
        <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie6.css" type="text/css" />
        <script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
        <script type="text/javascript">
        try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
        </script>

        <style type="text/css">
        body { behavior: url(/js/csshover.htc); }
        </style>
        <![endif]-->
        <meta name="build" content="63-BUILD1228 - 27.03.2012 12:15 - com" />
    </head>
    <body id="home">
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
					    <div style="margin-top:7px"><b>Fact:</b> <script language="JavaScript">
                            var r_text = new Array ();
                            r_text[0] = "Remember to tell your friends about {hotelname}!";
                            r_text[1] = "VIP members have access to exclusive features!";
                            r_text[2] = "If you need to contact us you can click this link ->";
                            r_text[3] = "You can play {hotelname} for free!";
                            r_text[4] = "{hotelname} Hotel opened for BETA tests at the beginning of 2013.";
                            r_text[5] = "{hotelname} will always try and find ways to improve the website.";
                            var i = Math.floor(5*Math.random())

                            document.write(r_text[i]);
                        </script></div> 
                    </div>
                    <div id="subnavi-search">
                        <div id="subnavi-search-upper">
                            <ul id="subnavi-search-links">
							<li><a href="idea" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;">Submit an idea</a></li>
                                <li><a href="{url}/logout" style="color:#000">Sign Out</a></li>
								
                            </ul>
                        </div>
                    </div>
                    <div id="to-hotel">
                        <a href="{url}/client" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName}</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
                    <li class=""><a href="/me">{username} (<img src="{url}/app/tpl/skins/Habbo/images/id.png" style="vertical-align: middle;">)</a>  </strong><span></span></li>
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li><a href="{url}/bots">Extras</a><span></span></li>
					<li class="metab selected"><a href="{url}/forum">Forums</a><span></span></li>
                </ul>
                <div id="habbos-online"><div class="rounded"><span>{online} Online</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                   <ul>
                        <li class="selected"><a href="{url}/forum">Home</a></li>
                        <li><a href="{url}/myposts">My Posts</a></li>
                        <li><a href="{url}/forumaccount">Account Settings</a></li>
                        <li><a href="{url}/forumstats">Leaderboards</a></li>
                        <li><a href="{url}/inbox">Inbox</a></li> <?php // Link with Minimail ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- START FOR FORUM -->

        <div id="container">
        	<div id="content" style="position: relative" class="clearfix">
                <?php
                    // Check user has visited before
                    if($forum->userHasVisited($u_id) == false) {
                        $forum->updateUser($u_id, "visited", "true")
                ?>
                <div class="habblet-container " style="width: 770px;">
                    <div class="cbb clearfix orange ">
                        <h2 class="title">Welcome to the forum!</h2>
                        <div style="padding: 5px">
                            <img src="{url}/app/tpl/skins/Habbo/images/forum/twohabbos.gif" style="float: right;" />

                            Welcome to the forum. This is currently an on-going feature to {hotelname} and has been coded by <a href="http://www.facebook.com/ibennish">Benson</a>,
                            the forum is here to help bring the community together and for the users to be able to suggest ideas to the staff, with free opinions.
                            This is a great way for you, as the user, to have the chance to give the staff a good impression of yourself, or just to be handy around 
                            and help users with problems which they may be facing.<br /><br />
                            This forum is <strong>closely moderated</strong> and any person(s) abusing the forum will have a 48 hour ban 
                            and will have a week suspension from posting on the forum. <strong>As this is your first time to the forum, you have recieved this message. When you return, this message will no longer be here.</strong>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if($_GET['view'] == "") { ?>
                <div class="habblet-container " style="widthx: 770px; width: 910px;">
                    <div class="cbb clearfix orange ">
                        <h2 class="title">Latest threads...</h2>
                        <div style="padding: 5px;">
                            <table style="width: 100%;">
                                <tr name="0" style="height: 17px; background-color: #0094cd; color: #fff; font-weight: bold;">
                                    <td style="padding: 5px; width: 320px;">Thread Name</td>
                                    <td style="padding: 5px; width: 100px;">Posted by</td>
                                    <td style="padding: 5px; width: 100px;">Time & Date</td>
                                    <td style="padding: 5px; width: 130px;">Category</td>
                                </tr>

                                <?php $forum->getLatestThreads(5); ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $forum->write_location($_GET['id'], $_GET['view']); ?>
                <?php /* ---------- START FORUM ----------- */ ?>
                <?php if($_GET['view'] != "thread") { ?>
                <div class="habblet-container " style="widthx: 770px; width: 910px;">
                    <div class="cbb clearfix ">
                        <div style="padding: 5px;">
                            <table name="forum" style="width: 100%;">
                                <?php $forum->write_categories($_GET['id'], $_GET['view']); ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php }else{ $forum->write_categories($_GET['id'], $_GET['view']); $forum->write_replies($_GET['id']); $forum->write_reply($u_id, $_GET['id']); } ?>

                <?php
                    // NEW THREAD / NEW COMMENT
                    if($_GET['view'] == "thread") {
                        $comment = mysql_real_escape_string($_POST['replyboxx']);
                        $comment = $forum->clearup($comment);
                        if(!empty($comment)) { $forum->newComment($u_id, $comment, $_GET['id']); }
                        unset($_POST['replyboxx']);
                        unset($comment);
                    }else if($_GET['view'] == "newthread") {
                        $posted = $_POST['postsent'];
                        $title = mysql_real_escape_string($_POST['titlethread']);
                        $content = mysql_real_escape_string($_POST['nthreadbox']);
                        $title = $forum->clearup($title);
                        $content = $forum->clearup($content);

                        if($posted == 1) {
                            if(empty($title)) { echo $forum->errorMessage("You have not entered a title!"); }else if(empty($content)) { echo $forum->errorMessage("You have not entered any content!"); }
                            if(!empty($title) && !empty($content)) {
                                $forum->newThread($u_id, $title, $content, $_GET['id']);
                            }
                        }

                        unset($posted);
                        unset($title);
                        unset($content);
                    }
                ?>
            </div>
            <!--[if lt IE 7]>
            <script type="text/javascript">
            Pngfix.doPngImageFix();
            </script>
            <![endif]-->
        </div>
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <div id="footer"><?php include('footer.php');?>    </div>
    </body>
</html>