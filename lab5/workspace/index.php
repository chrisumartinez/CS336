<?php

   include 'database.php'; 
   
   function displayDeviceList() {
       
       $sql = "SELECT * from device WHERE 1"; 
       $named_parameters = array(); 
       
       if (isset($_GET['submit'])) {
           if (!empty($_GET['device-name'])) {
               // construct our SQL query accordingly.
               $sql .=  " AND deviceName LIKE :deviceName"; 
               $named_parameters[":deviceName"] = "%" . $_GET['device-name'] . "%"; 
           }
           
           if (!empty($_GET['device-type'])) {
               // construct our SQL query accordingly.
               $sql .=   " AND deviceType = '". $_GET['device-type'] . "'"; 
           }
           
           if (isset($_GET['available'])) {
               // construct our SQL query accordingly.
               $sql .=   " AND status = 'available'"; 
           }
           
           if (isset($_GET['order-by'])) {
               // construct our SQL query accordingly.
               $sql .=   " ORDER BY ". $_GET['order-by']; 
           }
           
           
       }
       else{
           
           //initalize sorted data if nothing is selected
               //initialize sorted db
        $sql = "SELECT * from device WHERE 1"; 
        $sql .=   " ORDER BY ". "deviceName"; 
        
           
       }
       $dbConn = getDatabaseConnection(); 
   
       
       $statement = $dbConn->prepare($sql);
       $statement->execute($named_parameters);
        
       $records = $statement->fetchAll(); 
        
       foreach ($records as $record) {
            
            echo $record["deviceName"]." ".$record["deviceType"]." ".$record["price"]." ".$record["status"]."<br>"; 
       }
   }
   function getDeviceTypes() {
        $dbConn = getDatabaseConnection(); 
        $sql = 'SELECT DISTINCT(deviceType)  FROM device;'; 
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        
        $records = $statement->fetchAll(); 
        
        foreach ($records as $record) {
            echo "<option value='". $record['deviceType']. "'>". $record['deviceType']. "</option>"; 
        }
   }
   
  
  ?>
  
  
  <html>
      <head>
           <style> @import url("css/styles.css");
        </style>
      </head>
      <body>
          <form>
               Device Name: <input type="text" name="device-name" id = "deviceName">
               
               
               Device Type: 
               <select name="device-type" id = "deviceType">
                     <option value=""></option>
                     <?=getDeviceTypes()?>
               </select>
               
               <input type="checkbox" name="available" id="checbox"> Available 
               
               <br>
               <input type="radio" name="order-by" value="price" id = "price"> Price 
               <input type="radio" name="order-by" value="deviceName"> Name
               <br>
               <input type="submit" value="Search" name="submit" id="submit">
          </form>
          
          <?=displayDeviceList()?>
      </body>
  </html>