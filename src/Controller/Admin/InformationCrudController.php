<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use App\Entity\Information;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
/* use EasyCorp\Bundle\EasyAdminBundle\Field\Crud;
 */use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InformationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Information::class;
    }



    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name','Nom de l\'enseigne'),
            TextField::new('address','Adresse'),
            TextField::new('city','Ville'),
            NumberField::new('postalCode', 'Code postale'),
            TextField::new('phoneNumber', 'Téléphone'),
            TextField::new('siret', 'Numéro Siret')

        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Coordonnées')
        ;
    }

}
