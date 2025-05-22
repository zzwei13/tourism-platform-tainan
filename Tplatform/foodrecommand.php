<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">

  <style>
	
*{
margin:0;
}

#header{
	font-family:'微軟正黑體';
	height: 150px;
	background-color: #8cbdb9;
	font-size: 30px;
	text-align:center;
	line-height:150px;
}
/*
#menu{
	font-family:'微軟正黑體';
 	background-color: #8cbdb9;
}

#menu ul{
 	padding:0;
 	display:table;
 	border-spacing: 5px;
 	width: 100%;
}

#menu li{
 	display: table-cell;
 	background-color: #8cbdb9;
 	list-style-type: none;
 	font-size: 24px;
 	border: 1px ;
}
*/
#menu li a{
 	display: block;
 	text-align: center;
 	text-decoration: none;
}
/*
#menu li a:hover{
 	color: #8cbdb9;
 	background-color: white;	
}	/*background-color:滑鼠停在menu上的顏色*/

main{
	font-family:'微軟正黑體';
 	float:right;
 	width:24.91%;
 	height: 1000px;
 	background-color:#e8eceb;
 	border-left-style:solid;
 	border-width:1px;
}

#rank a:hover,a:visited,a:link,a:active{
	text-decoration: none;
}

aside{
	font-family:'微軟正黑體';
 	float:left;
 	width:75%;
 	height: 1000px;
 	background:#e8eceb;
 /*background-image:url(bg.jpg);*/

}

footer{
	clear:both;
 	height: 100px;
 	background-color: #8cbdb9;
 	font-family:'微軟正黑體';
 	font-size: 15px;
	text-align:center;
	line-height:40px;
}

ul{
   margin:0;
   padding:0;
   list-style-type:none;
}

#menu{
   font-family:'微軟正黑體';
   font-size: 20px;
	background-color: #8cbdb9;
	text-align:center;
}


#menu > li{
   float:left;
}

#menu li{ /*第一層排版*/
   position: relative;
   padding:0px;
   min-width:629.5px;
   background-color: #8cbdb9;
   border:#8cbdb9 1px solid;
}

#menu ul{
   position: absolute;
   top:100%; /*第二層 不重疊 離第一層的頂點100%*/
   display: none;/*預設ul不顯示(改成block就會顯示出來)*/
   
   /*border-spacing: 5px;
   padding:0;
   width: 100%;*/
}

#menu a{
   display: block;
   text-align:center;
   text-decoration: none;
   color:#2d3e4e;
}

#menu a:hover{
   color: #e09e50;
   background-color: white;
}

#menu li:hover > ul{ 
   display: block;
}
#menu ul li>ul{
	top:5%;
   left:100%;
}


  </style>
 </head>

<body>

<header id="header">
	<align>
		<a href ="home.php"><h1><font color=white>嗨!台南</font></h1></a>
   
</header>

