<?php

namespace App\Form;


use App\Entity\Modele;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class Voitureform extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
   $builder->add('serie',TextType::class)
       ->add('modele', TextType::class)
       ->add('marche', TextType::class)
       ->add('prix', NumberType::class)
       ->add('mark', EntityType::class ,

               [
                   "class"=>Modele::class,

                   "choice_label"=>"libelle",
                   "expanded"=>false,
                   "multiple"=>false ])

;
}
   public function getName(){
    return "Voiture" ;
   }
}