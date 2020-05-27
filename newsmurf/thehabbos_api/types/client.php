<?php
////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.3    //
// # © Copyright TheHabbos 2011. All rights reserved. //
////////////////////////////////////////////////////////

if(!defined('IN_THEHABBOS_API')) {
  die('Sorry, but you can not access this file directly. :(');
}

switch($lookingFor) {
  case 1:
  {
    //what happens if someone does successfully vote
    header("Location: client");
    break;
  }
  case 2:
  {
    //what happens if someone has already voted
    header("Location: client");
    break;
  }
  case 3:
  {
    //what happens if someone hasn't voted yet
    echo '<div class="contentTitle">Please Vote</div>
          It appears that you have not voted yet today! Please click the button below.<br />
          <br />
          <form action="http://votingapi.com/vote/'.$CONFIG['Username'].'" method="post">
            <input type="hidden" name="api_url" value="'.$CONFIG['URL'].'" />
            <input class="button" type="submit" name="votingAPI" value="" />
          </form>';
    break;
  }
  case 4:
  case 5:
  {
    //what happens if someone sends an invalid request
    echo $LANG['content'][4].'<br /><br />Click <a href="client" style="color: #000000;">here</a> to proceed to the client.';
    break;
  }
  case 6:
  {
    //what happens if thehabbos is down or having connection issues
    header("Location: client");
    break;
  }
}