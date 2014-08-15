<?php 



require_once("includes/connection.php");
require_once("includes/functions.php");

$id = $_POST['id'];

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/phpexcel/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");


// Add some data

    //To set the width of the column.
        foreach(range('A','K') as $columnID) {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
                ->setAutoSize(true);
        }

        $objPHPExcel->getActiveSheet()->getStyle("A1:K1")->getFont()->setBold(true);

$objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'S.no')
                    ->setCellValue('B1', 'Name')
                    ->setCellValue('C1', 'Roll number')
                    ->setCellValue('D1', 'Phone number')
                    ->setCellValue('E1', 'Alternate Email')
                    ->setCellValue('F1', '10th Percentage')
                    ->setCellValue('G1', '12th Percentage')
                    ->setCellValue('H1', 'Institute')
                    ->setCellValue('I1', 'Course')
                    ->setCellValue('J1', 'Stream')
                    ->setCellValue('K1', 'College CGPA');


        $result = get_students_list($id);
        
        if(mysql_num_rows($result) > 0 ){
            
            $i = 3;
            while($array = mysql_fetch_array($result)) {
                
            $name = $array['name'];
            $rollnum = $array['rollnum'];
        
            $alternateEmail = $array['alternateEmail'];
                
           
            $institute = $array['institute'];
            $cgpa = $array['cgpa'];
            
            $phoneNum = $array['phoneNum'];

            $course = $array['course'];
            $stream = $array['stream']; 
            $tenth = $array['tenth'];
            $twelth = $array['twelth'];
                
               
                
                $objPHPExcel->setActiveSheetIndex(0)
                
                    ->setCellValue('A'.$i, $i)
                    ->setCellValue('B'.$i, $name)
                    ->setCellValue('C'.$i, $rollnum)
                    ->setCellValue('D'.$i, $phoneNum)
                    ->setCellValue('E'.$i, $alternateEmail)
                    ->setCellValue('F'.$i, $tenth)
                    ->setCellValue('G'.$i, $twelth)
                    ->setCellValue('H'.$i, $institute)
                    ->setCellValue('I'.$i, $course)
                    ->setCellValue('J'.$i, $stream)
                    ->setCellValue('K'.$i, $cgpa);
                
                $i++;
            }
        }
        else {
            //echo '<div class="ST-noStudentsdiv">No students</div>';
            //$content .= "No Students";

        }


// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="students_list.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;