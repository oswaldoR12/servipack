<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Envios extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $comments;
    public $condicionesUso;
    public $condicionesEnvios;
    public $date;

    public function __construct($name, $email, $phone, $comments, $condicionesUso, $condicionesEnvios, $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->comments = $comments;
        $this->condicionesUso = $condicionesUso;
        $this->condicionesEnvios = $condicionesEnvios;
        $this->date = $date;
    }
    public function build()
    {
        return $this->view('emails.mail-envios')
                    ->subject('Consulta');
    }
}
