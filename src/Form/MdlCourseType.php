<?php

namespace App\Form;

use App\Entity\MdlCourse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdlCourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category')
            ->add('sortorder')
            ->add('fullname')
            ->add('shortname')
            ->add('idnumber')
            ->add('summary')
            ->add('summaryformat')
            ->add('format')
            ->add('showgrades')
            ->add('newsitems')
            ->add('startdate')
            ->add('marker')
            ->add('maxbytes')
            ->add('legacyfiles')
            ->add('showreports')
            ->add('visible')
            ->add('visibleold')
            ->add('groupmode')
            ->add('groupmodeforce')
            ->add('defaultgroupingid')
            ->add('lang')
            ->add('calendartype')
            ->add('theme')
            ->add('timecreated')
            ->add('timemodified')
            ->add('requested')
            ->add('enablecompletion')
            ->add('completionnotify')
            ->add('cacherev')
            ->add('affiliato')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdlCourse::class,
        ]);
    }
}
