<?php

namespace In2code\In2studyfinder\Domain\Model;

use In2code\In2studyfinder\Utility\GlobalDataUtility;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * StudyCourse
 */
class StudyCourse extends AbstractEntity implements StudyCourseInterface
{
    const TABLE = 'tx_in2studyfinder_domain_model_studycourse';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * standardPeriodOfStudy
     *
     * @var int
     */
    protected $standardPeriodOfStudy = 0;

    /**
     * ectsCredits
     *
     * @var int
     */
    protected $ectsCredits = 0;

    /**
     * tuitionFee
     *
     * @var float
     */
    protected $tuitionFee = 0.0;

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * universityPlace
     *
     * @var int
     */
    protected $universityPlace = 0;

    /**
     * contentElements
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TtContent>
     */
    protected $contentElements = null;

    /**
     * academicDegree
     *
     * @var \In2code\In2studyfinder\Domain\Model\AcademicDegree
     */
    protected $academicDegree = null;

    /**
     * department
     *
     * @var \In2code\In2studyfinder\Domain\Model\Department
     */
    protected $department = null;

    /**
     * faculty
     *
     * @var \In2code\In2studyfinder\Domain\Model\Faculty
     */
    protected $faculty = null;

    /**
     * typeOfStudy
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TypeOfStudy>
     */
    protected $typesOfStudy = null;

    /**
     * courseLanguages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\CourseLanguage>
     */
    protected $courseLanguages = null;

    /**
     * admissionRequirements
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\AdmissionRequirement>
     */
    protected $admissionRequirements = null;

    /**
     * startOfStudy
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\StartOfStudy>
     */
    protected $startsOfStudy = null;

    /**
     * Meta Pagetitle
     *
     * @var string
     */
    protected $metaPagetitle = '';

    /**
     * Meta Keywords
     *
     * @var string
     */
    protected $metaKeywords = '';

    /**
     * Meta Description
     *
     * @var string
     */
    protected $metaDescription = '';

    /**
     * Different Preset
     *
     * @var boolean
     */
    protected $differentPreset = false;

    /**
     * sysLanguageUid
     *
     * @var integer
     */
    protected $sysLanguageUid = 0;

    /**
     * @var \In2code\In2studyfinder\Domain\Model\GlobalData
     */
    protected $globalDataPreset = null;

    /**
     * @var boolean
     */
    protected $hidden = false;

    /**
     * @var boolean
     */
    protected $deleted = false;

    /**
     * @var int
     */
    protected $l10nParent = 0;

    /**
     * @return int
     */
    public function getL10nParent(): int
    {
        return $this->l10nParent;
    }

