<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Minispiel</title>
        
      
		<script for=document event="onkeydown()" language="JScript">
if (window.event) KeyDown(window.event.keyCode);
</script>
<script language="JavaScript" src="{url}/app/tpl/skins/Habbo/js/sokoban.js" type="text/javascript"></script>
<script language="JavaScript" src="{url}/app/tpl/skins/Habbo/js/sokoyoshio.js" type="text/javascript"></script>
<script language="JavaScript">
	
var scrn=xscrn, n_scrn=n_xscrn;
var i, j, I_Sel, J_Sel, XPos, YPos, StartTime, EndTime, TimeString="00:00:00", IsOver, XMax=20, YMax=17, Series=0;
var Level=1, MoveCount, MaxMoveCount, MaxMove=999, Taler = 0;
var IsNetscape = false;  
if(navigator.appName == "Netscape") IsNetscape = true;

History=new Array(MaxMove);

Fld = new Array(XMax);
for (i=0; i < XMax; i++)
{ Fld[i]=new Array(YMax);
}

Pic= new Array(2);
Pic[0]= new Array(7);
Pic[1]= new Array(7);
for (i=0; i<7; i++)
{ Pic[0][i] = new Image();
  Pic[0][i].src = "app/tpl/skins/Habbo/images/game1/sokoban"+i+".gif";
  Pic[1][i] = new Image();
  Pic[1][i].src = "sokoyoshio"+i+".gif";
}

function SetSeries(nn)
{ Series=nn;
  if (Series==0)
  { scrn=xscrn;
    n_scrn=n_xscrn
  }
  else
  { scrn=yscrn;
    n_scrn=n_yscrn
  }
  Level=1;
  Init(Level-1);
  if (document.getElementById)
  { if (Series==0) document.getElementById("bg").style.backgroundImage="url('app/tpl/skins/Habbo/images/game1/bg.gif')"; 
    else document.getElementById("bg").style.backgroundImage="url('app/tpl/skins/Habbo/images/game1/sokoban0.png')";
  }
}

function Timer()
{ var ii, jj, ss="";
  if (IsOver) return;
  Now = new Date();
  EndTime = Now.getTime() / 1000;
  ii=Math.floor(EndTime - StartTime);
  jj=ii%60;
  ss=eval(jj);
  if (jj<10) ss="0"+ss;
  ii-=jj;
  ii/=60;
  jj=ii%60;
  ss=eval(jj)+":"+ss;
  if (jj<10) ss="0"+ss;
  ii-=jj;
  ii/=60;
  jj=ii%24;
  ss=eval(jj)+":"+ss;
  if (jj<10) ss="0"+ss;
  window.document.OptionsForm.Time.value=ss;
  TimeString=ss;
}

function KeyDown(whichkey)
{ //alert(whichkey);
  if (whichkey == 37) Move(-1,0);
  if (whichkey == 38) Move(0,-1);
  if (whichkey == 39) Move(1,0);
  if (whichkey == 40) Move(0,1);

  if (whichkey == 50) Move(0,1);
  if (whichkey == 52) Move(-1,0);
  if (whichkey == 53) Move(0,1);
  if (whichkey == 54) Move(1,0);
  if (whichkey == 56) Move(0,-1);

  if (whichkey == 65458) Move(0,1);
  if (whichkey == 65460) Move(-1,0);
  if (whichkey == 65461) Move(0,1);
  if (whichkey == 65462) Move(1,0);
  if (whichkey == 65464) Move(0,-1);
}  

function NumStr(nn)
{ if (nn<10) return("   "+eval(nn)+"   ");
  if (nn<100) return("  "+eval(nn)+"  ");
  if (nn<1000) return(" "+eval(nn)+" ");
  return(eval(nn));
}

function ChangeLevel(dd)
{ Level+=dd;
  if (Level<1) Level=1;
  if (Level>n_scrn) Level=n_scrn;
  Init(Level-1);
}

