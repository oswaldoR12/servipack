<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Corporativos extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $asunto;
    public $asunto_text;
    public $condicionesUso;
    public $condicionesEnvios;
    public $date;

    public function __construct( $email, $phone, $asunto, $condicionesUso, $condicionesEnvios, $asunto_text, $date)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->asunto = $asunto;
        $this->asunto_text = $asunto_text;
        $this->condicionesUso = $condicionesUso;
        $this->condicionesEnvios = $condicionesEnvios;
        $this->date = $date;
    }
    public function build()
    {
        return $this->view('emails.mail-corporativo')
                    ->subject('Corporativos');
    }
}
