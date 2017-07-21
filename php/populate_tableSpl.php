<?php
class SpltableCreater
{
        function insertRow($pk, $id, $doctype, $contype, $link)
        {
            $bvss162="http://10.96.85.181:8080/BravaView/";
            $bvss164="http://10.96.85.181:8080/BravaView/";
            $webvw;
            echo "<tr>".
    				"<td class='hidden-xs hidden-sm col-lg-1 col-md-1'>".$id."</td>".
    				"<td class='hidden-xs col-sm-2 col-lg-2 col-md-2'>".$doctype."</td>".
    				"<td class='hidden-xs col-sm-3 col-lg-3 col-md-3'>".$contype."</td>".
    				"<td class='hidden-xs col-sm-7 col-lg-6 col-md-6'>".
    					"<button type='button' class='btn btn-primary btn-stl' onclick='brava1(linkB".$id.")'>BVSS 16.2</button>".
    					"<button type='button' class='btn btn-primary btn-stl' onclick='brava2(linkB".$id.")'>BVSS 16.2.4</button>".
    					"<button type='button' class='btn btn-warning btn-hidden-xs  btn-stl' onclick='wev16(linkB".$id.")'>WebViewer 16.0</button>".
    					"<button type='button' class='btn btn-danger  btn-stl' onclick='copyToClipboard(linkB".$id.")'>Copy Link</button>".
    				"</td>".
    			"</tr>";
            echo "<span id='linkB".$id."' hidden>".$link."</span>";
        }
        
        function readTable($conn)
        {
            try {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * from speciallinks ORDER BY Category");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $table = $stmt->fetchAll();
                for($i=0; $i<sizeof($table); $i++)
                {
                    $tempArr = $table[$i];
                    $tempObj = new SpltableCreater();
                    $tempObj->insertRow($tempArr['ID'],($i+1), $tempArr['Category'], $tempArr['Type'], $tempArr['Link']);
                }
            } 
            catch(Exception $ex){
                echo $ex;
            }
            
        }
    }
?>