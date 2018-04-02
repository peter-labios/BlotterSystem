
<?php
    require_once('vendor/autoload.php');
    echo "<h1>yes</h1>";
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    echo base_url('assets/clearance.docx');
    $file = base_url('assets/clearance.docx');

    $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);

    $phpword->setValue('{$full name}',$clearance['applicant_name']);
    $phpword->setValue('{$origaddress}',$clearance['orig_address']);
    $phpword->setValue('{birthdate}',$clearance['birth_date']);
    $phpword->setValue('{address}',$clearance['curr_address']);
    $phpword->setValue('{reason}',$clearance['reason']);       
    $phpword->setValue('{thedatetoday}',$date);        

    $phpword->saveAs('edited.docx');
    header("Content-disposition: attachment;filename=CERTIFICADO.docx; charset=iso-8859-1");
    echo file_get_contents("edited.docx");  
?>
