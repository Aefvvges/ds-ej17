<?php
require_once 'modelo/documento.php';
require_once 'modelo/obrasocial.php';
require_once 'modelo/persona.php';
require_once 'modelo/tipodocumento.php';

$os = new ObraSocial();
$os->Id = 1;
$os->RazonSocial = 'Pami';
$os->Cuit = 1991203939;
$os->SitioWeb = 'Pami.com.ar';
$os->Telefono = 3416939000;

$td1 = new TipoDocumento();
$td1->Id = 1;
$td1->Descripcion = 'DNI';
$td1->Habilitado = 'true';

$td2 = new TipoDocumento();
$td2->Id = 2;
$td2->Descripcion = 'Pasaporte';
$td2->Habilitado = 'true';

$p = new Persona();
$p->Nombre = 'Jose';
$p->Apellido = 'Perez';
$p->FechaNacimiento = '12/03/1952';
$p->ObraSocial = $os;

$d1 = new Documento();
$d1->Id = 1;
$d1->Numero = 40123123;
$d1->Habilitado = 'true';
$d1->TipoDocumento = $td1;

$d2 = new Documento();
$d2->Id = 2;
$d2->Numero = 50123123;
$d2->Habilitado = 'true';
$d2->TipoDocumento = $td2;

$p->ListaDocumentos[] = $d1;
$p->ListaDocumentos[] = $d2;

$p->MostrarDatos();
