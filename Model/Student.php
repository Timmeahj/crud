<?php

class Student
{

    protected string | null $name;

    protected string | null $email;

    private string | null $class;

    private string | null $teacher;

    /**
     * @param string|null $name
     * @param string|null $email
     * @param string|null $class
     * @param string|null $teacher
     */
    public function __construct(?string $name, ?string $email, ?string $class, ?string $teacher)
    {
        $this->name = $name;
        $this->email = $email;
        $this->class = $class;
        $this->teacher = $teacher;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getTeacher(): string
    {
        return $this->teacher;
    }

    /**
     * @param string $teacher
     */
    public function setTeacher(string $teacher): void
    {
        $this->teacher = $teacher;
    }

}