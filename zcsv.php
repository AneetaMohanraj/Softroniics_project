<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
include 'database_connection.php'; 
 
class Fetching{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function fetchRows(){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_category");
        $st->execute();
        return $st->get_result();
    }
} 

$db = new Database();
$fet = new Fetching($db);

$data = $fet->fetchRows();
print_r($data);
if($data->num_rows > 0){
    $delimiter = ",";
    $filename = "product-table.csv";
    $f = fopen(' /opt/lampp/htdocs/softroniics_project/product-table.csv', 'w');


    $headings = array('ID','CATEGORY','IMAGE');
    fputcsv($f,$headings,$delimiter);

    while($row = $data->fetch_assoc()){
        $fields = array($row['pk_int_category_id'],$row['vchr_category'],$row['vchr_category_image']);
        fputcsv($f,$fields,$delimiter);
    }

    fseek($f,0);

    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 

    fpassthru($f); 

}
exit;













// $query = $db->query("SELECT * FROM members ORDER BY id ASC"); 
 
// if($query->num_rows > 0){ 
//     $delimiter = ","; 
//     $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
//     // Create a file pointer 
//     $f = fopen('php://memory', 'w'); 
     
//     // Set column headers 
//     $fields = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'GENDER', 'COUNTRY', 'CREATED', 'STATUS'); 
//     fputcsv($f, $fields, $delimiter); 
     
    // // Output each row of the data, format line as csv and write to file pointer 
    // while($row = $query->fetch_assoc()){ 
    //     $status = ($row['status'] == 1)?'Active':'Inactive'; 
    //     $lineData = array($row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['gender'], $row['country'], $row['created'], $status); 
    //     fputcsv($f, $lineData, $delimiter); 
    // } 
     
//     // Move back to beginning of file 
//     fseek($f, 0); 
     
//     // Set headers to download file rather than displayed 
//     header('Content-Type: text/csv'); 
//     header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
//     //output all remaining data on a file pointer 
//     fpassthru($f); 
// } 
// exit; 
 
?>