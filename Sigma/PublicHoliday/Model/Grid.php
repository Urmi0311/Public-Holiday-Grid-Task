<?php

namespace Sigma\PublicHoliday\Model;

use Sigma\PublicHoliday\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    public const CACHE_TAG = 'sigma_publicholiday_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'sigma_publicholiday_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'sigma_publicholiday_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init(\Sigma\PublicHoliday\Model\ResourceModel\Grid::class);
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     *
     * @param int $entityId The entity ID to set
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title.
     *
     * @param string $title The title to set
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set Content.
     *
     * @param string $content The content to set
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getPublishDate()
    {
        return $this->getData(self::PUBLISH_DATE);
    }

    /**
     * Set PublishDate.
     *
     * @param string $publishDate The publish date to set
     */
    public function setPublishDate($publishDate)
    {
        return $this->setData(self::PUBLISH_DATE, $publishDate);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     *
     * @param bool $isActive The active status to set
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     *
     * @param string $updateTime The update time to set
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     *
     * @param string $createdAt The created at timestamp to set
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
