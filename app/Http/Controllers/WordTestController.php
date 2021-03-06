<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordTestController extends Controller
{

	public function createWordDocx()
	{
		$wordTest = new \PhpOffice\PhpWord\PhpWord();

		$newSection = $wordTest->addSection();

		$desc1 = "The Portfolio details is a very useful feature of the web page. You can establish your archived details and the works to the entire web community. It was outlined to bring in extra clients, get you selected based on this details.";

		$newSection->addText($desc1, array('name' => 'Tahoma', 'size' => 15, 'color' => 'red'));

		$objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
		
		try {
			$objectWriter->save(storage_path('TestWordFile.docx'));
		} catch (Exception $e) {
		}

		return response()->download(storage_path('TestWordFile.docx'));
	}

}
