<?php

namespace App\Controller\Admin;

use App\Entity\Articles;
use App\Entity\Categories;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ArticlesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Articles::class;
    }

    // public function configureCrud(Crud $crud): Crud
    // {
    //     return $crud
    //         ->setEntityLabelInSingular('Categories Article')
    //         ->setEntityLabelInPlural('Categories Articles')
    //         //->setSearchFields(['author', 'text', 'email'])
    //         ->setDefaultSort(['id' => 'DESC']);
    // }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('categories'));
    }

    public function configureFields(string $pageName): iterable
    {
        //     return [
        //         IdField::new('id'),
        //         TextField::new('title'),
        //         TextEditorField::new('description'),
        //     ];

        yield TextField::new('nameArticle');
        yield TextField::new('image');
        yield IntegerField::new('price');
        yield TextField::new('description');
        yield TextField::new('type');
        yield AssociationField::new('categories')
            ->setFormTypeOption('choice_label', 'nameCategory');
    }
}
