<?php
$courses=$_GET["courses"];
$courseNames = array(
						"MS Word",
						"MS Excel",
						"Flash",
						"Photoshop",
						"PHP",
						"C#"
						);
$s=0;
for ($i = 0; $i < sizeof($courseNames); $i++) {
							if (isset($courses[$i])){
								$arr[$s] = $courseNames[$i];
                                $s++;
                            }
						}
echo json_encode($arr);

?>