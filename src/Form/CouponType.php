<?php

namespace App\Form;

use App\Entity\MoBlockCoupon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CouponType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userid')
            ->add('ownerid')
            ->add('forUserEmail')
            ->add('forUserName')
            ->add('forUserGender')
            ->add('enrolperiod')
            ->add('senddate')
            ->add('issend')
            ->add('redirectUrl')
            ->add('emailBody')
            ->add('submissionCode')
            ->add('logoid')
            ->add('typ')
            ->add('claimed')
            ->add('renderqrcode')
            ->add('roleid')
            ->add('batchid')
            ->add('timecreated')
            ->add('timemodified')
            ->add('timeexpired')
            ->add('timeclaimed')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MoBlockCoupon::class,
        ]);
    }
}