    /**
     * @param int $l10nParent
     * @return StudyCourse
     */
    public function setL10nParent(int $l10nParent): StudyCourse
    {
        $this->l10nParent = $l10nParent;
        return $this;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the title
     *
     * @return string $sysLanguageUid
     */
    public function getSysLanguageUid()
    {
        return $this->sysLanguageUid;
    }

    /**
     * Sets the title
     *
     * @param string $sysLanguageUid
     * @return void
     */
    public function setSysLanguageUid($sysLanguageUid)
    {
        $this->sysLanguageUid = $sysLanguageUid;
    }

    /**
     * Returns the standardPeriodOfStudy
     *
     * @return int $standardPeriodOfStudy
     */
    public function getStandardPeriodOfStudy()
    {
        return $this->standardPeriodOfStudy;
    }

    /**
     * Sets the standardPeriodOfStudy
     *
     * @param int $standardPeriodOfStudy
     * @return void
     */
    public function setStandardPeriodOfStudy($standardPeriodOfStudy)
    {
        $this->standardPeriodOfStudy = $standardPeriodOfStudy;
    }

    /**
     * Returns the ectsCredits
     *
     * @return int $ectsCredits
     */
    public function getEctsCredits()
    {
        return $this->ectsCredits;
    }

    /**
     * Sets the ectsCredits
     *
     * @param int $ectsCredits
     * @return void
     */
    public function setEctsCredits($ectsCredits)
    {
        $this->ectsCredits = $ectsCredits;
    }

    /**
     * Returns the tuitionFee
     *
     * @return float $tuitionFee
     */
    public function getTuitionFee()
    {
        return $this->tuitionFee;
    }

    /**
     * Sets the tuitionFee
     *
     * @param float $tuitionFee
     * @return void
     */
    public function setTuitionFee($tuitionFee)
    {
        $this->tuitionFee = $tuitionFee;
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the universityPlace
     *
     * @return int $universityPlace
     */
    public function getUniversityPlace()
    {
        return $this->universityPlace;
    }

    /**
     * Sets the universityPlace
     *
     * @param int $universityPlace
     * @return void
     */
    public function setUniversityPlace($universityPlace)
    {
        $this->universityPlace = $universityPlace;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->contentElements = new ObjectStorage();

        $this->courseLanguages = new ObjectStorage();
        $this->addCourseLanguage(new CourseLanguage());

        $this->startsOfStudy = new ObjectStorage();
        $this->addStartOfStudy(new StartOfStudy());

        $this->typesOfStudy = new ObjectStorage();
        $this->addTypeOfStudy(new TypeOfStudy());

        $this->admissionRequirements = new ObjectStorage();
        $this->addAdmissionRequirement(new AdmissionRequirement());

        $this->academicDegree = new AcademicDegree();
        $this->department = new Department();
        $this->faculty = new Faculty();
    }

    /**
     * Adds a ContentElement
     *
     * @param TtContentInterface $contentElement
     * @return void
     */
    public function addContentElement($contentElement)
    {
        $this->contentElements->attach($contentElement);
    }

    /**
     * Removes a ContentElement
     *
     * @param TtContentInterface $contentElementToRemove The TtContent to be removed
     * @return void
     */
    public function removeContentElement($contentElementToRemove)
    {
        $this->contentElements->detach($contentElementToRemove);
    }

    /**
     * Returns the contentElements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TtContent> contentElements
     */
    public function getContentElements()
    {
        return $this->contentElements;
    }

    /**
     * Sets the contentElements
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TtContent> $contentElements
     * @return void
     */
    public function setContentElements(ObjectStorage $contentElements)
    {
        $this->contentElements = $contentElements;
    }

    /**
     * Returns the academicDegree
     *
     * @return AcademicDegreeInterface $academicDegree
     */
    public function getAcademicDegree()
    {
        return $this->academicDegree;
    }

    /**
     * Sets the academicDegree
     *
     * @param \In2code\In2studyfinder\Domain\Model\AcademicDegreeInterface $academicDegree
     * @return void
     */
    public function setAcademicDegree(AcademicDegreeInterface $academicDegree)
    {
        $this->academicDegree = $academicDegree;
    }

    /**
     * Returns the department
     *
     * @return DepartmentInterface $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department
     *
     * @param DepartmentInterface $department
     * @return void
     */
    public function setDepartment(DepartmentInterface $department)
    {
        $this->department = $department;
    }

    /**
     * Returns the faculty
     *
     * @return FacultyInterface $faculty
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Sets the faculty
     *
     * @param FacultyInterface $faculty
     * @return void
     */
    public function setFaculty(FacultyInterface $faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * Returns the typesOfStudy
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TypeOfStudy> $typesOfStudy
     */
    public function getTypesOfStudy()
    {
        return $this->typesOfStudy;
    }

    /**
     * Sets the typeOfStudy
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\TypeOfStudy> $typeOfStudy
     * @return void
     */
    public function setTypesOfStudy(ObjectStorage $typesOfStudy)
    {
        $this->typesOfStudy = $typesOfStudy;
    }

    /**
     * Adds a type of study
     *
     * @param TypeOfStudyInterface $typeOfStudy
     * @return void
     */
    public function addTypeOfStudy($typeOfStudy)
    {
        $this->typesOfStudy->attach($typeOfStudy);
    }

    /**
     * Removes a type of study
     *
     * @param TypeOfStudyInterface $typeOfStudyToRemove The type of study to be removed
     * @return void
     */
    public function removeTypeOfStudy($typeOfStudyToRemove)
    {
        $this->typesOfStudy->detach($typeOfStudyToRemove);
    }

    /**
     * Returns the courseLanguages
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\CourseLanguage> $courseLanguages
     */
    public function getCourseLanguages()
    {
        return $this->courseLanguages;
    }

    /**
     * Sets the courseLanguages
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\CourseLanguage> $courseLanguages
     * @return void
     */
    public function setCourseLanguages(ObjectStorage $courseLanguages)
    {
        $this->courseLanguages = $courseLanguages;
    }

    /**
     * Adds a CourseLanguage
     *
     * @param CourseLanguageInterface $courseLanguage
     * @return void
     */
    public function addCourseLanguage($courseLanguage)
    {
        $this->courseLanguages->attach($courseLanguage);
    }

    /**
     * Removes a CourseLanguage
     *
     * @param CourseLanguageInterface $courseLanguageToRemove The Course Language to be
     *     removed
     * @return void
     */
    public function removeCourseLanguage($courseLanguageToRemove)
    {
        $this->courseLanguages->detach($courseLanguageToRemove);
    }

    /**
     * Returns the admissionRequirements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\AdmissionRequirement> $admissionRequirements
     */
    public function getAdmissionRequirements()
    {
        return $this->admissionRequirements;
    }

    /**
     * Sets the admissionRequirements
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\AdmissionRequirement> $admissionRequirements
     * @return void
     */
    public function setAdmissionRequirements(ObjectStorage $admissionRequirements)
    {
        $this->admissionRequirements = $admissionRequirements;
    }

    /**
     * Adds a admissionRequirement
     *
     * @param AdmissionRequirementInterface $admissionRequirement
     * @return void
     */
    public function addAdmissionRequirement($admissionRequirement)
    {
        $this->admissionRequirements->attach($admissionRequirement);
    }

    /**
     * Removes a admissionRequirement
     *
     * @param AdmissionRequirementInterface $admissionRequirementToRemove The type of study
     *     to be removed
     * @return void
     */
    public function removeAdmissionRequirement($admissionRequirementToRemove)
    {
        $this->admissionRequirements->detach($admissionRequirementToRemove);
    }

    /**
     * Returns the startsOfStudy
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\StartOfStudy> $startsOfStudy
     */
    public function getStartsOfStudy()
    {
        return $this->startsOfStudy;
    }

    /**
     * Sets the startsOfStudy
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\In2code\In2studyfinder\Domain\Model\StartOfStudy> $startsOfStudy
     * @return void
     */
    public function setStartsOfStudy(ObjectStorage $startsOfStudy)
    {
        $this->startsOfStudy = $startsOfStudy;
    }

    /**
     * Adds a StartOfStudy
     *
     * @param StartOfStudyInterface $startOfStudy
     * @return void
     */
    public function addStartOfStudy($startOfStudy)
    {
        $this->startsOfStudy->attach($startOfStudy);
    }

    /**
     * Removes a startOfStudy
     *
     * @param StartOfStudyInterface $startOfStudyToRemove The start of study to be removed
     * @return void
     */
    public function removeStartOfStudy($startOfStudyToRemove)
    {
        $this->startsOfStudy->detach($startOfStudyToRemove);
    }

    /**
     * @return string
     */
    public function getMetaPagetitle()
    {
        return $this->metaPagetitle;
    }

    /**
     * @param string $metaPagetitle
     */
    public function setMetaPagetitle($metaPagetitle)
    {
        $this->metaPagetitle = $metaPagetitle;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return GlobalDataInterface
     */
    public function getGlobalDataPreset()
    {
        return $this->globalDataPreset;
    }

    /**
     * @param GlobalDataInterface $globalDataPreset
     */
    public function setGlobalDataPreset($globalDataPreset)
    {
        $this->globalDataPreset = $globalDataPreset;
    }

    /**
     * @return bool
     */
    public function isDifferentPreset()
    {
        return $this->differentPreset;
    }

    /**
     * @param bool $differentPreset
     */
    public function setDifferentPreset($differentPreset)
    {
        $this->differentPreset = $differentPreset;
    }

    /**
     * @return GlobalDataInterface|null
     */
    public function getGlobalData()
    {
        $globalData = null;

        if ($this->isDifferentPreset()) {
            $globalData = $this->getGlobalDataPreset();
        } else {
            $globalData = GlobalDataUtility::getDefaultPreset();
        }

        return $globalData;
    }

    public function getTitleWithAcademicDegree()
    {
        return $this->getTitle() . ' - ' . $this->getAcademicDegree()->getDegree();
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * @param bool $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * compare function for sorting
     *
     * DE: ein Workaround für die Sortierung nach Titel. Da die Sortierung über das
     * Repository ($defaultOrderings) bei übersetzten Datensätzen nicht richtig funktioniert.
     * Soll nach anderen Kriterien sortiert werden kann diese Funktion einfach überschrieben werden.
     *
     * z.B.
     *
     * public static function cmpObj($studyCourseA, $studyCourseB)
     * {
     *     $al = strtolower($studyCourseA->getTitle());
     *     $bl = strtolower($studyCourseB->getTitle());
     *
     *     if ($al == $bl) {
     *       return $studyCourseB->getAcademicDegree()->getSorting() - $studyCourseB->getAcademicDegree()->getSorting();
     *     }
     *
     *     return strcmp($studyCourseA->getTitle(), $studyCourseB->getTitle());
     * }
     *
     * würde erst nach Titel alphabetisch und danach nach dem Akademischem Grad ("sorting" im Backend durch den
     * Redakteur gepflegt) sortieren.
     *
     * @param $studyCourseA StudyCourseInterface
     * @param $studyCourseB StudyCourseInterface
     * @return int
     */
    public static function cmpObj($studyCourseA, $studyCourseB)
    {
        return strcmp(strtolower($studyCourseA->getTitle()), strtolower($studyCourseB->getTitle()));
    }
}
