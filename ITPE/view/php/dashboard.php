<!Doctype>
<html>
<head>
<title></title>
     <link rel="stylesheet" href="{{URL::to('css/cssfile/main.css')}}">
</head>
<body>
</br>

<div class="container">

<header>
  <table width="100%" height="100px" bgcolor="white" border="0">
  <tr>
    <td width="10%">
 <img src="dti.png">
    </td>
     <td>
      <h2>Department of Trade and Industry XI</h2>
      <h3>Procurement System</h3>
    </td>

    
  </tr>
</table>
   
</header>
  
<nav>
  
   <a href="html/home.html" target="myIframe"  ><button class="button button1" style="height:50px;width:160px"><h3>Home</h3></button></a>
   
   <a href="html/task.html" target="myIframe"  ><button class="button button2" style="height:50px;width:160px"><h3>Add Task</h3></button></a>
    
   <a href="html/remarks.html" target="myIframe"  ><button class="button button3" style="height:50px;width:160px"><h3>Remarks</h3></button></a>

   <a href="" target="myIframe"  ><button class="button button4" style="height:50px;width:160px"><h3>Notification</h3></button></a>

    <a href="{{route('Logout')}}"  ><button class="button button5" style="height:50px;width:160px"><h3>Logout</h3></button></a>
   
  
  
</nav>

<article>
<table width="100%" height="30px" bgcolor="#3173AD">
  <tr>
    <td width="70%">
    &nbsp &nbsp
<h2 ><font color="white" > &nbsp  Procurement 2017</font></h2>
    </td>
    <td >

 
    </td>
    <td width="10%">
     <img src="search.png"  height="8%" >

    </td>
  </tr>
</table>

 <table width = "100%" border = "0" name="mytable" >    
          <td colspan = "10" bgcolor = "" width = "100%" height= "502px"> 
          <iframe  name="myIframe"  frameborder="1" width="100%" height="100%" src="html/home.html">
            
          </iframe> 
          </td>

</table>

</article>

<footer >@2017. | Procurement System</footer>

</div>
</body>
</html>