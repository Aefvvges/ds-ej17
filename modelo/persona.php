<?php

class Persona {
    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $ObraSocial;
    public $ListaDocumentos = array();

    public function MostrarDatos(){
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Fecha de nacimiento: ' . $this->FechaNacimiento . '<br>';
        echo 'Razon social: ' . $this->ObraSocial->RazonSocial . '<br>';
        echo 'Sitio web: ' . $this->ObraSocial->SitioWeb . '<br>';
        echo 'Lista de documentos: ';
        foreach($this->ListaDocumentos as $documento){
            echo '<li>Descripción tipo documento: ' . $documento->TipoDocumento->Descripcion . '</li>';
            echo '<li>Número de documento: ' . $documento->Numero. '</li>';
            echo '<li>Habilitado: ' . $documento->TipoDocumento->Habilitado . '</li>';
        }
    }
}