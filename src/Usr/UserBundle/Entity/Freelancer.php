<?php

namespace Usr\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Usr\UserBundle\Validator\Constraints\UniqueEntity as  UsrUniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Usr\UserBundle\Entity\Freelancer.
 *
 * @ORM\Table(name="freelancers")
 * @UsrUniqueEntity(fields = "username", targetClass = "Usr\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UsrUniqueEntity(fields = "email", targetClass = "Usr\UserBundle\Entity\User", message="fos_user.email.already_used")
 * @ORM\Entity(repositoryClass="Usr\UserBundle\Repository\FreelancerRepository")
 */
class Freelancer extends User {

    

}