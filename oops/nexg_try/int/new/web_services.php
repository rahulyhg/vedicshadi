<?php
//intval function use
$ab="10.9";
$ss=intval($ab);
//echo $ss;



//connection 
mysql_connect("localhost","root","") or die('Can not create a location');
mysql_select_db("antimsan") or die('db not selected');
$query=mysql_query("select user_id,username from user order by user_id asc");
$details=array();
while($row=mysql_fetch_assoc($query)){
$details[]=array('detail'=>$row);
}
// for jason encode convert

//header('Content-type:application/json');
//echo json_encode(array('details'=>$details));


// for XML format Convert
header('Content-type:text/xml');
echo "<details>";


foreach($details as $index => $post) {
			if(is_array($post)) {
				foreach($post as $key => $value) {
					echo '<',$key,'>';
					if(is_array($value)) {
						foreach($value as $tag => $val) {
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}

echo "</details>";


