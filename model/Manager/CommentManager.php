<?php

namespace model\Manager;

use model\Abstract\AbstractManager;
use model\Mapping\CommentMapping;

class CommentManager extends AbstractManager
{

    public function addComment (CommentMapping $mapping) : bool
    {
        $nom  = $mapping->getJoeCommNom();
        $mail = $mapping->getJoeCommMail();
        $tele = $mapping->getJoeCommTele();
        $text = $mapping->getJoeCommMess();

        $stmt = $this->db->prepare("INSERT INTO joe_comments 
                                            (`joe_comm_nom`, `joe_comm_mail`, `joe_comm_tele`, `joe_comm_mess`)
                                    VALUES (:nom, :mail, :tele, :text)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':tele', $tele);
        $stmt->bindParam(':text', $text);
        $stmt->execute();
        if($stmt->rowCount() === 0) return false;

        return true;
    }

}