function Init(ll)
{ var cc, ii, jj, kk;
  for (ii=0; ii < XMax; ii++)
  { for (jj=0; jj < YMax; jj++)
      Fld[ii][jj]=0;
  }
  ii=0; jj=0;
  for (kk=0; kk<scrn[ll].length; kk++)
  { cc=scrn[ll].charAt(kk);
    if (cc==".") Fld[ii][jj]=1;
    if (cc=="#") Fld[ii][jj]=2;
    if (cc=="$") Fld[ii][jj]=3;
    if (cc=="*") Fld[ii][jj]=4;
    if (cc=="@") { Fld[ii][jj]=5; PosX=ii; PosY=jj; }
    if ((cc!=" ")&&(cc!="!")&&(Fld[ii][jj]==0)) alert(cc);
    if (cc=="!") { jj++; ii=0; }
    else ii++;
  }
  MoveCount=0;
  MaxMoveCount=0;
  RefreshScreen();
  window.document.images[0].src = Pic[Series][5].src;
  Now = new Date();
  StartTime = Now.getTime() / 1000;
  IsOver=false;
}

function OverTest()
{ var ii, jj;
  for (ii=0; ii < XMax; ii++)
  { for (jj=0; jj < YMax; jj++)
    { if (Fld[ii][jj]==3) return(false);
    }
  }
  return(true);
}

function Move(ddX, ddY)
{ var nn;
  if (IsOver) return;
  if (Fld[PosX+ddX][PosY+ddY]>2)
  { if (Fld[PosX+2*ddX][PosY+2*ddY]<2)
    { Fld[PosX+2*ddX][PosY+2*ddY]+=3;
      Fld[PosX+ddX][PosY+ddY]+=2;
      Fld[PosX][PosY]-=5;
      RefreshPic(PosX, PosY);
      RefreshPic(PosX+ddX, PosY+ddY);
      RefreshPic(PosX+2*ddX, PosY+2*ddY);
      PosX+=ddX;
      PosY+=ddY;
      nn=-(ddX+1)-3*(ddY+1);
      if (History[MoveCount]!=nn)
      { History[MoveCount]=nn;
        MaxMoveCount=MoveCount+1;
      }
      MoveCount++;
      if (MaxMoveCount<MoveCount)
        MaxMoveCount=MoveCount;
      IsOver=OverTest();
      if (MoveCount==MaxMove)
      { alert("Game Over, keine Schritte mehr !");
      }
    }
  }
  else
  { if (Fld[PosX+ddX][PosY+ddY]<2)
    { Fld[PosX+ddX][PosY+ddY]+=5;
      Fld[PosX][PosY]-=5;
      RefreshPic(PosX, PosY);
      RefreshPic(PosX+ddX, PosY+ddY);
      PosX+=ddX;
      PosY+=ddY;
      nn=(ddX+1)+3*(ddY+1);
      if (History[MoveCount]!=nn)
      { History[MoveCount]=nn;
        MaxMoveCount=MoveCount+1;
      }
      MoveCount++;
      if (MaxMoveCount<MoveCount)
        MaxMoveCount=MoveCount;
      if (MoveCount==MaxMove)
      { alert("Game Over, keine Schritte mehr !");
      }
    }
  }
  window.document.OptionsForm.Moves.value=NumStr(MoveCount);
  if (IsOver) window.document.images[0].src = Pic[Series][4].src;
}

