<?php

namespace App\Notifications;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class SendNotification extends Notification
{
    use Queueable;

    private string $name;
    private string $surname;
    private string $email;
    private int $phone;
    private string $type;
    private string $details;

    private array $types = array(
        1 => "Correu electronic",
        2 => "Whatsapp",
        3 => "Telegram",
        4 => "Trucada de veu"
    );


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $name, string $surname, string $email, int $phone, int $type, string $details)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $this->types[$type];
        $this->details = $details;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
             ->to('-534193492')
             ->content('Un nou client vol informació: En ' . $this->name . ' ' . $this->surname
                 . ' amb email ' . $this->email . ' i telèfon ' . $this->phone . ' vol ser contactat per '
                . $this->type . '. Aquests son els detalls addicionals: ' . $this->details);
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
