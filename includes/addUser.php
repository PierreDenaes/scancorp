<?php
include 'inc/db.php';

if (isset($_POST["import"])) {
    $file = $_FILES["file"]["tmp_name"];
    $handle = fopen($file, "r");
    try { 
    $sth = $pdo->prepare('INSERT INTO user (first_name,last_name,email,company_sector) VALUES (?, ?, ?, ?)');
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
            <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?> col-12"><?php if(!empty($message)) { echo $message; } ?></div>
            <div class="row mt-4">
                <form class="text-center" action="" method="post" enctype="multipart/form-data" name="frmCSVImport" id="frmCSVImport">
                    <div class="form-group"> 
                        <input type="file" name="file" id="file" accept=".csv">
                        <button type="submit" id="submit" name="import" class="btn btn-custom">Import</button>
                    </div>
                </form>
            </div>
            <?php 
            $result = $pdo->query('SELECT * FROM user');
            $resultS = $result->rowCount();
            if ($resultS > 0) {
             ?>
             <div class="row">
             <table class="table table-bordered">
                 <thead>
                        <tr>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">email</th>
                            <th scope="col">company sector</th>
                            <th scope="col">id company</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = $result->fetch()){  
                        ?>
                    <tbody>
                        <tr>
                            <td scope="row"><?php  echo $row->first_name; ?></td>
                            <td scope="row"><?php  echo $row->last_name; ?></td>
                            <td scope="row"><?php  echo $row->email; ?></td>
                            <td scope="row"><?php  echo $row->company_sector; ?></td>
                            <td scope="row"><?php  echo $row->company_company_id; ?></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </tbody>
             </table>
             </div>
           <?php } ?>
        </div>