<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;

class ProjectMapping extends AbstractMapping
{
protected ?int $joe_proj_id = null;
protected ?string $joe_proj_alt = null;
protected ?string $joe_proj_class = null;
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

    public function getJoeProjAlt(): ?string
    {
        return $this->joe_proj_alt;
    }

    public function setJoeProjAlt(?string $joe_proj_alt): void
    {
        $this->joe_proj_alt = $joe_proj_alt;
    }

    public function getJoeProjClass(): ?string
    {
        return $this->joe_proj_class;
    }

    public function setJoeProjClass(?string $joe_proj_class): void
    {
        $this->joe_proj_class = $joe_proj_class;
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