<ul id="menu">
		<li><font color=#2d3e4e>美食</font>
		<ul>
		<li><a href=manyfood.php?region=01>新營區</a></li>
    	<li><a href=manyfood.php?region=02>鹽水區</a></li>
    	<li><a href=manyfood.php?region=03>白河區</a></li>
    	<li><a href=manyfood.php?region=04>柳營區</a></li>
		<li><a href=manyfood.php?region=05>後壁區</a></li>
    	<li><a href=manyfood.php?region=06>東山區</a></li>
		<li><a href=manyfood.php?region=07>麻豆區</a></li>
		<li><a href=manyfood.php?region=08>下營區</a></li>
		<li><a href=manyfood.php?region=09>六甲區</a></li>
		<li><a href =manyfood.php?region=10>官田區</a></li>
		<li><a href =manyfood.php?region=11>大內區</a></li>
		<li><a href =manyfood.php?region=12>佳里區</a></li>
		<li><a href = manyfood.php?region=13>學甲區</a></li>
		<li><a href =manyfood.php?region=14>西港區</a></li>
		<li><a href = manyfood.php?region=15>七股區</a></li>
		<li><a href = manyfood.php?region=16>將軍區</a></li>
		<li><a href = manyfood.php?region=17>北門區</a></li>
		<li><a href = manyfood.php?region=18>新化區</a></li>
		<li><a href = manyfood.php?region=19>善化區</a></li>
		<li><a href = manyfood.php?region=20>新市區</a></li>
		<li><a href = manyfood.php?region=21>安定區</a></li>
		<li><a href = manyfood.php?region=22>山上區</a></li>
		<li><a href = manyfood.php?region=23>玉井區</a></li>
		<li><a href = manyfood.php?region=24>楠西區</a></li>
		<li><a href = manyfood.php?region=25>南化區</a></li>
		<li><a href = manyfood.php?region=26>左鎮區</a></li>
		<li><a href = manyfood.php?region=27>仁德區</a></li>
		<li><a href = manyfood.php?region=28>歸仁區</a></li>
		<li><a href = manyfood.php?region=29>關廟區</a></li>
		<li><a href = manyfood.php?region=30>龍崎區</a></li>
		<li><a href = manyfood.php?region=31>永康區</a></li>
		<li><a href = manyfood.php?region=32>東區</a></li>
		<li><a href = manyfood.php?region=33>南區</a></li>
		<li><a href = manyfood.php?region=34>北區</a></li>
		<li><a href = manyfood.php?region=35>安南區</a></li>
		<li><a href = manyfood.php?region=36>安平區</a></li>
		<li><a href = manyfood.php?region=37>中西區</a></li>
		</ul>
		</li>
		<li><font color=#2d3e4e>景點</font>
		<ul>
		<li><a href=manyspot.php?region=01>新營區</a></li>
    	<li><a href=manyspot.php?region=02>鹽水區</a></li>
    	<li><a href=manyspot.php?region=03>白河區</a></li>
    	<li><a href=manyspot.php?region=04>柳營區</a></li>
		<li><a href=manyspot.php?region=05>後壁區</a></li>
    	<li><a href=manyspot.php?region=06>東山區</a></li>
		<li><a href=manyspot.php?region=07>麻豆區</a></li>
		<li><a href=manyspot.php?region=08>下營區</a></li>
		<li><a href=manyspot.php?region=09>六甲區</a></li>
		<li><a href =manyspot.php?region=10>官田區</a></li>
		<li><a href =manyspot.php?region=11>大內區</a></li>
		<li><a href =manyspot.php?region=12>佳里區</a></li>
		<li><a href =manyspot.php?region=13>學甲區</a></li>
		<li><a href =manyspot.php?region=14>西港區</a></li>
		<li><a href =manyspot.php?region=15>七股區</a></li>
		<li><a href =manyspot.php?region=16>將軍區</a></li>
		<li><a href =manyspot.php?region=17>北門區</a></li>
		<li><a href =manyspot.php?region=18>新化區</a></li>
		<li><a href =manyspot.php?region=19>善化區</a></li>
		<li><a href =manyspot.php?region=20>新市區</a></li>
		<li><a href =manyspot.php?region=21>安定區</a></li>
		<li><a href =manyspot.php?region=22>山上區</a></li>
		<li><a href =manyspot.php?region=23>玉井區</a></li>
		<li><a href =manyspot.php?region=24>楠西區</a></li>
		<li><a href =manyspot.php?region=25>南化區</a></li>
		<li><a href =manyspot.php?region=26>左鎮區</a></li>
		<li><a href =manyspot.php?region=27>仁德區</a></li>
		<li><a href =manyspot.php?region=28>歸仁區</a></li>
		<li><a href =manyspot.php?region=29>關廟區</a></li>
		<li><a href =manyspot.php?region=30>龍崎區</a></li>
		<li><a href =manyspot.php?region=31>永康區</a></li>
		<li><a href =manyspot.php?region=32>東區</a></li>
		<li><a href =manyspot.php?region=33>南區</a></li>
		<li><a href =manyspot.php?region=34>北區</a></li>
		<li><a href =manyspot.php?region=35>安南區</a></li>
		<li><a href =manyspot.php?region=36>安平區</a></li>
		<li><a href =manyspot.php?region=37>中西區</a></li>
		</ul>
		</li>
	
	</ul>

	<main>
	<br>
    <div style="padding-left:65px;"><h1><font color=#2d3e4e>版主真心推薦</font></h1>
    <br>
    <h2><font color=#2d3e4e>景點：</font></h2>
    <br>
    <section>
    <div id="rank">
    <h3><a href =spotrecommand.php?sid=41 style="color:#2d3e4e">1.漁光島</a></font></h3>
    <h3><a href =spotrecommand.php?sid=37 style="color:#2d3e4e">2.四草綠色隧道</a></font></h3>
    <h3><a href =spotrecommand.php?sid=48 style="color:#2d3e4e">3.河樂廣場</a></font></h3>
    <h3><a href =spotrecommand.php?sid=46 style="color:#2d3e4e">4.臺南市美術館二館</a></font></h3>
    <h3><a href =spotrecommand.php?sid=35 style="color:#2d3e4e">5.桑原商店</a></font></h3>
    <h3><a href =spotrecommand.php?sid=50 style="color:#2d3e4e">6.林百貨</a></font></h3>
    <h3><a href =spotrecommand.php?sid=44 style="color:#2d3e4e">7.安平樹屋</a></font></h3>
    <h3><a href =spotrecommand.php?sid=24 style="color:#2d3e4e">8.玉井白色教堂</a></font></h3>
    <h3><a href =spotrecommand.php?sid=40 style="color:#2d3e4e">9.億載金城</a></font></h3>
    <h3><a href =spotrecommand.php?sid=14 style="color:#2d3e4e">10.水晶教堂</a></font></h3></div>
    </section>
    
	<br>
    <h2><font color=#2d3e4e>美食：</font></h2>
    <br>
    <section>
        <div id="rank">
        <h3><a href =foodrecommand.php?sid=26 style="color:#2d3e4e">1.文章牛肉湯 安平總店</a></font></h3>
        <h3><a href =foodrecommand.php?sid=37 style="color:#2d3e4e">2.鼎富發豬油拌飯</a></font></h3>
        <h3><a href =foodrecommand.php?sid=38 style="color:#2d3e4e">3.金得春捲</a></font></h3>
        <h3><a href =foodrecommand.php?sid=39 style="color:#2d3e4e">4.富盛號</a></font></h3>
        <h3><a href =foodrecommand.php?sid=42 style="color:#2d3e4e">5.葉家小卷米粉</a></font></h3>
        <h3><a href =foodrecommand.php?sid=44 style="color:#2d3e4e">6.蜷尾家甘味處散步甜食</a></font></h3>
        <h3><a href =foodrecommand.php?sid=49 style="color:#2d3e4e">7.游爸爸蕃薯椪</a></font></h3>
        <h3><a href =foodrecommand.php?sid=45 style="color:#2d3e4e">8.阿伯碳烤黑輪甜不辣</a></font></h3>
        <h3><a href =foodrecommand.php?sid=33 style="color:#2d3e4e">9.泰成水果店</a></font></h3>
        <h3><a href =foodrecommand.php?sid=36 style="color:#2d3e4e">10.壽奶茶</a></font></h3></div>
    </section>
