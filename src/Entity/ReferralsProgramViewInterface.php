<?php

namespace Odiseo\SyliusReferralsPlugin\Entity;

use Sylius\Component\Customer\Model\CustomerInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface ReferralsProgramViewInterface extends ResourceInterface
{
    /**
     * @param ReferralsProgramInterface|null $affiliateProgram
     *
     * @return void
     */
    public function setReferralsProgram(?ReferralsProgramInterface $affiliateProgram): void;

    /**
     * @return ReferralsProgramInterface|null
     */
    public function getReferralsProgram(): ?ReferralsProgramInterface;

    /**
     * @param CustomerInterface|null $customer
     *
     * @return void
     */
    public function setCustomer(?CustomerInterface $customer): void;

    /**
     * @return CustomerInterface|null
     */
    public function getCustomer(): ?CustomerInterface;

    /**
     * @param string|null $ip
     *
     * @return void
     */
    public function setIp(?string $ip): void;

    /**
     * @return string|null
     */
    public function getIp(): ?string;
}
