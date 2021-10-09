<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Marks</title>
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

      <script type="text/javascript">
    /*window.omload=function(){
      document.getElementById("year").onchange=function(){
        console.log(this.value);
      }
    }*/
    function pop(){
      //console.log("****************");
      var s1 = document.getElementById("year").value;
      var s2 = document.getElementById("division");
      var s3 = document.getElementById("sem").value;
      var s4 = document.getElementById("subject");
      console.log(s1)
      console.log(s2)
      s2.innerHTML = "";
      console.log(s3)
      console.log(s4)
      s4.innerHTML = "";

      /*
      
      //var s3 = document.getElementById(s3);
      //var s4 = document.getElementById(s4);
      s2.innerHTML = "";
      //s4.innerHTML = "";
      */
      //var optionclass;
      //var optionsem;
      if(s1 == 2){
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
          optionsubject = ["|","sp|System Programming","se|Software Engineering","dd|Distributed Databases","mc|Mobile Communication"];
        }
        if(s3 == 1){
          optionsubject = ["|","mp|microprossesor","os|operating system","cn|Computer networks","wt|Web Technologies"];
        }
          
        //dropDown.selectedIndex = 0;
      }
      else if(s1== 4){
        optionclass = ["|","d17a|D17A","d17b|D17B","d17c|D17C"];
        if(s3 == 0){
          optionsubject = ["|","dwm|Data Warehouse And Mining","hmi|Human machine interaction","pds|Parallel And Distributed Systems","cc|Cloud Computing"];
        }
        if(s3 == 1){
          optionsubject = ["|","dsp|Digital Signal Processing","css|Cryptography And System Security","ai|Artifical Intelligence"];
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
      
      
    }
    
    

  </script>

</head>

  <body>
    <ul>
      <li><a class="active" href="#home">VESIT</a></li>
      <li><a href="http://localhost/miniproject/facultypage.html">Faculty Page</a></li>
      <li style="float:right"><a  href="http://localhost/miniproject/loginpage.html">Logout</a></li>
    </ul>
    



  <div class="jumbotron">
  <h1 class="display-4">Insert Marks</h1>
  <hr class="my-4">

<table>

      <form method="get" action="score2.php">
        <tr>
          <td><label><b>SELECT YEAR : <b></label></td>
          <td>
          <select name="year" id="year" onChange="pop()" >
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
          <select name="sem" id="sem" onChange="pop()">
            <option value=''></option>
            <option value=0>Even</option>
            <option value=1>Odd</option>
          </select>
          </td> 
        </tr>
        <tr>
          <td><label><b>DIVISION : <b></label></td>
          <td>
          <select name="division" id="division"> </select>
          </td> 
        </tr>
        <tr>
          <td><label><b>EXAM TYPE : <b></label></td>
          <td>
          <select name="exam" id="exam" >
            <option value=''></option>
            <option value="IA1">IA1</option>
            <option value="IA2">IA2</option>
          </select>
          </td> 
        </tr>
        <tr>
          <td><label><b>SELECT SUBJECT : <b></label></td>
          <td>
          <select name="subject" id="subject"></select>
          </td> 
    </table>
    <br>
            <input type="submit" class="submit" value="EDIT">
<br><br><br>
      </form>   
    

</body>
</html>