function MoveBack(mm)
{ var ii, nn, ddX, ddY;
  for (ii=0; ii<mm; ii++)
  { if (MoveCount==0) return;
    IsOver=false;
    window.document.images[0].src = Pic[Series][5].src;
    MoveCount--;
    nn=History[MoveCount];
    if (nn>0)
    { ddX=nn%3;
      ddY=(nn-ddX)/3;
      ddX--;
      ddY--;
      PosX-=ddX;
      PosY-=ddY;
      Fld[PosX+ddX][PosY+ddY]-=5;
      Fld[PosX][PosY]+=5;
      RefreshPic(PosX, PosY);
      RefreshPic(PosX+ddX, PosY+ddY);
    }
    else
    { nn*=-1;
      ddX=nn%3;
      ddY=(nn-ddX)/3;
      ddX--;
      ddY--;
      PosX-=ddX;
      PosY-=ddY;
      Fld[PosX+2*ddX][PosY+2*ddY]-=3;
      Fld[PosX+ddX][PosY+ddY]-=2;
      Fld[PosX][PosY]+=5;
      RefreshPic(PosX, PosY);
      RefreshPic(PosX+ddX, PosY+ddY);
      RefreshPic(PosX+2*ddX, PosY+2*ddY);
    }
    window.document.OptionsForm.Moves.value=NumStr(MoveCount);
  }
}

function MoveForward(mm)
{ var ii, nn, ddX, ddY;
  for (ii=0; ii<mm; ii++)
  { if (MoveCount>=MaxMoveCount) return;
    nn=History[MoveCount];
    if (nn<0) nn*=-1;
    ddX=nn%3;
    ddY=(nn-ddX)/3;
    ddX--;
    ddY--;
    Move(ddX, ddY);
  }
}

function RefreshPic(ii, jj)
{ window.document.images[ii+jj*XMax+1].src = Pic[Series][Fld[ii][jj]].src;
}

function RefreshScreen()
{ var ii, jj;
  for (ii=0; ii < XMax; ii++)
  { for (jj=0; jj < YMax; jj++)
      window.document.images[ii+jj*XMax+1].src = Pic[Series][Fld[ii][jj]].src;
  }
  window.document.OptionsForm.Level.value=NumStr(Level);
  window.document.OptionsForm.Moves.value=NumStr(MoveCount);
  window.document.OptionsForm.Taler.value=NumStr(Taler);
}

function Help()
{ alert("H.bbo Beach Box ist unser erstes Minispiel."+
      "\nBeach Box basiert auf einem japanischen Spiel der 80er Jahre."+
      "\nDas Ziel ist es, alle Boxen auf die Roten Plattformen zu schieben"+
      "\nund diese so auzupacken. Aus der verbrauchten Zeit, den Schritten"+
      "\nund dem Level errechnet sich dann die Menge Taler die du bekommst."+
      "\n\nCredits to Yoshio Murase & thc"+
      "\nViel Glueck!"); 
}

function Resize()
{ if(navigator.appName == "Netscape") history.go(0);
}

if (navigator.appName != "Microsoft Internet Explorer")
  document.captureEvents(Event.KEYDOWN);
document.onkeydown = NetscapeKeyDown;
function NetscapeKeyDown(key)
{ KeyDown(key.which);
}  
</script>
    </head>
    
        <body id="home">
    
     
