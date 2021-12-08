<?php 

class Student
{

    protected string | null $name;

    protected string | null $email;

    private int | null $class;

    

    /**
     * @param string|null $name
     * @param string|null $email
     * @param int|null $class
     *
     */
    public function __construct(?string $name, ?string $email, ?int $class)
    {
        $this->name = $name;
        $this->email = $email;
        $this->class = $class;
 
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
     * @return int
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param int $class
     */
    public function setClass(int $class): void
    {
        $this->class = $class;
    }

  

}


