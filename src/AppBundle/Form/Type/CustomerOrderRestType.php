<?php


namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CustomerOrderRestType
 *
 * @DI\Service("app.form.rest.type.customer_order")
 * @DI\Tag("form.type", attributes ={"alias" = "CustomerOrderRestType"})
 *
 * @package AppBundle\Form\Type
 * @author Tiko Banyini
 */
class CustomerOrderRestType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('zarAmount')
            ->add('foreignCurrency')
            ;
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'        => 'AppBundle\Form\Model\CustomerOrderCreateRest',
            'csrf_protection'   => false,
            'validation_groups' => array('save_rest'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'CustomerOrderRestType';
    }
}