<?php

namespace VTE\BackendVEGBundle\Admin;

use Sonata\UserBundle\Admin\Entity\UserAdmin as BaseAdmin;

class UserAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected $baseRoutePattern = 'utilisateurs';
}

//namespace VTE\BackendVEGBundle\Admin;
//
//use Sonata\AdminBundle\Admin\Admin;
//use Sonata\AdminBundle\Datagrid\ListMapper;
//use Sonata\AdminBundle\Datagrid\DatagridMapper;
//use Sonata\AdminBundle\Form\FormMapper;
//
//class UserAdmin extends Admin
//{
//    // Fields to be shown on create/edit forms
//    protected function configureFormFields(FormMapper $formMapper)
//    {
//        $formMapper
//            ->add('last_name', 'text', array('label' => 'Nom'))
//            ->add('first_name', 'text', array('label' => 'Prénom'))
//            ->add('telephone', 'text', array('label' => 'Téléphone'))
//            ->add('address', 'text', array('label' => 'Adresse postale'))
//            ->add('zipcode', 'text', array('label' => 'Code postal'))
//            ->add('city', 'text', array('label' => 'Ville'));
//    }
//
//    // Fields to be shown on filter forms
//    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
//    {
//        $datagridMapper
//            ->add('last_name')
//            ->add('first_name')
//            ->add('telephone')
//            ->add('address')
//            ->add('zipcode')
//            ->add('city');
//    }
//
//    // Fields to be shown on lists
//    protected function configureListFields(ListMapper $listMapper)
//    {
//        $listMapper
//            ->add('last_name')
//            ->add('first_name')
//            ->add('telephone')
//            ->add('address')
//            ->add('zipcode')
//            ->add('city');
//    }
//}