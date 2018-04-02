
// require_once('vendor/autoload.php');
// echo "<h1>yes</h1>";
// $phpWord = new \PhpOffice\PhpWord\PhpWord();

// echo base_url('assets/clearance.docx');
// $file = base_url('assets/clearance.docx');

// $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);

// $phpword->setValue('{$full name}',$name);
//  $phpword->setValue('{$origaddress}',$from);
// $phpword->setValue('{birthdate}',$bday);
// $phpword->setValue('{address}',$address);
// $phpword->setValue('{reason}',$reason);       
// $phpword->setValue('{thedatetoday}',$date);        

// $phpword->saveAs('edited.docx');
// header("Content-disposition: attachment;filename=CERTIFICADO.docx; charset=iso-8859-1");
// echo file_get_contents("edited.docx");  
<?php echo form_open('upload.php')?>
	Name: <input type="text" name="name">
	Image: <input type="file" name="image" id="image">
	<button type="submit" name="submit">Submit</button>
</form>