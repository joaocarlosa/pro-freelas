<?php

namespace App\Mail;

use App\Models\Projeto;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoProjetoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $projeto = Projeto::orderBy('created_at', 'desc')->first();
        $data["email"] = "jonatha.php@gmail.com";
        $data["title"] = "Novo projeto publicado";
        $data['projeto'] = $projeto;

        return $this->subject('Um novo projeto publicado')
                    ->view('mail.novo-projeto', $data);
    }
}
