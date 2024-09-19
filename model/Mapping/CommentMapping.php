<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;

class CommentMapping extends AbstractMapping
{
    protected ?int $joe_comm_id = null;
    protected ?string $joe_comm_nom = null;
    protected ?string $joe_comm_mail = null;
    protected ?string $joe_comm_tele = null;
    protected ?string $joe_comm_text = null;
    protected ?bool $joe_comm_vis = null;
    
}