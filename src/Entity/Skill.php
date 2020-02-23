<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class Skill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technology;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $levelLabel;

    /**
     * @ORM\Column(type="integer")
     */
    private $levelPercent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTechnology(): ?string
    {
        return $this->technology;
    }

    public function setTechnology(string $technology): self
    {
        $this->technology = $technology;

        return $this;
    }

    public function getLevelLabel(): ?string
    {
        return $this->levelLabel;
    }

    public function setLevelLabel(string $levelLabel): self
    {
        $this->levelLabel = $levelLabel;

        return $this;
    }

    public function getLevelPercent(): ?int
    {
        return $this->levelPercent;
    }

    public function setLevelPercent(int $levelPercent): self
    {
        $this->levelPercent = $levelPercent;

        return $this;
    }
}
