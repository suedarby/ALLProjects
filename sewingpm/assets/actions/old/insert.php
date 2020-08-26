<?php
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$num = $_POST['num'];
$descri = $_POST['descri'];
//$contact = $_POST['contact'];
//$address = $_POST['address'];
//if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into patterns (num, descri) values ('$num', '$descri')");
echo "<br/><br/>
<span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
