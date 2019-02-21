<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TenantsRepository")
 */
class Tenants
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $tenant_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenantId(): ?int
    {
        return $this->tenant_id;
    }

    public function setTenantId(int $tenant_id): self
    {
        $this->tenant_id = $tenant_id;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }
}
