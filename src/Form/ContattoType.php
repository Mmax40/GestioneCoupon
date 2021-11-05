<?php

namespace App\Form;

use App\Entity\Contatto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContattoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('cognome')
            ->add('nascitaData')
            ->add('sessomaschile')
            ->add('codicefiscale')
            ->add('cellulare')
            ->add('telefono')
            ->add('email')
            ->add('professione')
            ->add('albo')
            ->add('numiscrizione')
            ->add('note')
            ->add('ultimocontatto')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('emailSecondaria')
            ->add('pec')
            ->add('emailMarketing')
            ->add('liberoProfessionista')
            ->add('partitaIva')
            ->add('secondaProfessione')
            ->add('ragioneSociale')
            ->add('emailPartecipante')
            ->add('indirizzo')
            ->add('numeroCivico')
            ->add('cap')
            ->add('cartaIdentita')
            ->add('mansione')
            ->add('codidAtt')
            ->add('nascitaProv')
            ->add('residenzaComune')
            ->add('residenzaProvincia')
            ->add('commerciale')
            ->add('secondoAlboProvincia')
            ->add('nascitaComune')
            ->add('affiliato')
            ->add('utenteMoodle')
            ->add('primoAlboProvincia')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contatto::class,
        ]);
    }
}
