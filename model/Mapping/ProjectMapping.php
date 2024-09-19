<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;

class ProjectMapping extends AbstractMapping
{
protected ?int $joe_proj_id = null;
protected ?string $joe_proj_title = null;
protected ?string $joe_proj_desc = null;
protected ?string $joe_proj_img_loc = null;
protected ?string $joe_proj_url = null;
protected ?bool $joe_proj_vis = null;

    public function getJoeProjId(): ?int
    {
        return $this->joe_proj_id;
    }

    public function setJoeProjId(?int $joe_proj_id): void
    {
        $this->joe_proj_id = $joe_proj_id;
    }

    public function getJoeProjTitle(): ?string
    {
        return $this->joe_proj_title;
    }

    public function setJoeProjTitle(?string $joe_proj_title): void
    {
        $this->joe_proj_title = $joe_proj_title;
    }

    public function getJoeProjDesc(): ?string
    {
        return $this->joe_proj_desc;
    }

    public function setJoeProjDesc(?string $joe_proj_desc): void
    {
        $this->joe_proj_desc = $joe_proj_desc;
    }

    public function getJoeProjImgLoc(): ?string
    {
        return $this->joe_proj_img_loc;
    }

    public function setJoeProjImgLoc(?string $joe_proj_img_loc): void
    {
        $this->joe_proj_img_loc = $joe_proj_img_loc;
    }

    public function getJoeProjUrl(): ?string
    {
        return $this->joe_proj_url;
    }

    public function setJoeProjUrl(?string $joe_proj_url): void
    {
        $this->joe_proj_url = $joe_proj_url;
    }

    public function getJoeProjVis(): ?bool
    {
        return $this->joe_proj_vis;
    }

    public function setJoeProjVis(?bool $joe_proj_vis): void
    {
        $this->joe_proj_vis = $joe_proj_vis;
    }


}