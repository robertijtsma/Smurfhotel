<?php
////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.3    //
// # © Copyright TheHabbos 2011. All rights reserved. //
////////////////////////////////////////////////////////

if(!defined('IN_THEHABBOS_API')) {
  die('Sorry, but you can not access this file directly. :(');
}

class API_Template {

  function buildTemplate() {
    echo $this->replaceContent($this->getTemplateItem('template'));
  }

  function getTemplateItem($Item) {
    global $CONFIG;
    $getTemplateItem = fopen('thehabbos_api/styles/'.$CONFIG['Style'].'/'.$Item.'.html', 'r');
    $templateItem = fread($getTemplateItem, filesize('thehabbos_api/styles/'.$CONFIG['Style'].'/'.$Item.'.html'));
    fclose($getTemplateItem);
    return $templateItem;
  }
  
  function replaceContent($Template) {
    global $CONFIG;
    $lookingFor = Array('{$Title}', '{$CSS}', '{$Header}', '{$Content}');
    $contentReplacements = Array($this->buildContent('title').' - TheHabbos.ORG Voting Script', $this->getTemplateItem('css'), $this->buildContent('title'), $this->buildContent('content'));
    $string = str_replace($lookingFor, $contentReplacements, $Template);
    return $string;
  }
  
  function buildContent($ContentType) {
    global $CONFIG; global $LANG;
    $validationID = $CONFIG['Status'];
    if($ContentType == 'title') {
      return $LANG['title'][$validationID];
    }
    if($ContentType == 'content') {
      return $this->getPageType();
    }
  }

  function getPageType() {
    global $CONFIG; global $LANG;
    ob_start();
    $lookingFor = $CONFIG['Status'];
    include('thehabbos_api/types/'.$CONFIG['Type'].'.php');
    $string = ob_get_contents();
    ob_end_clean();
    return $string;
  }
  
}