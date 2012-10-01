<!doctype = html>
<html>
<?php
echo "Direct Message Network for Job 1334";

	$users = array();
	$links = array();
        $row = array();
        $handle = fopen('networkDataJob1334.csv','r') or die("can't open file");
	while($row = (fgetcsv($handle))){
		$u1=false;
		$u2=false;
		for($i = 0; $i < count($users); $i++){
			if ($row[2] == $users[$i]['id']){
				$u1 = true;
			}
			if ($row[3] == $users[$i]['id']){
				$u2 = true;
			}
		}
		if($u1==false){
			$u = array('id'=>$row[2],'name'=>$row[0]);
			$users[] = $u;
		}
		if($u2==false){
			$u = array('id'=>$row[3],'name'=>$row[1]); 
			$users[] = $u;
		}
                
	// connections
	
		$user1 = $row[3];
		$user2 = $row[2];
		$value = $row[4];
		if ( intval($user2) < intval($user1)){
			$temp = $user2;
			$user2 = $user1;
			$user1 = $temp;
		}
		
		for ($i = 0 ; $i < count($users); $i++){
			if ($users[$i]['id'] == $user1){
				$u1index = $i;
			}
			if ($users[$i]['id'] == $user2){
				$u2index = $i;
			}
		}
		
		$present = false;
		for($i = 0; $i<count($links);$i++){
			if ($links[$i]['source'] == $u1index){
				if ($links[$i]['target'] == $u2index){
					$links[$i]['weight'] += $value;
					$present = true;
				}
			}
		}
		if ($present == false){
			$link = array('source'=>$u1index , 'target'=>$u2index , 'weight'=>($value));
			$links[] = $link;
		}
		

	} //end while
	echo $links;
	for ($i = 0; $i < count($links); $i++) {
		$links[$i]['weight'] = 1-(1/$links[$i]['weight']);
		//echo $links[$i]['source']." . ".$links[$i]['target']." . ".$links[$i]['weight']."<br>";
	}
	
	$numusers = count($users);
	
	$nodes=array();
	for($i=0;$i<count($users);$i++){
		$node = array('label'=>$users[$i]['name']);
		$nodes[] = $node;
	}
	

	include('forcegraph.php');
	


?>
</html>

  
		
