<?php

namespace Sigma\PublicHoliday\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    public const ENTITY_ID = 'entity_id';
    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const PUBLISH_DATE = 'publish_date';
    public const IS_ACTIVE = 'is_active';
    public const UPDATE_TIME = 'update_time';
    public const CREATED_AT = 'created_at';

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();

    /**
     * Set EntityId.
     *
     * @param int $entityId The entity ID to set
     */
    public function setEntityId($entityId);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle();

    /**
     * Set Title.
     *
     * @param string $title The title to set
     */
    public function setTitle($title);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getContent();

    /**
     * Set Content.
     *
     * @param string $content The content to set
     */
    public function setContent($content);

    /**
     * Get Publish Date.
     *
     * @return varchar
     */
    public function getPublishDate();

    /**
     * Set PublishDate.
     *
     * @param string $publishDate The publish date to set
     */
    public function setPublishDate($publishDate);

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive();

    /**
     * Set IsActive.
     *
     * @param bool $isActive The active status to set
     */
    public function setIsActive($isActive);

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime();

    /**
     * Set UpdateTime.
     *
     * @param string $updateTime The update time to set
     */
    public function setUpdateTime($updateTime);

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     *
     * @param string $createdAt The created at timestamp to set
     */
    public function setCreatedAt($createdAt);
}
