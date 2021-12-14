<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Article{
   
   /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer")
    */
   private $id;

   /**
    * @ORM\Column(type="string")
    */
   private $title;

   /**
    * @ORM\Column(type="text")
    */
    private $content;

    /**
    * @ORM\Column(type="datetime")
    */
    private $publisehdAt;

    /**
    * @ORM\Column(type="boolean")
    */
    private $isPublished;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="articles")
     */
    private $category;

   
   /**
    * Get the value of title
    */ 
   public function getTitle()
   {
      return $this->title;
   }

   /**
    * Set the value of title
    *
    * @return  self
    */ 
   public function setTitle($title)
   {
      $this->title = $title;

      return $this;
   }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of publisehdAt
     */ 
    public function getPublisehdAt()
    {
        return $this->publisehdAt;
    }

    /**
     * Set the value of publisehdAt
     *
     * @return  self
     */ 
    public function setPublisehdAt($publisehdAt)
    {
        $this->publisehdAt = $publisehdAt;

        return $this;
    }

    /**
     * Get the value of isPublished
     */ 
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set the value of isPublished
     *
     * @return  self
     */ 
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

  
}
