<?php

namespace HotelBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateArrive',TextType::class, array(
            'attr' => ['class ' => 'form-control m-2  mb-3',
                'id' => 'result_from', 'placeholder' => 'Check in']
        ))
            ->add('dateSortie',TextType::class, array(
                'attr' => ['class ' => 'form-control m-2  mb-3',
                    'id' => 'result_to', 'placeholder' => 'Check out']
            ))
            ->add('typeChambre',EntityType::class,array('class'=>'HotelBundle:typeChambre','choice_label'=>'lib','multiple'=>false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HotelBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hotelbundle_reservation';
    }


}
