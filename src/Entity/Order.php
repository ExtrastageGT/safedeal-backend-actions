<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer;

    /**
     * @ORM\Column(type="integer")
     */
    private $sender;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $courier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addressFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addressTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deliveryDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(int $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getSender(): ?int
    {
        return $this->sender;
    }

    public function setSender(int $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getCourier(): ?int
    {
        return $this->courier;
    }

    public function setCourier(?int $courier): self
    {
        $this->courier = $courier;

        return $this;
    }

    public function getAddressFrom(): ?string
    {
        return $this->addressFrom;
    }

    public function setAddressFrom(string $addressFrom): self
    {
        $this->addressFrom = $addressFrom;

        return $this;
    }

    public function getAddressTo(): ?string
    {
        return $this->addressTo;
    }

    public function setAddressTo(string $addressTo): self
    {
        $this->addressTo = $addressTo;

        return $this;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(string $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    public function setCreationDate(string $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}