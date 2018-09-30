<?php
namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchCandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', SearchType::class)
            ->add('registrationdate', DateType::class)            
            ->add('subsidiary', ChoiceTyped::class)
            ->add('subsidiary', ChoiceType::class, array(
                'choices'  => array(
                'Maybe' => null,
                'Yes' => true,
                'No' => false) ))            
            ->add('save',SubmitType::class, array('label' => 'Suchen'))
        ;
    }
}