<?php

namespace App\Form;

use App\Entity\MdlUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtentiMoodleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auth')
            ->add('confirmed')
            ->add('policyagreed')
            ->add('deleted')
            ->add('suspended')
            ->add('mnethostid')
            ->add('username')
            ->add('password')
            ->add('idnumber')
            ->add('firstname')
            ->add('lastname')
            ->add('email')
            ->add('emailstop')
            ->add('phone1')
            ->add('phone2')
            ->add('institution')
            ->add('department')
            ->add('address')
            ->add('city')
            ->add('country')
            ->add('lang')
            ->add('calendartype')
            ->add('theme')
            ->add('timezone')
            ->add('firstaccess')
            ->add('lastaccess')
            ->add('lastlogin')
            ->add('currentlogin')
            ->add('lastip')
            ->add('secret')
            ->add('picture')
            ->add('description')
            ->add('descriptionformat')
            ->add('mailformat')
            ->add('maildigest')
            ->add('maildisplay')
            ->add('autosubscribe')
            ->add('trackforums')
            ->add('timecreated')
            ->add('timemodified')
            ->add('trustbitmask')
            ->add('imagealt')
            ->add('lastnamephonetic')
            ->add('firstnamephonetic')
            ->add('middlename')
            ->add('alternatename')
            ->add('moodlenetprofile')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdlUser::class,
        ]);
    }
}
