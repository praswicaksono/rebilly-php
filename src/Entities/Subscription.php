<?php
/**
 * This file is part of the PHP Rebilly API package.
 *
 * (c) 2015 Rebilly SRL
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Rebilly\Entities;

use Rebilly\Rest\Entity;

/**
 * Class Subscription
 *
 * ```json
 * {
 *   "id"
 *   "customerId"
 *   "planId"
 *   "websiteId"
 *   "initialInvoiceId"
 *   "billingContactId"
 *   "deliveryContactId"
 *   "quantity"
 *   "customFields"
 * }
 * ```
 *
 * @author Veaceslav Medvedev <veaceslav.medvedev@rebilly.com>
 * @version 0.1
 */
final class Subscription extends Entity
{
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getAttribute('status');
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->getAttribute('customerId');
    }

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        if ($this->hasEmbeddedResource('customer')) {
            return new Customer($this->getEmbeddedResource('customer'));
        } else {
            return null;
        }
    }

    /**
     * @param string $value
     *
     * @return Subscription
     */
    public function setCustomerId($value)
    {
        return $this->setAttribute('customerId', $value);
    }

    /**
     * @return string
     */
    public function getInitialInvoiceId()
    {
        return $this->getAttribute('initialInvoiceId');
    }

    /**
     * @param string $value
     *
     * @return Subscription
     */
    public function setInitialInvoiceId($value)
    {
        return $this->setAttribute('initialInvoiceId', $value);
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->getAttribute('planId');
    }

    /**
     * @return null|Plan
     */
    public function getPlan()
    {
        if ($this->hasEmbeddedResource('plan')) {
            return new Plan($this->getEmbeddedResource('plan'));
        } else {
            return null;
        }
    }

    /**
     * @param string $value
     *
     * @return Subscription
     */
    public function setPlanId($value)
    {
        return $this->setAttribute('planId', $value);
    }

    /**
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->getAttribute('websiteId');
    }

    /**
     * @return null|Website
     */
    public function getWebsite()
    {
        if ($this->hasEmbeddedResource('website')) {
            return new Website($this->getEmbeddedResource('website'));
        } else {
            return null;
        }
    }

    /**
     * @param string $value
     *
     * @return Subscription
     */
    public function setWebsiteId($value)
    {
        return $this->setAttribute('websiteId', $value);
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->getAttribute('quantity');
    }

    /**
     * @param int $value
     *
     * @return Subscription
     */
    public function setQuantity($value)
    {
        return $this->setAttribute('quantity', (int) $value);
    }

    /**
     * @deprecated The method is deprecated and will be removed in next version.
     *
     * @return string
     */
    public function getBillingContactId()
    {
        return $this->getAttribute('billingContactId');
    }

    /**
     * @deprecated The method is deprecated and will be removed in next version.
     *
     * @return null|Contact
     */
    public function getBillingContact()
    {
        if ($this->hasEmbeddedResource('billingContact')) {
            return new Contact($this->getEmbeddedResource('billingContact'));
        } else {
            return null;
        }
    }

    /**
     * @deprecated The method is deprecated and will be removed in next version.
     * @param string $value
     *
     * @return $this
     */
    public function setBillingContactId($value)
    {
        return $this->setAttribute('billingContactId', $value);
    }

    /**
     * @return string
     */
    public function getDeliveryContactId()
    {
        return $this->getAttribute('deliveryContactId');
    }

    /**
     * @deprecated The method is deprecated and will be removed in next version.
     *
     * @return null|Contact
     */
    public function getDeliveryContact()
    {
        if ($this->hasEmbeddedResource('deliveryContact')) {
            return new Contact($this->getEmbeddedResource('deliveryContact'));
        } else {
            return null;
        }
    }

    /**
     * @deprecated The method is deprecated and will be removed in next version.
     * @param string $value
     *
     * @return $this
     */
    public function setDeliveryContactId($value)
    {
        return $this->setAttribute('deliveryContactId', $value);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getAttribute('startTime');
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getAttribute('endTime');
    }

    /**
     * @return string
     */
    public function getCanceledTime()
    {
        return $this->getAttribute('canceledTime');
    }

    /**
     * @return string
     */
    public function getRenewalTime()
    {
        return $this->getAttribute('renewalTime');
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->getAttribute('createdTime');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setRenewalTime($value)
    {
        return $this->setAttribute('renewalTime', $value);
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->getAttribute('customFields');
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setCustomFields($value)
    {
        return $this->setAttribute('customFields', $value);
    }

    /**
     * @return bool
     */
    public function getAutopay()
    {
        return $this->getAttribute('autopay');
    }

    /**
     * @param bool $value
     *
     * @return $this
     */
    public function setAutopay($value)
    {
        return $this->setAttribute('autopay', $value);
    }

    /**
     * @return bool
     */
    public function getInTrial()
    {
        return $this->getAttribute('inTrial');
    }

    /**
     * @return int
     */
    public function getRebillNumber()
    {
        return $this->getAttribute('rebillNumber');
    }

    /**
     * @return string
     */
    public function getCancelCategory()
    {
        return $this->getAttribute('cancelCategory');
    }

    /**
     * @return string
     */
    public function getCanceledBy()
    {
        return $this->getAttribute('canceledBy');
    }

    /**
     * @return string
     */
    public function getCancelDescription()
    {
        return $this->getAttribute('cancelDescription');
    }

    /**
     * @return null|LeadSource
     */
    public function getLeadSource()
    {
        if ($this->hasEmbeddedResource('leadSource')) {
            return new LeadSource($this->getEmbeddedResource('leadSource'));
        } else {
            return null;
        }
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->getAttribute('billingAddress');
    }

    /**
     * @param Address|array $value
     *
     * @return $this
     */
    public function setBillingAddress($value)
    {
        return $this->setAttribute('billingAddress', $value);
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
        return $this->getAttribute('deliveryAddress');
    }

    /**
     * @param Address|array $value
     *
     * @return $this
     */
    public function setDeliveryAddress($value)
    {
        return $this->setAttribute('deliveryAddress', $value);
    }

    /**
     * @return RiskMetadata
     */
    public function getRiskMetadata()
    {
        return $this->getAttribute('riskMetadata');
    }

    /**
     * @param RiskMetadata|array $value
     *
     * @return $this
     */
    public function setRiskMetadata($value)
    {
        return $this->setAttribute('riskMetadata', $value);
    }

    /**
     * @param array $data
     *
     * @return Address
     */
    public function createBillingAddress(array $data)
    {
        return new Address($data);
    }

    /**
     * @param array $data
     *
     * @return Address
     */
    public function createDeliveryAddress(array $data)
    {
        return new Address($data);
    }
}
