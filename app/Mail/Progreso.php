<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Progreso extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $condicionesUso;
    public $pais;
    public $condicionesEnvios;
    public $date;
    public function __construct( $email, $condicionesUso, $condicionesEnvios, $pais, $date)
    {
        $this->email = $email;
        $this->condicionesUso = $condicionesUso;
        $this->condicionesEnvios = $condicionesEnvios;
        $this->date = $date;
        $this->pais = $pais;
    }
    public function build()
    {
        return $this->view('emails.mail-progreso')
                    ->subject('Progreso');
    }
}
