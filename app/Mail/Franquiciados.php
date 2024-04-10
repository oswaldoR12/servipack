<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Franquiciados extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $condicionesUso;
    public $condicionesEnvios;
    public $date;

    public function __construct( $email, $phone, $condicionesUso, $condicionesEnvios, $date)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->condicionesUso = $condicionesUso;
        $this->condicionesEnvios = $condicionesEnvios;
        $this->date = $date;
    }
    public function build()
    {
        return $this->view('emails.mail-franquiciados')
                    ->subject('Franquiciados');
    }
}
