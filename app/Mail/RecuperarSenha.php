<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecuperarSenha extends Mailable
{
    use Queueable, SerializesModels;
    private $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $token) {
        //
        $this->dados['usuario'] = $usuario;
        $this->dados['token'] = $token;
    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $email = config('mail.from'); 
        return $this->from($email['address'], 'Prefeitura de Paripueira - Não Responder')
                    ->view('email.recuperar-senha', $this->dados)->subject('Prefeitura de Paripueira - Recuperar Senha'); 
    }
}
