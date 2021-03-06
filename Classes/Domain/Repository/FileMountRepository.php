<?php
namespace Serfhos\MyUserManagement\Domain\Repository;

/**
 * Repository: FileMount
 *
 * @package Serfhos\MyUserManagement\Domain\Repository
 */
class FileMountRepository extends \TYPO3\CMS\Extbase\Domain\Repository\FileMountRepository
{

    /**
     * @var array
     */
    protected $defaultOrderings = array(
        'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
        'path' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    );

    /**
     * Initializes the repository.
     *
     * @return void
     */
    public function initializeObject()
    {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $querySettings->setIgnoreEnableFields(true);
        $querySettings->setEnableFieldsToBeIgnored(array('hidden'));
        $this->setDefaultQuerySettings($querySettings);
    }
}