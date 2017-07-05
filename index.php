<?php
$data = '[{"MRNNumber":"0098654324","MPI":null,"LastName":"Copy Test","FirstName":"MRN Test","Email":null,"Diagnosis":null},{"MRNNumber":"22223333","MPI":null,"LastName":"James","FirstName":"Ashley","Email":"ajames@uog.com","Diagnosis":null}]';
header('Content-Type: application/json');
echo json_encode($data);
?>
