<?php

namespace HZ\Wonja237Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * PubliciteDefile
 *
 * @ORM\Table(name="PubliciteDefile")
 * @ORM\Entity(repositoryClass="HZ\Wonja237Bundle\Repository\PubliciteDefileRepository")
 * @ORM\HasLifecycleCallbacks
 */
class PubliciteDefile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram", type="string", length=255)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="twiter", type="string", length=255)
     */
    private $twiter;
    

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set description
     *
     * @param string $description
     *
     * @return PubliciteDefile
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

























    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;







    /**
     * Set name
     *
     * @param string $name
     *
     * @return PubliciteDefile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }















    /**
     * Set url
     *
     * @param string $url
     *
     * @return PubliciteDefile
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return PubliciteDefile
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }







    private $file;

    private $tempFilename;


    public function setFile(UploadedFile $file)
    {
      $this->file = $file;

      if(null !== $this->url){
        $this->tempFilename = $this->url;

        $this->url = null;
        $this->alt = null;
      }
    }

    public function getFile()
    {
      return $this->file;
    }



    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload()
    {
      if(null === $this->file){
        return;
      }

      $this->url = $this->file->guessExtension();

      $this->alt = $this->file->getClientOriginalName();

    }

    /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
     public function upload()
     {
       if(null === $this->file){
         return;
       }


       if(null !== $this->tempFilename){
         $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
         if(file_exists($oldFile)){
           unlink($oldFile);
         }
       }


       $this->file->move(
         $this->getUploadRootDir(),
         $this->id.'.'.$this->url
       );
     }


     /**
   * @ORM\PreRemove()
   */
      public function preRemoveUpload()
      {
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
      }


      /**
   * @ORM\PostRemove()
   */
       public function removeUpload()
       {
         if(file_exists($this->tempFilename)){
           unlink($this->tempFilename);
         }
       }

       public function getUploadDir()
       {
         return 'uploads/PubliciteDefile';
       }

       protected function getUploadRootDir()
       {
         return __DIR__.'/../../../../web/'.$this->getUploadDir();
       }


    public function __toString(){
          return $this->getFile();
        }

        public function getWebPath()
        {
          return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
        }


    /**
     * Set link
     *
     * @param string $link
     *
     * @return PubliciteDefile
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return PubliciteDefile
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return PubliciteDefile
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set twiter
     *
     * @param string $twiter
     *
     * @return PubliciteDefile
     */
    public function setTwiter($twiter)
    {
        $this->twiter = $twiter;

        return $this;
    }

    /**
     * Get twiter
     *
     * @return string
     */
    public function getTwiter()
    {
        return $this->twiter;
    }
}