</div>
   </main>

<aside>

<?
    $sid=$_GET["sid"];
    //echo 'sid='.$sid. '<br>';
    ?>
    <TT>
        <?php

        $location="localhost";
        $account="root";
        $password="91u09n17a";
        if(isset($location) && isset($account) && isset($password)){
            $link=mysql_pconnect($location,$account,$password);
            if(!$link){
                echo '無法連接資料庫';
                exit();
            }
        }
        $select_db=@mysql_select_db("tainan");
        if(!$select_db){
            echo '<br>找不到資料庫<br>';
        }
        else{
            //echo '<br>找到資料庫<br>';

            $sql_query="select * from smallfood where sid= '".$sid."' ";
            $result=mysql_query($sql_query);

            echo '<center><table width=100% border=0>';
            //echo '<tr>';
            $cnt=0;
            while($row=mysql_fetch_array($result)){
               	$cnt++;
                //if($cnt==6)
                echo '<tr>';
               	echo '<br><br><td width=20%><center><img src=../Tplatform/pic/food01/'.$row[0].'.jpg width=50% height=50%><br>';
			   //echo '<p>usrid:'.$usrid.'<br>';
			   	echo '<br>';
				//echo str_pad("店名",8).$row[1].'<br></span>';

				echo '<span style="font-size: 20px;","padding-left:65px;"> 店名:'.$row[1].'<br></span>';
				echo '<span style="font-size: 20px;"> 電話:'.$row[2].'<br></span>';
				echo '<span style="font-size: 20px;"> 地址:'.$row[3].'<br></span>';
				echo '<span style="font-size: 20px;"> 類別:'.$row[5].'<br></span>';
				echo '<span style="font-size: 20px;"> 營業時間:'.$row[6].'<br></span>';
				echo '<br>';
				echo '<span style="font-size: 20px;"> 簡介:'.'<br></span>';
				echo '<span style="font-size: 20px;">'.$row[4].'</span>';
				
				

                
            }
            echo '</table>';
        }

?>

</aside>


<footer>
	<font color=white>地址:高雄市楠梓區高雄大學路700號</font><br>
	<font color=white>客服專線:07-5919000</font>
	
	</footer>

</body>
</html>