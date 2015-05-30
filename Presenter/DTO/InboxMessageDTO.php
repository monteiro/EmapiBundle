<?php
namespace HP\Bundle\EmailApiBundle\Presenter\DTO;

class InboxMessageDTO
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $snippet;

    /**
     * @var array
     */
    public $sender;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $date;

    public function serialize()
    {
        return [
            'id' => $this->id,
            'snippet' => $this->snippet,
            'sender' => $this->sender,
            'subject' => $this->subject,
            'date' => $this->date
        ];
    }
}
