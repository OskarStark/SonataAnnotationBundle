<?php

declare(strict_types=1);

namespace KunicMarko\SonataAnnotationBundle\Tests\Fixtures;

use KunicMarko\SonataAnnotationBundle\Annotation as Sonata;

/**
 * @Sonata\Admin("Test")
 * @Sonata\Access("ROLE_VENDOR", permissions={"LIST"})
 * @Sonata\AddChild(class=EmptyClass::class, field="test")
 *
 * @Sonata\ActionButton("fake_template.html.twig")
 * @Sonata\DashboardAction("fake_template.html.twig")
 * @Sonata\ExportFormats({"json", "xml"})
 *
 * @Sonata\AddRoute("import")
 * @Sonata\AddRoute("send_mail", path="{id}/send_mail")
 * @Sonata\RemoveRoute("edit")
 *
 * @Sonata\DatagridValues({"test":"value"})
 *
 * @Sonata\ListAction("edit")
 * @Sonata\ListAction("delete")
 *
 * @author Marko Kunic <kunicmarko20@gmail.com>
 */
final class AnnotationClass
{
    /**
     * @Sonata\ExportField()
     * @Sonata\ShowField()
     * @Sonata\DatagridField()
     * @Sonata\FormField(action="create")
     * @Sonata\ListField(identifier=true)
     */
    private $field;

    /**
     * @Sonata\ExportAssociationField(field="name")
     * @Sonata\ShowAssociationField(field="name")
     * @Sonata\DatagridAssociationField(field="name")
     * @Sonata\ListAssociationField(field="name")
     * @Sonata\FormField()
     */
    private $parent;

    /**
     * @Sonata\ExportField("label")
     * @Sonata\FormField(action="edit")
     * @Sonata\ListField()
     */
    private $additionalField;

    /**
     * @Sonata\ExportField()
     * @Sonata\ShowField()
     * @Sonata\ListField()
     */
    public function method(): string
    {
        return 'value';
    }
}
