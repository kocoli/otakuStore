<?php

namespace Source\Models\User;

use Source\Core\Model;
use Source\Core\Connect;

class User extends Model
{
    protected $table = "users";

    private ?int $id;
    private ?int $idType;
    private ?string $name;
    private ?string $email;
    private ?string $password;

    public function __construct(
        ?int $id = null, 
        ?int $idType = null, 
        ?string $name = null, 
        ?string $email = null, 
        ?string $password = null
    )
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    public function getId(): ?int 
    { 
        return $this->id;
    }
    public function getIdType(): ?int 
    { 
        return $this->idType; 
    }
    public function getName(): ?string
    { 
        return $this->name;
    }
    public function getEmail(): ?string 
    { 
        return $this->email; 
    }
    public function getPassword(): ?string
    { 
        return $this->password;
    }

    public function setName(string $name): void 
    { 
        $this->name = $name; 
    }
    public function setEmail(string $email): void 
    { 
        $this->email = $email; 
    }
    public function setPassword(string $password): void 
    { 
        $this->password = $password; 
    }
}
