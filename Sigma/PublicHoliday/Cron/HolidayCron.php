<?php
namespace Sigma\PublicHoliday\Cron;

use Sigma\PublicHoliday\Model\ResourceModel\Grid\CollectionFactory;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use Psr\Log\LoggerInterface;

class HolidayCron
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var \Magento\Framework\Stdlib\DateTime\TimezoneInterface
     */
    protected $timezone;

    /**
     * Description
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Constructor.
     *
     * @param CollectionFactory $collectionFactory
     * @param TimezoneInterface $timezone
     * @param LoggerInterface $logger
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        TimezoneInterface $timezone,
        LoggerInterface $logger
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->timezone = $timezone;
        $this->logger = $logger;
    }
    /**
     * Executes the cron job.
     */
    public function execute()
    {
        try {
            $collection = $this->collectionFactory->create();
            $currentDateTime = $this->timezone->date()->format('Y-m-d H:i:s');

            foreach ($collection as $item) {
                $publishDateTime = $item->getPublishDate();
                if ($publishDateTime < $currentDateTime) {
                    $item->setIsActive(false);
                    $item->save();
                }
            }
            $this->logger->info('Cron job executed successfully.');
        } catch (\Exception $e) {
            $this->logger->error('Cron job encountered an error: ' . $e->getMessage());
        }
    }
}
