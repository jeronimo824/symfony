<?php

namespace App\Entity;

use App\Repository\LibrosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LibrosRepository::class)
 */
class Libros
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Editoriales", inversedBy="titulos")
    */

    private $editorial;


    private $sinopsis;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $n_paginas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->sinopsis;
    }

    public function setSinopsis(string $sinopsis): self
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    public function getNPaginas(): ?string
    {
        return $this->n_paginas;
    }

    public function setNPaginas(string $n_paginas): self
    {
        $this->n_paginas = $n_paginas;

        return $this;
    }
}
