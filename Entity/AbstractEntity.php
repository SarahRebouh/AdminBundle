<?php

namespace Mweb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AbstractEntity
 *
 * @ORM\MappedSuperclass
 * @Gedmo\TranslationEntity(class="Mweb\AdminBundle\Entity\Translation\EntityTranslation")
 */
class AbstractEntity implements Translatable
{
        
        /**
         * Post locale
         * Used locale to override Translation listener's locale
         * @Gedmo\Locale
         */
        protected $locale;
        
        /**
         * @var integer
         * @Gedmo\Translatable
         * @ORM\Column(name="status_trans", type="smallint", options={"default" = 1})
         */
        private $statusTrans = true;
        
        
        /**
         * @var integer
         * @ORM\Column(name="show_in_menu", type="smallint", options={"default" = 1})
         */
        private $showInMenu = 1;
        
        
        /**
         * @var \DateTime
         * @ORM\Column(name="inserted", type="datetime", nullable=false)
         * @Gedmo\Timestampable(on="create")
         */
        private $created;
        
        /**
         * @var \DateTime
         * @ORM\Column(name="updated", type="datetime", nullable=false)
         * @Gedmo\Timestampable(on="update")
         */
        private $updated;
        
        
        /**
         * @ORM\ManyToOne(targetEntity="Mweb\AdminBundle\Entity\User")
         * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
         */
        private $createdBy;
        
        /**
         * @ORM\ManyToOne(targetEntity="Mweb\AdminBundle\Entity\User")
         * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
         */
        private $updatedBy;
        
        
        /**
         * @var string
         *
         * @ORM\Column(name="dev_alias", type="string", length=250, nullable=true)
         */
        private $devAlias;
        
        
        /**
         * @var integer
         * @ORM\Column(name="status", type="smallint", options={"default" = 1})
         */
        private $status = 1;
        
        /**
         * @ORM\Column(name="meta_desc", type="text", nullable=true)
         * @Gedmo\Translatable
         */
        private $metaDesc;
        
        /**
         * @var integer
         * @ORM\Column(name="position", type="smallint", nullable=true)
         * @Gedmo\SortablePosition
         */
        private $position;
        
        public function __construct()
        {
                $this->statusTrans = true;
                $this->status = 1;
        }
        
        /**
         * Sets translatable locale
         *
         * @param string $locale
         */
        public function setTranslatableLocale($locale)
        {
                $this->locale = $locale;
        }
        
        
        /**
         * Set statusTrans
         *
         * @param integer $statusTrans
         *
         * @return AbstractEntity
         */
        public function setStatusTrans($statusTrans)
        {
                $this->statusTrans = $statusTrans;
                
                return $this;
        }
        
        /**
         * Get statusTrans
         *
         * @return integer
         */
        public function getStatusTrans()
        {
                return $this->statusTrans;
        }
        
        /**
         * Set created
         *
         * @param \DateTime $created
         *
         * @return AbstractEntity
         */
        public function setCreated($created)
        {
                $this->created = $created;
                
                return $this;
        }
        
        /**
         * Get created
         *
         * @return \DateTime
         */
        public function getCreated()
        {
                return $this->created;
        }
        
        /**
         * Set updated
         *
         * @param \DateTime $updated
         *
         * @return AbstractEntity
         */
        public function setUpdated($updated)
        {
                $this->updated = $updated;
                
                return $this;
        }
        
        /**
         * Get updated
         *
         * @return \DateTime
         */
        public function getUpdated()
        {
                return $this->updated;
        }
        
        /**
         * Set status
         *
         * @param integer $status
         *
         * @return AbstractEntity
         */
        public function setStatus($status)
        {
                $this->status = $status;
                
                return $this;
        }
        
        /**
         * Get status
         *
         * @return integer
         */
        public function getStatus()
        {
                return $this->status;
        }
        
        /**
         * Set devAlias
         *
         * @param string $devAlias
         *
         * @return AbstractEntity
         */
        public function setDevAlias($devAlias)
        {
                $this->devAlias = $devAlias;
                
                return $this;
        }
        
        /**
         * Get devAlias
         *
         * @return string
         */
        public function getDevAlias()
        {
                return $this->devAlias;
        }
        
        /**
         * Set metaDesc
         *
         * @param string $metaDesc
         *
         * @return AbstractEntity
         */
        public function setMetaDesc($metaDesc)
        {
                $this->metaDesc = $metaDesc;
                
                return $this;
        }
        
        /**
         * Get metaDesc
         *
         * @return string
         */
        public function getMetaDesc()
        {
                return $this->metaDesc;
        }
        
        /**
         * Set showInMenu
         *
         * @param integer $showInMenu
         *
         * @return AbstractEntity
         */
        public function setShowInMenu($showInMenu)
        {
                $this->showInMenu = $showInMenu;
                
                return $this;
        }
        
        /**
         * Get showInMenu
         *
         * @return integer
         */
        public function getShowInMenu()
        {
                return $this->showInMenu;
        }
        
        
        /**
         * Set position
         *
         * @param integer $position
         *
         * @return AbstractEntity
         */
        public function setPosition($position)
        {
                $this->position = $position;
                
                return $this;
        }
        
        /**
         * Get position
         *
         * @return integer
         */
        public function getPosition()
        {
                return $this->position;
        }
        
        /**
         * Set createdBy
         *
         * @param \Mweb\AdminBundle\Entity\User $createdBy
         *
         * @return AbstractEntity
         */
        public function setCreatedBy(\Mweb\AdminBundle\Entity\User $createdBy = null)
        {
                $this->createdBy = $createdBy;
                
                return $this;
        }
        
        /**
         * Get createdBy
         *
         * @return \Mweb\AdminBundle\Entity\User
         */
        public function getCreatedBy()
        {
                return $this->createdBy;
        }
        
        /**
         * Set updatedBy
         *
         * @param \Mweb\AdminBundle\Entity\User $updatedBy
         *
         * @return AbstractEntity
         */
        public function setUpdatedBy(\Mweb\AdminBundle\Entity\User $updatedBy = null)
        {
                $this->updatedBy = $updatedBy;
                
                return $this;
        }
        
        /**
         * Get updatedBy
         *
         * @return \Mweb\AdminBundle\Entity\User
         */
        public function getUpdatedBy()
        {
                return $this->updatedBy;
        }
}
