<?php
// src/AppBundle/Form/ProductType.php
namespace AppBundle\Form;

use AppBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImagePreparationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('brochurePreparation', FileType::class, array('label' => 'Insert preparation image'))
            ->add('savePrepation', SubmitType::class, array('label' => 'save','attr'=>array('class'=> 'btn btn-success')))
            // ...
        ;
    }

//    public function buildForm2(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            // ...
//

//            // ...
//        ;
//    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }
}