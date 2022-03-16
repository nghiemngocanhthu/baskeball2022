<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Record.css">

    <style type="text/css">
  body{
   margin: 0;
   padding: 0;
   width:100%;
   height:100%;

  }
  .container{
   margin:0 auto;
   display:flex;
   border-width: 0 5em;
   border-color:midnightblue;
   border-style:solid;
   /* border:100px midnightblue solid; */
  }
  .left{
   flex-wrap: no-wrap;
   border-right-style:solid;
   border-color:orange;
   border-width:4px;;
   display: flex;
   width:400px;
   height: 400px;
   float:left;

  }
  .middle{
   flex-wrap: no-wrap;
   display: flex;
   height: 400px;
   width: 450px;
   /* margin:0 200px; */
  }
  .right{
   flex-wrap: no-wrap;
   border-left-style:solid;
   border-color:orange;
   border-width:4px;;
   display: flex;
   width: 400px;
   height: 400px;

   float: right;
  }
        .under{
   height:400px;
        }
  .btn{
   margin:15px;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   border-radius: 10px;
   font-size: 16px;
   color:orange;
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
   position: relative; */
   /* opacity: 0.5;
    /*设置蒙版效果*/
    /* pointer-events: none; */
    /* 禁止鼠标事件 */
  }
  .btn:hover{
   background-color:#EE7700;
   color:white;
  }
  #up{

   display: flex;
   margin:20px;
   justify-content: center; 
   align-items: center; 
  }
  #middle{
   display: flex;
   margin:20px;
   justify-content: center; 
   align-items: center; 
  }
  #down{
   display: flex;
   margin:20px;
   justify-content: center; 
   align-items: center; 
  }
  .btn1:hover{
   background-color:#EE7700;
   color:white;
  }
  #headbtn{
   height:30px;
   width:100px;
   text-align:center;
  }
  .memberbtn{
   height:30px;
   width:100px;
   text-align:center;
  }
  #left-headbtn{
   height:20px;
   /* justify-content: center; 
   align-items: center;  */
  }
  #clan{
   height:18px;
   text-align:center;
   /* justify-content: center; 
   align-items: center;  */
  }
  /* .score-board {
   position: relative; 
  } 
  .score-box { 
   position: absolute; 
   /* top: 0;             
   bottom: 0;           
   left: 0;        
   right: 0; */
   /* margin:auto;
   border: 3px solid black; 
   padding: 20px; 
   color: #2CB3C9; 
  } */ 
  
  /* .body {
    width: 30px;
    height: 50px;
    background-color: #211d5a;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .count {
    position: relative;
    width: 200px;
    height: 200px;
    margin-top: 60px;
    border: 10px solid;
    border-color: rgb(79, 59, 156);
    border-radius: 50%;
    display: flex;
  }
  .ft {
    font-size: 10px;
    color: #fff;
    margin: auto;
  } */
  
 </style>

</head>
<body>
 <div class="container">
  <form action="Record.php">
    <!-- 左栏左浮右栏右浮，中间不设宽度用左右margin值撑开距离，且布局中中间栏放最后 -->
   <!-- 中间栏实际宽度是当前屏的100% -->
   <div class="left">
    <span id = "left-headbtn"><button type="button" class="btn btn-primary"></button></span>
    <!-- <span id = "left-memberbtn1"><input type="button" class = "memberbtn" name = "member1"></span>
    <span id = "left-memberbtn2"><input type="button" class = "memberbtn" name = "member2"></span>
    <span id = "left-memberbtn3"><input type="button" class = "memberbtn" name = "member3"></span>
    <span id = "left-memberbtn4"><input type="button" class = "memberbtn" name = "member4"></span>
    <span id = "left-memberbtn5"><input type="button" class = "memberbtn" name = "member5"></span> -->
   </div>
   <div class="right">
    <span id = "right-headbtn"><button type="button" class="btn btn-primary"></span>
    <!-- <span id = "right-memberbtn1"><input type="button" class = "memberbtn" name = "member1">
    <span id = "right-memberbtn2"><input type="button" class = "memberbtn" name = "member2">
    <span id = "right-memberbtn3"><input type="button" class = "memberbtn" name = "member3">
    <span id = "right-memberbtn4"><input type="button" class = "memberbtn" name = "member4">
    <span id = "right-memberbtn5"><input type="button" class = "memberbtn" name = "member5"> -->
   </div>
   <div class="middle">
    <!-- <div class="body">
    <div class="count" >
     <span id="demo" class="ft">
      2
     </span>
    </div>
   </div> -->
    <!-- <div class="score-board"> 
     <div class="score-box"> 
      00
     </div> 
     <div class="score-box"> 
      00
     </div> 
    </div> -->

    <input type="button" value = "開始" class = btn1 style="margin:200px 0 0 120px; width: 60px;height: 60px;border-radius:50%;"/> 
    <!-- style="width: 50px;height: 50px;background-color:red ;border-radius:50%;" margin:200px 0 0 140px;margin:200px 0 0 10px; margin:200px 0 0 10px; -->
    <input type="button" value = "暫停" class = btn1 style="margin:200px 0 0 10px; width: 60px;height: 60px;border-radius:50%;"/>
    <input type="button" value = "結束" class = btn1 style="margin:200px 0 0 10px; width: 60px;height: 60px;border-radius:50%;"/>
   </div>
   <hr style="border:3 solid orange" width="70%" SIZE=3>
   <div class="under">
    <span id = "up">
     <input type="submit" class = btn value = "罰球進" οnclick="add()">
     <input type="submit" class = btn value = "罰球未進">
     <input type="submit" class = btn value = "2分球進" οnclick="add()">
     <input type="submit" class = btn value = "2分球未進">
     <input type="submit" class = btn value = "火鍋">
    </span>
    <span id = "middle">
     <input type="submit" class = btn value = "3分球進" οnclick="add()">
     <input type="submit" class = btn value = "3分球未進">
     <input type="submit" class = btn value = "助攻">
     <input type="submit" class = btn value = "犯規"> 
     <input type="submit" class = btn value = "被火鍋">
    </span>
    <span id = "down">
     <input type="submit" class = btn value = "進攻籃板">
     <input type="submit" class = btn value = "防守籃板">
     <input type="submit" class = btn value = "阻攻">
     <input type="submit" class = btn value = "抄截">
     <input type="submit" class = btn value = "失誤">
    </span>
   </div>
  </form>
 </div>
</body>
<script>
 var counter = document.getElementById("demo").innerHTML;
 function add() {
   counter++;
   document.getElementById("demo").innerHTML = counter;
 }

 function sub() {
  if(counter == 0) {
   counter = 0;
  } else {
   counter--;
   document.getElementById("demo").innerHTML = counter;
  }
 }

 function zero() {
  counter = 0;
  document.getElementById("demo").innerHTML = counter;
 }
</script>
</html>