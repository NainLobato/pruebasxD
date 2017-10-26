<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordTestController3 extends Controller
{
    public function createWordDocx()
	{

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('resources/ConstanciaDeHechos.docx');

		$distrito = "XI";
		$distritoLetra = "DECIMOPRIMER";
		$numFiscal = 15;
		$numOficio = 441;
		$numCarpeta = 2478;
		$anioCarpeta = 2017;

		$municipioUnidad = "Xalapa";
		$municipioUnidadM = strtoupper($municipioUnidad);
		$dia = date('d');
		$mes = date('F');
		$anio = date('Y');
		$fechaCompleta = strtoupper($dia." DE ".$mes." DE ".$anio);
		$nombreFiscal = strtoupper("Nain Lobato");
		$diaInicio = date('d');
		$mesInicio = date('F');
		$anioInicio = date('Y');
		$nombreDenunciante = strtoupper("Romulo Romagnoli");
		$narracion = strtoupper("QUE COMPAREZCO ANTE ESTA REPRESENTACIÓN SOCIAL, PARA EN ESTE ACTO INTERPONER FORMAL DENUNCIA EN CONTRA DE QUIEN RESULTE RESPONSABLES POR EL DELITO DE ROBO DE VEHICULO, COMETIDO EN AGRAVIO DE MI PATRIMONIO, SIENDO QUE SOY PROPIETARIA DEL VEHICULO MARCA VOLKSWAGEN, TIPO SEDAN CLASIC, MODELO 1993, NUMERO DE MOTOR ACD 023050, NUMERO DE SERIE 11P9023020, COLOR BLANCO,  TAL Y COMO LO ACREDITO CON LA FACTURA NUMERO A 0585, DE FECHA 26 DE FEBRERO DE 1993, EXPEDIDA POR AUTOMOVILES SALTILLO,  S.A. DE C.V. DEBIDAMENTE ENDOSADA A MI FAVOR, CON PLACAS DE CIRCULACION  DHY1920 PARTICULARES DEL ESTADO DE CAMPECHE, COMO SEÑA PARTICULAR TIENE UNA CALCOMANIA DEL AGUILA DE LA BANDERA DE ALEMANIA ABAJO DEL CRISTAL TRASERO, VENTANAS LATERALES TRASERA ESTAN POLARIZADOS, SUS FAROS SON DE COLOR AZULES, POR DENTRO TIENE UN PORTA VASOS DE MADERA, EL TECHO DEL CARRO ESTA RASGADO, TIENE GOMAS DE COLOR NEGRO EN AMBAS DEFENSAS,  LOS ESTRIBOS ESTAN OXIDADOS, EL ESPEJO LATERAL DERECHO ES DE COLOR NEGRO, TIENE LA PINTURA RASPADA DEL FRENTE DEL COCHE, EN RELACION A LOS HECHOS NO ME CONSTAN, YA QUE QUIEN CONDUCÍA EL VEHICULO ES MI ESPOSO DE NOMBRE FRANCISCO MANUEL VASQUEZ VASQUEZ, QUIEN LLAMÓ POR TELEFONO A LAS DIECISEIS HORAS CON CINCO MINUTOS, INFORMANDOME QUE HABÍA IDO AL PARQUE CON NUESTRO MENOR HIJO, DEJANDO ESTACIONADO EL VEHICULO FRENTE A RECTORIA, UBICADO EN LOMAS DEL ESTADIO, DE ESTA CIUDAD, A LAS TRES DE LA TARDE, DESPUES DE UNA HORA SE PERCATÓ DE QUE YA NO ESTABA EL VEHICULO ESTACIONADO, EN ESE MOMENTO SE ACERCÓ UN POLICIA ESTATAL A MI ESPOSO Y LE PIDIERON UNOS DATOS  Y YA FUE REPORTADO AL 911. POR LO QUE SOLCITO SE INVESTIGUEN LOS HECHOS DENUNCIADOS Y SE PROCEDA CONFORME A DERECHO CORRESPONDA");
		$diaLetra = "veintiseis";
		$mesLetra = strtolower($mes);


		$templateProcessor->setValue('distrito', $distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('numFiscal', $numFiscal);
		$templateProcessor->setValue('numOficio', $numOficio);
		$templateProcessor->setValue('anio', $anio);
		$templateProcessor->setValue('numCarpeta', $numCarpeta);
		$templateProcessor->setValue('anioCarpeta', $anioCarpeta);

		$templateProcessor->setValue('municipioUnidad', $municipioUnidad);
		$templateProcessor->setValue('municipioUnidadM', $municipioUnidadM);
		$templateProcessor->setValue('fechaCompleta', $fechaCompleta);
		$templateProcessor->setValue('nombreFiscal', $nombreFiscal);
		$templateProcessor->setValue('diaInicio', $diaInicio);
		$templateProcessor->setValue('mesInicio', $mesInicio);
		$templateProcessor->setValue('anioInicio', $anioInicio);
		$templateProcessor->setValue('nombreDenunciante', $nombreDenunciante);
		$templateProcessor->setValue('narracion', $narracion);
		$templateProcessor->setValue('diaLetra', $diaLetra);
		$templateProcessor->setValue('mesLetra', $mesLetra);

		
		$templateProcessor->saveAs('results/ConstanciaDeHechos'.$numCarpeta.'.docx');

		return response()->download('results/ConstanciaDeHechos'.$numCarpeta.'.docx');

	}
}
