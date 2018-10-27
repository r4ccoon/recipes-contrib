<?php

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use MsgPhp\User\Entity\User as BaseUser;
use MsgPhp\User\UserIdInterface;

/**
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /** @ORM\Id() @ORM\GeneratedValue() @ORM\Column(type="msgphp_user_id", length=191) */
    private $id;

    public function __construct(UserIdInterface $id)
    {
        $this->id = $id;
    }

    public function getId(): UserIdInterface
    {
        return $this->id;
    }
}
