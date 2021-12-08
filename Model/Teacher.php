<?php

class Teacher extends StudentController
{
    private string | null $id;

    private string | null $name;

    private string | null $email;

    private array $assignedStudents;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getAssignedStudents(): array
    {
        return $this->assignedStudents;
    }

    /**
     * @param array $assignedStudents
     */
    public function setAssignedStudents(array $assignedStudents): void
    {
        $this->assignedStudents = $assignedStudents;
    }




}