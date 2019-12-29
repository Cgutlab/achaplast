<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;
    
    public function __construct($nombre, $apellido, $telefono, $email, $empresa, $mensaje)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->empresa = $empresa;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('page.mail')->with([
                        'nombre' => $this->nombre,
                        'apellido' => $this->apellido,
                        'telefono' => $this->telefono,
                        'email' => $this->email,
                        'empresa' => $this->empresa,
                        'mensaje' => $this->mensaje    
                        ]);
    }
}
