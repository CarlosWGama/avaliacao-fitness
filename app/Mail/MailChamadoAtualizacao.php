<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailChamadoAtualizacao extends Mailable {
    use Queueable, SerializesModels;
    private $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket, $comentario) {
        $this->dados['autor'] = $ticket->nome;
        $this->dados['codigo'] = $ticket->id;
        $this->dados['token'] = base64_encode($ticket->id.'-'.$ticket->email);
        $this->dados['email'] = $ticket->email;
        $this->dados['comentario'] = $comentario;
        $this->dados['status'] = $ticket->status_descricao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $email = config('mail.from'); 
        return $this->from($email['address'], 'Prefeitura de Paripueira - Não Responder')
                    ->view('email.fale-conosco.atualizacao', $this->dados)->subject('Prefeitura de Paripueira - Atualização de Chamado'); 
    }
}
