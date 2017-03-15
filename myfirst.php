<html>
<head>
 <title>Example form</title>

 <style type="text/css">
  #title
    {
     font-size:12pt;   
     width:150;
    }

    #title2
    {
     font-size:12pt;   
     width:150;
    }
  
  #txtbox
    {
     font-size:12pt;   
     width:90%;
    }
    </style>

</head>

 
<body>

 <?php
//--Classes-----------------------------------------------------
Class StandardPort
  {
  public $PortName = 'Dover';
  public $MHWS = 3.8;
  public $MHWN = 2.8;
  public $MLWN = 3.2;
  public $MLWS = 2.4;

  public $HW_Time="12.00";
  public $LW_Time="06.00";
  public $HW_Height="3.5";
  public $LW_Height="2.3";
  }

Class SecPort
  {
  public $PortName = 'Ayamonte';
  }



//--- Declare new classes-------------------------
$StandardPort=new StandardPort;
$SecPort=new SecPort;


//-- Save data in boxes into class variables----------------
 if ( isset( $_GET['submit'] ) ) { 

       $StandardPort->PortName=$_GET["Pname"];
       $StandardPort->HW_Time=$_GET["HWT"];
       $StandardPort->LW_Time=$_GET["LWT"];
       $SecPort->PortName=$_GET["Sname"];
       $StandardPort->HW_Height=$_GET["HWH"];
       $StandardPort->LW_Height=$_GET["LWH"];
       
       }
?>

<!   Standrd port input >
<table   border="0">
  <form  method="GET">
    <input type="submit" name="submit" value="Submit"> 
    <br>
    <tr>
    <td id="title"><label>Secondary Port Name:</label> <input type="text" name="Sname" value="<?php echo $SecPort->PortName;?>"></td>
      <td id="title"><label>Standard Port Name: </label> <input type="text" name="Pname" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title"><label>High Water Time:</label> <input type="text" name="HWT" value="<?php echo $StandardPort->HW_Time;?>"></td>
      <td id="title"><label>High Water Height: </label><input type="text" name="HWH" value="<?php echo $StandardPort->HW_Height;?>"> </td>
      <td id="title"><label>Low Water Time:</label> <input type="text" name="LWT" value="<?php echo $StandardPort->LW_Time;?>"></td>
      <td id="title"><label>Low Water Height:</label> <input type="text" name="LWH" value="<?php echo $StandardPort->LW_Height;?>"></td>
    </tr>
  </form>
</table>

<hr>




<!  Text labls above hw/lw inpt times>
<table   border="0"> 
    <tr>
      <td id="title">Times</td>
      <td id="title"></td>
      <td id="title"></td>
      <td id="title"></td>
      <td id="title">Height (metres)</td>
      <td id="title"></td>
      <td id="title"></td>
      <td id="title"></td>
    </tr>
</table>

<form  method="GET">
  <table   border="0"> 
    <tr>
      <td id="title">High Water</td>
      <td id="title"></td>
      <td id="title">Low Water</td>
      <td id="title"></td>
      <td id="title">MHWS</td>
      <td id="title">MHWN</td>
      <td id="title">MLWN</td>
      <td id="title">MLWS</td>
    </tr>

    <!   SHW/LW times and MHWS heights>
    <tr>
      <td id="title2"><input  type="label" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MHWS;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MHWN;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MLWN;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MLWS;?>"></td>   
    </tr>
    <tr>
      <td id="title2"><input  type="label" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td> 
        
    </tr>
    <tr><td colspan="2"><b>Differences:<?php echo $SecPort->PortName;?> </b></td></tr>
    <tr>
      <td id="title2"><input  type="label" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->PortName;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MHWS;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MHWN;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MLWN;?>"></td>
      <td id="title2"><input  type="text" id="txtbox" name="HWT" value="<?php echo $StandardPort->MLWS;?>"></td>   
    </tr>
  </table>
</form>

  <hr>



</body>
</html>


