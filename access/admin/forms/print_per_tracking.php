<?php 
require('./../../../plugins/fpdf/fpdf.php');
require('./../../../methods/mysqliConnection.php');
class PDF extends FPDF
{
    
// Page header
function Header()
{
    // Logo
     $this->Image('../images/bsulogo.png',50,10,100);
     $this->Image('../images/form-back.jpg',5,50,200);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Ln(25);
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'',0,0,'C');
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);

    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
}

function FancyTable() {

$database = new Database();

$id = $_GET['id'];
$query = $database->conn->query("SELECT * FROM tbl_tracking WHERE id = $id");
$row = $query->fetch_array();


/*Cell(width , height , text , border , end line , [align] )*/

$this->SetFont('Arial','B',15);
$this->cell(60, 10, "Full name", 0, 0, 'C');
$this->cell(60, 10, "Age", 0, 0, 'C');
$this->cell(60, 10, "Gender", 0, 1, 'C');
// value here
$this->SetFont('Arial','',10);
$this->cell(50, 10, $row['name'], 0, 0, 'R');
$this->cell(50, 10, $row['age'], 0, 0, 'R');
$this->cell(50, 10, $row['gender'], 0, 0, 'R');

// header
$this->cell(50, 10, "", 0, 1);
$this->SetFont('Arial','B',15);
$this->cell(60, 10, "Civil Status", 0, 0, 'C');
$this->cell(60, 10, "Address", 0, 0, 'C');
$this->cell(60, 10, "School", 0, 1, 'C');
// value here
$this->SetFont('Arial','',10);
$this->cell(50, 10, $row['civil_status'], 0, 0, 'R');
$this->cell(50, 10, $row['address'], 0, 0, 'R');
$this->cell(50, 10, $row['masters_school'], 0, 0, 'R');

// header
$this->cell(50, 10, "", 0, 1);
$this->SetFont('Arial','B',15);
$this->cell(60, 10, "Company Name", 0, 0, 'C');
$this->cell(60, 10, "Position", 0, 0, 'C');
$this->cell(60, 10, "Company Address", 0, 1, 'C');
// value here
$this->SetFont('Arial','',10);
$this->cell(50, 10, $row['company_name'], 0, 0, 'R');
$this->cell(50, 10, $row['position'], 0, 0, 'R');
$this->cell(50, 10, $row['company_address'], 0, 0, 'R');

// header
$this->cell(50, 10, "", 0, 1);
$this->SetFont('Arial','B',15);
$this->cell(60, 10, "Program", 0, 0, 'C');
$this->cell(60, 10, "Degree", 0, 0, 'C');
$this->cell(60, 10, "Year graduated", 0, 1, 'C');
// value here
$this->SetFont('Arial','',10);
$this->cell(50, 10, $row['masters_program'], 0, 0, 'R');
$this->cell(50, 10, $row['degree'], 0, 0, 'R');
$this->cell(50, 10, $row['year_graduated'], 0, 0, 'R');

// header
$this->cell(50, 10, "", 0, 1);
$this->SetFont('Arial','B',15);
$this->cell(60, 10, "Master program", 0, 0, 'C');
$this->cell(60, 10, "Eployed", 0, 1, 'C');

// value here
$this->SetFont('Arial','',10);
$this->cell(50, 10, $row['program'], 0, 0, 'R');
$this->cell(50, 10, $row['is_employed'], 0, 0, 'R');



}



}

// Instanciation of inherited class


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Ln(8);
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// Column headings


$pdf->FancyTable();

// $pdf->Cell(50 ,10,'',0,1);


$pdf->Output('','report_tracking.pdf'); 
?>

