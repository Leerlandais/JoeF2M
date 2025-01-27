<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;
use model\Trait\TraitLaundryRoom;
use Exception;

class CommentMapping extends AbstractMapping
{
    protected ?int $joe_comm_id = null;
    protected ?string $joe_comm_nom = null;
    protected ?string $joe_comm_mail = null;
    protected ?string $joe_comm_tele = null;
    protected ?string $joe_comm_mess = null;
    protected ?bool $joe_comm_vis = null;

    use TraitLaundryRoom;
    public function getJoeCommId(): ?int
    {
        return $this->joe_comm_id;
    }

    public function setJoeCommId(?int $joe_comm_id): void
    {
        $this->joe_comm_id = $joe_comm_id;
    }

    public function getJoeCommNom(): ?string
    {
        return $this->joe_comm_nom;
    }

    public function setJoeCommNom(?string $joe_comm_nom): void
    {

        $this->joe_comm_nom = $this->standardClean($joe_comm_nom);
    }

    public function getJoeCommMail(): ?string
    {
        return $this->joe_comm_mail;
    }

    public function setJoeCommMail(?string $joe_comm_mail): void
    {
        $this->joe_comm_mail = $this->emailClean($joe_comm_mail);
    }

    public function getJoeCommTele(): ?string
    {
        return $this->joe_comm_tele;
    }

    public function setJoeCommTele(?string $joe_comm_tele): void
    {
        $this->joe_comm_tele = $this->standardClean($joe_comm_tele);
    }

    public function getJoeCommMess(): ?string
    {
        return $this->joe_comm_mess;
    }

    public function setJoeCommMess(?string $joe_comm_mess): void
    {
        if($this->findTheNeedles($joe_comm_mess)) throw new Exception("Menace d'Injection détectée");
        $this->joe_comm_mess = $this->standardClean($joe_comm_mess);
    }

    public function getJoeCommVis(): ?bool
    {
        return $this->joe_comm_vis;
    }

    public function setJoeCommVis(?bool $joe_comm_vis): void
    {
        $this->joe_comm_vis = $joe_comm_vis;
    }



} // end class