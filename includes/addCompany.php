<?php
include 'inc/db.php';

if (isset($_POST["import"])) {
    $file = $_FILES["file"]["tmp_name"];
    $handle = fopen($file, "r");
    try { 
    $sth = $pdo->prepare('INSERT INTO company (name,localitie,address,contact) VALUES (?, ?, ?, ?)');
    fgets($handle);
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
    $sth->execute($data);
    }
    fclose($handle);
    $type = "success";
    $message = "CSV Data Imported into the Database"; 
	} catch(PDOException $e) {
		$type = "error";
        $message = "Problem in Importing CSV Data";
		die($e->getMessage());
	}
	 
}
?>
<div class="outer-scontainer">
    <div id="responseComp" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?> col-12"><?php if(!empty($message)) { echo $message; } ?></div>
    <div class="row">
        <form class="text-center" action="" method="post" enctype="multipart/form-data" name="frmCSVImportComp" id="frmCSVImportComp">
            <div class="form-group"> 
                <input type="file" name="file" id="fileComp" accept=".csv">
                <button type="submit" id="submit" name="import" class="btn btn-custom">Import</button>
            </div>
        </form>
    </div>
    <?php 
    $result = $pdo->query('SELECT * FROM company');
    $resultS = $result->rowCount();
    if ($resultS > 0) {
     ?>
     <div class="row">
     <table class="table table-bordered">
         <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Localitie</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Registration date</th>
                    <th scope="col">id company</th>
                </tr>
            </thead>
            <?php
            while ($row = $result->fetch()){  
                ?>
            <tbody>
                <tr>
                    <td scope="row"><?php  echo $row->name; ?></td>
                    <td scope="row"><?php  echo $row->localitie; ?></td>
                    <td scope="row"><?php  echo $row->address; ?></td>
                    <td scope="row"><?php  echo $row->contact; ?></td>
                    <td scope="row"><?php  echo $row->registration_date; ?></td>
                    <td scope="row"><?php  echo $row->company_id; ?></td>
                </tr>
                    <?php
                }
                ?>
            </tbody>
     </table>
     </div>
   <?php } ?>
</div>