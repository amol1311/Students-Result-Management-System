<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <script type="text/javascript">
    /*window.omload=function(){
      document.getElementById("year").onchange=function(){
        console.log(this.value);
      }
    }*/
    /*function pop(){
      //console.log("****************");
      var s1 = document.getElementById("year").value;
      var s2 = document.getElementById("division");
      var s3 = document.getElementById("sem").value;
      var s4 = document.getElementById("subject");
      console.log(s1)
      console.log(s2)
      console.log(s3)
      console.log(s4)

            
      //var s3 = document.getElementById(s3);
      //var s4 = document.getElementById(s4);
      s2.innerHTML = "";
      //s4.innerHTML = "";
      */
      //var optionclass;
      //var optionsem;

     /* if(s1 == 2){
        optionclass = ["|","d7a|D7A","d7b|D7B","d7c|D7C"];
        if(s3 == 0){
          optionsubject = ["|","m4|Maths 4","dbms|DBMS","mp|Microprossesor","os|Operating System","aoa|Analysis of Algorithm"];
        }
        if(s3 == 1){
          optionsubject = ["|","m3|Maths 3","ds|Datastructures","dlcoa|DLCOA","cg|Computer Graphics","dsgt|Discrete Structure and Graph Theory"];
        }
        
        //dropDown.selectedIndex = 0;
        //console.log("&&&&&",optionArray)
      }
      else if(s1 == 3){
        optionclass = ["|","d12a|D12A","d12b|D12B","d12c|D12C"];
        if(s3 == 0){
          optionsubject = ["|", "sp|System Programming ", "se|Software Engineering", "dd|Distributed Databases", "mc|Mobile Communication"];
        }
        if(s3 == 1){
          optionsubject = ["|", "mp|Microprocessor", "os|Operating Systems", "cn|Computer Networks", "wt|Web Technologies"];
        }
        //dropDown.selectedIndex = 0;
      }
      else if(s1== 4){
        optionclass = ["|","d17a|D17A","d17b|D17B","d17c|D17C"];
        if(s3 == 0){
          optionsubject = ["|", "dwm|Data Warehouse and Mining", "hmi|Human Machine Interaction", "pds|Parallel and Distributed Systems"];
        }
        if(s3 == 1){
          optionsubject = ["|", "dsp|Digital Signal Processing", "css|Cryptography and System Security", "ai|Artificial Intelligence"];
        }
        //dropDown.selectedIndex = 0;
      }
   
      //console.log(optionArray)
      for(var option in optionclass){
        console.log(option);
        var pair = optionclass[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
        //dropDown.selectedIndex = 0;
      
      }
      for(var option in optionsubject){
        console.log(option);
        var pair = optionsubject[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s4.options.add(newOption);
        //dropDown.selectedIndex = 0;
      
      }
      
      
    }*/
    
    

  </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate a Graph</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="adminpagecss.css" type="text/css" rel="stylesheet"/>
<style> 
    select {
      width: 350px;
      padding: 16px 20px;
      border: none;
      border-radius: 4px;
      background-color: #FDEDEC;
    }
input[type=button]{
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #D5BEB9;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #BA452C;
}

.active {
  background-color: #C36E5C;
} 
</style>
</head>

  <body>
    <ul>
      <li><a class="active" href="#home">VESIT</a></li>
      <li><a href="http://localhost/miniproject/facultypage.html">Faculty Page</a></li>
      <li style="float:right"><a  href="http://localhost/miniproject/loginpage.html">Logout</a></li>
    </ul>

  <div class="jumbotron">
  <h1 class="display-4">Graph Generation</h1>
  <hr class="my-4">

<!-- <form action="report2.php" method="post" target="_blank"> -->
<form action="graph2.php" method="post">

<table style="width:1000px">
        <tr>
          <td><label><b>SELECT YEAR : <b></label></td>
          <td>
          <select name="year" id="year">
            <option value=''></option>
            <option value=2>SE</option>
            <option value=3>TE</option>
            <option value=4>BE</option>
          </select>
          </td> 
        </tr>
        <tr>
          <td><label><b>SELECT SEMESTER : <b></label></td>
          <td>
          <select name="sem" id="sem" >
            <option value=''></option>
            <option value=0>Even</option>
            <option value=1>Odd</option>
          </select>
          </td> 
        </tr>

        <tr>
          <td><label><b>SELECT DIVISION : <b></label></td>
          <td>
          <select name="division" id="division"> 
          <option value=''></option>       
          <option value='d7a'>D7A</option>       
          <option value='d7b'>D7B</option>       
          <option value='d7c'>D7C</option>       
          </select>
        </td> 
        </tr>
       

</table>  
<br>



    <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
 <br><br><br>
</body>
</html>