<div id="container">
<div style="position:auto; overflow:auto">	
<form name="OptionsForm">
<DIV ALIGN=center>
<table border=0 cellpadding=0 cellspacing=0 width=100% height=100%><tr><td id="bg" bgcolor=#cccccc background="app/tpl/skins/Habbo/images/game1/bg.gif" align=center>
<table noborder cellpadding=10 cellspacing=0>
<tr><td align=left>
</td><td align=left>
  <table noborder cellpadding=1 cellspacing=1>
    <tr><td align=right><B>Level:</B>&nbsp;</td>
        <td align=center><input type=button value="&nbsp;&lt;&lt;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:ChangeLevel(-10);"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&lt;&nbsp;&nbsp;" style="width:35px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:ChangeLevel(-1)"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:60px; font-size:15px; background-color:#008000" name="Level"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&gt;&nbsp;&nbsp;" style="width:35px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:ChangeLevel(1)"></td>
        <td align=center><input type=button value="&nbsp;&gt;&gt;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:ChangeLevel(10);"></td>
    </tr>
    <tr><td align=right><B>Schritte:</B>&nbsp;</td>
        <td align=center><input type=button value="&nbsp;&lt;&lt;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:MoveBack(10);"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&lt;&nbsp;&nbsp;" style="width:35px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:MoveBack(1)"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:60px; font-size:15px; background-color:#008000" name="Moves"></td>
        <td align=center><input type=button value="&nbsp;&nbsp;&gt;&nbsp;&nbsp;" style="width:35px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:MoveForward(1)"></td>
        <td align=center><input type=button value="&nbsp;&gt;&gt;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:MoveForward(10);"></td>
    </tr>
    <tr><td align=right><B>Zeit:</B>&nbsp;</td>
        <td align=center colspan=2><input type=button value="00:00:00" style="width:80px; font-size:15px; background-color:#008000" name="Time"></td>
        <td align=center><input type=button value="&nbsp;Neu&nbsp;" style="width:80px; font-size:15px; background-color:#008000; color:#FFFFFF"  onClick="javascript:ChangeLevel(0)"></td>
        <td align=center colspan=2><input type=button value="&nbsp;&nbsp;&nbsp;Info&nbsp;&nbsp;&nbsp;" style="width:80px; font-size:15px; background-color:#008000; color:#FFFFFF"  onClick="javascript:Help()"></td>
		<td align=center colspan=2><input type=button value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:80px; font-size:15px; background-color:#008000; color:#FFFFFF"  name="Taler"></td>
    </tr>
 </table>
</td><td align=left>
  <table noborder cellpadding=1 cellspacing=1>
    <tr><td>&nbsp;</td>
        <td align=center><input type=button value="&nbsp;&nbsp;/\&nbsp;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:Move(0,-1)"></td>
        <td>&nbsp;</td>
    </tr>
    <tr><td align=right><input type=button value="&nbsp;&lt;-&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:Move(-1,0)"></td>
        <td align=center><IMG src="sokoban0.png" border=0 width=30 height=30></td>
        <td align=left><input type=button value="&nbsp;-&gt;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:Move(1,0)"></td>
    </tr>
    <tr><td>&nbsp;</td>
        <td align=center><input type=button value="&nbsp;&nbsp;\/&nbsp;&nbsp;" style="width:40px; font-size:15px; background-color:#008000; color:#FFFFFF" onClick="javascript:Move(0,1)"></td>
        <td>&nbsp;</td>
    </tr>
 </table>
</td></tr>
<tr><td colspan=3>
  <table noborder cellpadding=0 cellspacing=0>
    <script language="JavaScript">
//    document.open("text/plain");
    for (j=0; j < YMax; j++)
    { document.writeln("<tr align=center>");
      for (i=0; i < XMax; i++)
        document.writeln("<td><IMG src=\"app/tpl/skins/Habbo/images/game1/sokoban0.png\" border=0 width=30 height=30></td>");
      document.writeln("</tr>");
    }
//    document.close();
    </script>
  </table>
</td></tr></table>
</td></tr></table>
</DIV>
</form>
<script language="JavaScript">

if (navigator.appName == "Konqueror")
{ document.write("<input width=0 height=0 style=\"width:0; height:0\" name=\"KeyCatch\" onBlur=\"KeyCatchFocus()\" onKeyUp=\"KeyCatchChange()\">");
  KeyCatchFocus();
}
function KeyCatchFocus()
{ setTimeout("document.forms[0].KeyCatch.focus()",100);
}
function KeyCatchChange()
{ var vv=""+document.forms[0].KeyCatch.value;
  if (vv=="") return;
  KeyDown(vv.charCodeAt(0));
  document.forms[0].KeyCatch.value="";
}

Init(0);
setInterval("Timer()",1000);
</script>
							</div>
						</div>
					</div>
			<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>

        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
		   <?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
