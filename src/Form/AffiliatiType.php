<?php

namespace App\Form;

use App\Entity\GestAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AffiliatiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('usernameCanonical')
            ->add('email')
            ->add('emailCanonical')
            ->add('enabled')
            ->add('salt')
            ->add('password')
            ->add('lastLogin')
            ->add('locked')
            ->add('expired')
            ->add('expiresAt')
            ->add('confirmationToken')
            ->add('passwordRequestedAt')
            ->add('roles')
            ->add('credentialsExpired')
            ->add('credentialsExpireAt')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('createdBy')
            ->add('updatedBy')
            ->add('tipo')
            ->add('tipoaffiliazione')
            ->add('nome')
            ->add('cognome')
            ->add('nascitaData')
            ->add('cellulare')
            ->add('telefono')
            ->add('note')
            ->add('ragionesociale')
            ->add('indirizzo')
            ->add('cap')
            ->add('percentuale')
            ->add('nascitaProv')
            // ->add('provincia', ChoiceType::class, array( 
            //     'choice_label' => 'provincia'))
           
            
            ->add('nascitaComune')
            ->add('citta')
            ->add('affiliato')
            ->add('corsoGestionale')
            ->add('corsoMoodle')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GestAccount::class,
        ]);
    }
}
