<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dteArticulo;

class Dte extends Controller
{
    public function generarFirmarDte(Request $request){

    	//toda la cabecera
    	Folio	TipoDTE	FchEmis	FmaPago	TipoDespacho	MedioPago	RUTEmisor	RznSoc	GiroEmis	Telefono	CorreoEmisor	Acteco	DirOrigen	CmnaOrigen	CiudadOrigen	RUTRecep	RznSocRecep	GiroRecep	DirRecep	CmnaRecep	CiudadRecep	MntNeto	MntExe	IVA	MontoImp	MntTotal		TpoDocRef	FolioRef	CodRef	RazonRef	FchEmisRef	IndTraslado	Patente	RUTTrans	RUTChofer	NombreChofer	DirDest	CmnaDest	Nulo	DocAnula	TipoAnula	

    	//todo el detalle


		Folio
		TipoDTE
		RUTEmisor
		Item
		CodItem
		NmbItem
		QtyItem
		PrcItem
		CodImpAdic
		MontoItem
		IVA
		TpoDocLiq

    	//referencia
    	Folio	
    	TipoDTE	
    	RUTEmisor	
    	NroRef	
    	TpoDocRef	
    	FolioRef	
    	CodRef	
    	RazonRef	
    	FchEmisRef	
    	IndGlobal

    	//documento en base64



    	return response()->json([
            'message' => 'Documento generado exitosamente'
        ], 201);


    }


    public function firmarDte(Request $request){


    	
    	return response()->json([
            'message' => 'Documento generado exitosamente'
        ], 201);


    }
    

}