<?php

declare(strict_types=1);

namespace App\Form\Extension\Admin;

use App\Enum\Product\ProductColorEnum;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'required' => false,
                'choices' => ProductColorEnum::getChoices(),
                'label' => 'app.ui.product.color.label',
            ]);
    }
}
